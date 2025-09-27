<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;

    // Nama tabel (opsional, default = "mahasiswas" -> jamak)
    protected $table = 'dosen';

    // Kolom yang bisa diisi mass-assignment
    protected $fillable = [
        'nama',
        'nip',
    ];
}