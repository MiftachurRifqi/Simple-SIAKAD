<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = "jadwal";
    protected $primaryKey = "id";
    protected $fillable = [
        'matakuliah', 'dosen', 'ruangan', 'waktu', 
    ];
}
