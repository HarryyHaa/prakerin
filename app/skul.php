<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skul extends Model
{
    protected $fillable = array ('nm_guru', 'matapelajaran', 'alamat', 'nm_sekolah');
    public $timestamps = true;
}
