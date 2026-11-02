<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Services\SchoolUnitService;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request, ?string $unit = null)
    {
        $unitKey = $unit ?? $request->route('unit') ?? $request->query('unit');
        $units = SchoolUnitService::getUnits();
        $currentUnitKey = in_array($unitKey, ['tk', 'sd', 'smp', 'yayasan']) ? $unitKey : null;
        $currentUnit = $currentUnitKey ? SchoolUnitService::getUnit($currentUnitKey) : null;

        $query = Post::posts()->published()->with(['categories', 'author']);

        // Unit Scoping Isolation
        if ($currentUnitKey === 'tk') {
            $query->where(function ($q) {
                $q->whereHas('categories', fn ($c) => $c->where('slug', 'berita-tk'))
                    ->orWhere('title', 'like', '%TKS IT%')
                    ->orWhere('title', 'like', '%TK IT%')
                    ->orWhere('title', 'like', '%PAUD%');
            });
        } elseif ($currentUnitKey === 'sd') {
            $query->where(function ($q) {
                $q->whereHas('categories', fn ($c) => $c->where('slug', 'berita-sd'))
                    ->orWhere('title', 'like', '%SDS IT%')
                    ->orWhere('title', 'like', '%SD IT%');
            });
        } elseif ($currentUnitKey === 'smp') {
            $query->where(function ($q) {
                $q->whereHas('categories', fn ($c) => $c->where('slug', 'berita-smp'))
                    ->orWhere('title', 'like', '%SMPS IT%')
                    ->orWhere('title', 'like', '%SMP IT%');
            });
        }

        // Search filter
        if ($search = $request->input('q')) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('content', 'like', "%{$search}%");
            });
        }

        // Category filter
        $activeCategory = null;
        if ($categorySlug = $request->input('kategori')) {
            $activeCategory = Category::where('slug', $categorySlug)->first();

            if ($activeCategory) {
                $query->whereHas('categories', function ($q) use ($activeCategory) {
                    $q->where('categories.id', $activeCategory->id);
                });
            }
        }

        // Tag filter
        $activeTag = null;
        if ($tagSlug = $request->input('tag')) {
            $activeTag = Tag::where('slug', $tagSlug)->first();
            if ($activeTag) {
                $query->whereHas('tags', function ($q) use ($activeTag) {
                    $q->where('tags.id', $activeTag->id);
                });
            }
        }

        $posts = $query->orderBy('published_at', 'desc')->orderBy('id', 'desc')->paginate(9)->withQueryString();
        $categories = Category::withCount('posts')->orderBy('posts_count', 'desc')->get();

        if ($currentUnitKey === 'tk') {
            $recentPosts = Post::posts()->published()
                ->where(function ($q) {
                    $q->whereHas('categories', fn ($c) => $c->where('slug', 'berita-tk'))
                        ->orWhere('title', 'like', '%TKS IT%');
                })
                ->orderBy('published_at', 'desc')->take(5)->get();
        } elseif ($currentUnitKey === 'sd') {
            $recentPosts = Post::posts()->published()
                ->where(function ($q) {
                    $q->whereHas('categories', fn ($c) => $c->where('slug', 'berita-sd'))
                        ->orWhere('title', 'like', '%SDS IT%');
                })
                ->orderBy('published_at', 'desc')->take(5)->get();
        } elseif ($currentUnitKey === 'smp') {
            $recentPosts = Post::posts()->published()
                ->where(function ($q) {
                    $q->whereHas('categories', fn ($c) => $c->where('slug', 'berita-smp'))
                        ->orWhere('title', 'like', '%SMPS IT%');
                })
                ->orderBy('published_at', 'desc')->take(5)->get();
        } else {
            $recentPosts = Post::posts()->published()->orderBy('published_at', 'desc')->orderBy('id', 'desc')->take(5)->get();
        }
        $tags = Tag::all();

        return view('frontend.artikel.index', compact(
            'posts',
            'categories',
            'recentPosts',
            'tags',
            'activeCategory',
            'activeTag',
            'units',
            'currentUnitKey',
            'currentUnit'
        ));
    }

    public function show(string $slug)
    {
        $post = Post::published()
            ->where('slug', $slug)
            ->with(['categories', 'tags', 'author'])
            ->first();

        if (! $post) {
            abort(404);
        }

        if ($post->type === 'prestasi') {
            return redirect()->route('prestasi.show', $post->slug, 301);
        }

        if ($post->type === 'ekskul') {
            return redirect()->route('ekskul.show', $post->slug, 301);
        }

        // Increment views count
        $post->increment('views_count');

        // Related posts by category
        $categoryIds = $post->categories->pluck('id');
        $relatedPosts = Post::posts()
            ->published()
            ->where('id', '!=', $post->id)
            ->whereHas('categories', function ($q) use ($categoryIds) {
                $q->whereIn('categories.id', $categoryIds);
            })
            ->latest('published_at')
            ->take(3)
            ->get();

        if ($relatedPosts->isEmpty()) {
            $relatedPosts = Post::posts()
                ->published()
                ->where('id', '!=', $post->id)
                ->latest('published_at')
                ->take(3)
                ->get();
        }

        $categories = Category::withCount('posts')->orderBy('posts_count', 'desc')->get();
        $recentPosts = Post::posts()->published()->latest('published_at')->take(5)->get();

        return view('frontend.artikel.show', compact(
            'post',
            'relatedPosts',
            'categories',
            'recentPosts'
        ));
    }

    public function category(string $slug)
    {
        return redirect()->route('artikel.index', ['kategori' => $slug]);
    }

    public function tag(string $slug)
    {
        return redirect()->route('artikel.index', ['tag' => $slug]);
    }
}
