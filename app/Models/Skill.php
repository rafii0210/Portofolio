<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends Model
{
    // SoftDeletes
    use HasFactory;
    protected $fillable = [
        'nama_skill',
        'sub_skills',
    ];
}
