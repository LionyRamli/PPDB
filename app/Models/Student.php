<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = [
        'nisn',
        'nama_lengkap',
        'nik',
        'jurusan',
        'jk',
        'tempat_lahir',
        'tgl_lahir',
        'agama',
        'kelas',
        'anak_ke',
        'alamat_siswa',
        'nama_ayah',
        'nik_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'nama_ibu',
        'nik_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        
    ];
}
