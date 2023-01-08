<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';
    protected $primaryKey = 'id';

    protected $fillable = [
            'nim','nama','jenis_kelamin', 'alamat', 'prodi', 'semester', 'kelas', 'tahun_angkatan'
    ];
}
