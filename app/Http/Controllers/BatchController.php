<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\Volunteer;

class BatchController extends Controller
{
    public function index()
    {
        $batches = Batch::latest()->get();

        $totalVolunteer = \App\Models\Volunteer::count();

        $totalBatch = Batch::count();

        $totalKota = Batch::distinct('kota')->count('kota');

        return view('batch.index', compact(
            'batches',
            'totalVolunteer',
            'totalBatch',
            'totalKota'
        ));
    }

    public function create()
    {
        return view('batch.create');
    }

    public function store(Request $request)
    {
        Batch::create([
            'nama_batch' => $request->nama_batch,
            'kota' => $request->kota,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/');
    }

    public function show($id)
    {
        $batch = Batch::findOrFail($id);

        $volunteers = Volunteer::where('batch_id', $id)->latest()->get();

        return view('batch.show', compact('batch', 'volunteers'));
    }

    public function storeVolunteer(Request $request, $id)
    {
        $batch = Batch::findOrFail($id);

        $jumlah = Volunteer::where('batch_id', $id)->count() + 1;

        $nomorPeserta = str_pad($jumlah, 4, '0', STR_PAD_LEFT);

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

        $bulan = $bulanRomawi[date('n', strtotime($batch->tanggal))];

        $tahun = date('Y', strtotime($batch->tanggal));

        $nomorSertifikat =
            $nomorPeserta .
            '/TP-VOL/' .
            $batch->nama_batch .
            '/' .
            $bulan .
            '/' .
            $tahun;

        Volunteer::create([

        'batch_id' => $id,

        'nama' => $request->nama,

        'email' => $request->email,

        'domisili' => $request->domisili,

        'nomor_hp' => $request->nomor_hp,

        'instansi' => $request->instansi,

        'alasan' => $request->alasan,

        'nomor_sertifikat' => $nomorSertifikat

]);

        return redirect('/batch/' . $id);
    }

    public function deleteVolunteer($id)
    {
        $volunteer = Volunteer::findOrFail($id);

        $batchId = $volunteer->batch_id;

        $volunteer->delete();

        return redirect('/batch/' . $batchId);
    }

    public function destroy($id)
    {
        $batch = Batch::findOrFail($id);

        $batch->delete();

        return redirect('/');
    }
}

    