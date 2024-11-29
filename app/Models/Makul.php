<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Makul extends Model
{
    // Nama tabel eksplisit
    protected $table = 'makul';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['kode_makul', 'nama_makul', 'sks'];
    protected $hidden = [];
}
