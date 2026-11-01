<?php

namespace App\Http\Controllers;

use App\Models\AnggotaDewan;
use App\Services\SchoolUnitService;
use Illuminate\Http\Request;

class DewanController extends Controller
{
    /**
     * Tampilan Direktori Dewan Guru, Pengurus Yayasan, dan Tenaga Kependidikan.
     * Mendukung tab per unit: Yayasan, TKS IT, SDS IT, SMPS IT.
     */
    public function index(Request $request, ?string $unit = null)
    {
        $unit = $unit ?? $request->query('unit', 'all');
        $units = SchoolUnitService::getUnits();
        $currentUnitKey = in_array($unit, ['tk', 'sd', 'smp', 'yayasan']) ? $unit : 'all';
        $currentUnit = ($currentUnitKey !== 'all') ? SchoolUnitService::getUnit($currentUnitKey) : null;

        $dbDewan = AnggotaDewan::orderBy('order', 'asc')->get();

        $unitGurus = [
            'yayasan' => SchoolUnitService::getUnit('yayasan')['pengurus'] ?? [],
            'tk' => SchoolUnitService::getUnit('tk')['gurus'] ?? [],
            'sd' => SchoolUnitService::getUnit('sd')['gurus'] ?? [],
            'smp' => $dbDewan->isNotEmpty()
                ? $dbDewan->map(fn ($d) => [
                    'name' => $d->name,
                    'position' => $d->position,
                    'photo' => $d->photo ?? '/uploads/dewan/avatar-default.svg',
                    'fraction' => $d->fraction ?? 'Guru Bidang Studi',
                ])->toArray()
                : (SchoolUnitService::getUnit('smp')['gurus'] ?? []),
        ];

        return view('frontend.dewan.index', compact('dbDewan', 'unitGurus', 'units', 'currentUnitKey', 'currentUnit'));
    }
}
