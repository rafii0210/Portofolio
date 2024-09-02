<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experiences extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'perusahaan',
        'posisi',
        'tugas',
        'tanggal_masuk',
        'tanggal_keluar'
    ];
}
