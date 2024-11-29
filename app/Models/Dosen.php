<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    // Nama tabel eksplisit
    protected $table = 'dosen';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['nama', 'nidn', 'bidang'];
    protected $hidden = [];
}
