<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = "nilai";
    protected $primaryKey = "id";
    protected $fillable = [
        'nilai_tugas', 'nilai_uts', 'nilai_uas', 'nim_mahs', 'nama_mahs', 'prodi_mahs' 
    ];
}
