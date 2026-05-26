<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;

class VolunteerController extends Controller
{
    public function index()
    {
        $volunteers = Volunteer::latest()->get();

        return view('volunteer.index', compact('volunteers'));
    }

    public function create()
    {
        return view('volunteer.create');
    }

    public function store(Request $request)
    {
        $jumlah = Volunteer::count() + 1;

        $nomorPeserta = str_pad($jumlah, 4, '0', STR_PAD_LEFT);

        $batch = $request->batch;

        $bulanRomawi = [
            1 => 'I',
            2 => 'II',
            3 => 'III',
            4 => 'IV',
            5 => 'V',
            6 => 'VI',
            7 => 'VII',
            8 => 'VIII',
            9 => 'IX',
            10 => 'X',
            11 => 'XI',
            12 => 'XII'
        ];

        $bulan = $bulanRomawi[date('n')];

        $tahun = date('Y');

        $nomorSertifikat =
            $nomorPeserta .
            '/TP-VOL/' .
            $batch .
            '/' .
            $bulan .
            '/' .
            $tahun;

        Volunteer::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'divisi' => $request->divisi,
            'batch' => $batch,
            'nomor_sertifikat' => $nomorSertifikat
        ]);

        return redirect('/');
    }

    public function destroy($id)
    {
        Volunteer::findOrFail($id)->delete();

        return redirect('/');
    }
}