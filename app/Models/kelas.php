<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    // Nama tabel (opsional, default = "kelass" -> jamak)
    protected $table = 'kelas';

    // Kolom yang bisa diisi mass-assignment
    protected $fillable = [
        'nama',
        'jumlahkelas',
    ];
}