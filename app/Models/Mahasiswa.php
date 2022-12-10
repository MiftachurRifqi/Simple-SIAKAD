<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";
    protected $primaryKey = "id";
    protected $fillable = [
        'nim_mhs', 'nama_mhs', 'fakultas_mhs', 'prodi_mhs', 'alamat_mhs', 'email_mhs' 
    ];
}
