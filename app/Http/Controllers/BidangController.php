<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Services\SchoolUnitService;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    public function index(Request $request, ?string $unit = null)
    {
        $unitKey = $unit ?? $request->query('unit', 'all');
        $units = SchoolUnitService::getUnits();
        $currentUnitKey = in_array($unitKey, ['tk', 'sd', 'smp', 'yayasan']) ? $unitKey : 'all';
        $currentUnit = ($currentUnitKey !== 'all') ? SchoolUnitService::getUnit($currentUnitKey) : null;

        $bidangs = Bidang::orderBy('order', 'asc')->get();

        return view('frontend.bidang.index', compact('bidangs', 'units', 'currentUnitKey', 'currentUnit'));
    }

    public function show(string $slug)
    {
        $bidang = Bidang::where('slug', $slug)->firstOrFail();
        $otherBidangs = Bidang::where('id', '!=', $bidang->id)->take(5)->get();

        return view('frontend.bidang.show', compact('bidang', 'otherBidangs'));
    }
}
