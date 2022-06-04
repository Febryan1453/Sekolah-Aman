<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataNik extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nik',
        'tlg_lahir',
        'tempat_lahir',
        'keterangan',
    ];
}
