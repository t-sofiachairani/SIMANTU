<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tugas extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nama_tugas', 'mata_kuliah', 'waktu_tenggat', 'deskripsi'
    ];

}
