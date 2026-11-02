<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\AnggotaDewan;
use App\Models\Bidang;
use App\Models\Dpc;
use App\Models\Post;
use App\Models\Testimonial;
use App\Services\SchoolUnitService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function sambutan(Request $request, ?string $unit = null)
    {
        $unitKey = $unit ?? $request->query('unit', ($request->is('yayasan*') ? 'yayasan' : 'smp'));
        $units = SchoolUnitService::getUnits();
        $currentUnitKey = in_array($unitKey, ['tk', 'sd', 'smp', 'yayasan']) ? $unitKey : 'smp';
        $currentUnit = SchoolUnitService::getUnit($currentUnitKey);

        $slug = match ($currentUnitKey) {
            'yayasan' => 'sambutan-ketua-yayasan',
            'tk' => 'sambutan-kepala-tks-it',
            'sd' => 'sambutan-kepala-sds-it',
            default => 'sambutan-kepala-sekolah',
        };

        $page = Post::pages()->where('slug', $slug)->first()
            ?? Post::pages()->where('slug', 'sambutan-kepala-sekolah')->first();

        // Custom leader object depending on unit
        $kepsek = (object) [
            'name' => $currentUnit['leader_name'] ?? 'Ribang Imam Satria, S.Pi., Gr.',
            'position' => ($currentUnit['leader_title'] ?? 'Kepala Sekolah').' '.$currentUnit['short_name'],
            'photo' => $currentUnit['leader_photo'] ?? '/uploads/dewan/kepala-sekolah.webp',
        ];

        return view('frontend.pages.sambutan', compact('page', 'kepsek', 'units', 'currentUnitKey', 'currentUnit'));
    }

    public function tentangKami(Request $request, ?string $unit = null)
    {
        $unitKey = $unit ?? $request->query('unit', ($request->is('yayasan*') ? 'yayasan' : 'all'));
        $units = SchoolUnitService::getUnits();
        $currentUnitKey = in_array($unitKey, ['tk', 'sd', 'smp', 'yayasan']) ? $unitKey : 'all';
        $currentUnit = ($currentUnitKey !== 'all') ? SchoolUnitService::getUnit($currentUnitKey) : null;

        $slug = match ($currentUnitKey) {
            'yayasan' => 'tentang-yayasan',
            'tk' => 'tentang-tks-it',
            'sd' => 'tentang-sds-it',
            'smp' => 'tentang-kami',
            default => 'tentang-kami',
        };

        $page = Post::pages()->where('slug', $slug)->first()
            ?? Post::pages()->where('slug', 'tentang-kami')->first();
        $testimonials = Testimonial::all();

        return view('frontend.pages.tentang-kami', compact('page', 'testimonials', 'units', 'currentUnitKey', 'currentUnit'));
    }

    public function visiMisi(Request $request, ?string $unit = null)
    {
        $unitKey = $unit ?? $request->query('unit', ($request->is('yayasan*') ? 'yayasan' : 'all'));
        $units = SchoolUnitService::getUnits();
        $currentUnitKey = in_array($unitKey, ['tk', 'sd', 'smp', 'yayasan']) ? $unitKey : 'all';
        $currentUnit = ($currentUnitKey !== 'all') ? SchoolUnitService::getUnit($currentUnitKey) : null;

        $slug = match ($currentUnitKey) {
            'yayasan' => 'visi-misi-yayasan',
            'tk' => 'visi-misi-tks-it',
            'sd' => 'visi-misi-sds-it',
            'smp' => 'visi-dan-misi',
            default => 'visi-dan-misi',
        };

        $page = Post::pages()->where('slug', $slug)->first()
            ?? Post::pages()->where('slug', 'visi-dan-misi')->first();
        $latestPosts = Post::articles()->published()->latest('published_at')->take(5)->get();
        $latestAgendas = Agenda::where('status', '!=', 'draft')->orderBy('event_date', 'desc')->take(5)->get();

        return view('frontend.pages.visi-misi', compact('page', 'latestPosts', 'latestAgendas', 'units', 'currentUnitKey', 'currentUnit'));
    }

    public function sejarah(Request $request, ?string $unit = null)
    {
        $unitKey = $unit ?? $request->query('unit', ($request->is('yayasan*') ? 'yayasan' : 'yayasan'));
        $units = SchoolUnitService::getUnits();
        $currentUnitKey = in_array($unitKey, ['tk', 'sd', 'smp', 'yayasan']) ? $unitKey : 'yayasan';
        $currentUnit = SchoolUnitService::getUnit($currentUnitKey);

        $slug = match ($currentUnitKey) {
            'yayasan' => 'sejarah-yayasan',
            'tk' => 'sejarah-tks-it',
            'sd' => 'sejarah-sds-it',
            'smp' => 'sejarah',
            default => 'sejarah',
        };

        $page = Post::pages()->where('slug', $slug)->first()
            ?? Post::pages()->where('slug', 'sejarah')->first();
        $latestPosts = Post::articles()->published()->latest('published_at')->take(5)->get();
        $latestAgendas = Agenda::where('status', '!=', 'draft')->orderBy('event_date', 'desc')->take(5)->get();

        return view('frontend.pages.sejarah', compact('page', 'latestPosts', 'latestAgendas', 'units', 'currentUnitKey', 'currentUnit'));
    }

    public function struktur(Request $request, ?string $unit = null)
    {
        $unitKey = $unit ?? $request->query('unit', ($request->is('yayasan*') ? 'yayasan' : 'all'));
        $units = SchoolUnitService::getUnits();
        $currentUnitKey = in_array($unitKey, ['tk', 'sd', 'smp', 'yayasan']) ? $unitKey : 'all';
        $currentUnit = ($currentUnitKey !== 'all') ? SchoolUnitService::getUnit($currentUnitKey) : null;

        $slug = match ($currentUnitKey) {
            'yayasan' => 'struktur-yayasan',
            'tk' => 'struktur-tks-it',
            'sd' => 'struktur-sds-it',
            'smp' => 'struktur-organisasi',
            default => 'struktur-organisasi',
        };

        $page = Post::pages()->where('slug', $slug)->first()
            ?? Post::pages()->where('slug', 'struktur-organisasi')->first();
        $bidangs = Bidang::orderBy('order', 'asc')->get();
        $dpcs = Dpc::orderBy('order', 'asc')->get();
        $dewan = AnggotaDewan::orderBy('order', 'asc')->get();

        return view('frontend.pages.struktur', compact('page', 'bidangs', 'dpcs', 'dewan', 'units', 'currentUnitKey', 'currentUnit'));
    }

    public function privacyPolicy()
    {
        $page = Post::pages()->where('slug', 'privacy-policy')->first();

        return view('frontend.pages.privacy-policy', compact('page'));
    }

    public function dpc()
    {
        $dpcs = Dpc::orderBy('order', 'asc')->get();

        return view('frontend.dpc.index', compact('dpcs'));
    }

    /**
     * Contextual page loader for school units
     */
    public function showUnitPage(string $unit, string $slug)
    {
        $validUnits = ['tk', 'sd', 'smp'];
        if (! in_array($unit, $validUnits)) {
            return redirect()->route('home');
        }

        if ($slug === 'visi-misi' || $slug === 'visi-dan-misi') {
            return $this->visiMisi(request(), $unit);
        }

        if ($slug === 'tentang-kami') {
            return $this->tentangKami(request(), $unit);
        }

        if ($slug === 'sambutan-kepala-sekolah' || $slug === 'sambutan') {
            return $this->sambutan(request(), $unit);
        }

        if ($slug === 'struktur-organisasi' || $slug === 'struktur') {
            return $this->struktur(request(), $unit);
        }

        if ($slug === 'sejarah') {
            return $this->sejarah(request(), $unit);
        }

        return $this->show($slug);
    }

    public function show(string $slug)
    {
        $page = Post::pages()->where('slug', $slug)->firstOrFail();

        return view('frontend.pages.default', compact('page'));
    }
}
