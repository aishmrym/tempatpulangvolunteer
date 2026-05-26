<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $fillable = [

        'batch_id',
        'nama',
        'email',
        'domisili',
        'nomor_hp',
        'instansi',
        'alasan',
        'nomor_sertifikat'

    ];

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
}