<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $fillable = [
        'nama_batch',
        'kota',
        'tanggal',
        'deskripsi'
    ];

    public function volunteers()
    {
        return $this->hasMany(Volunteer::class);
    }
}