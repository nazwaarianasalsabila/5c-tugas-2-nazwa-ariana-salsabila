<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{

    protected $table = 'mahasiswa';

    protected $fillable = ['npm', 'nama', 'jenis_kelamin', 'alamat', 'tempat_lahir', 'tanggal_lahir', 'photos', 'created_at', 'updated_at'];

    use HasFactory;
}
