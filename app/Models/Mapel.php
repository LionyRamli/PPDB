<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_mapel', 'nama_mapel', 'jumlah_jp', 'nama_guru'
        ];
}
