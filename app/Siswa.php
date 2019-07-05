<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = array ('nama', 'kelas', 'umur', 'hobi', 'sekolah');
    public $timestamps = true;
}
