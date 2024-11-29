<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // Nama tabel eksplisit
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['nama', 'nim', 'prodi'];
    protected $hidden = [];

}
