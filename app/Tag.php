<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function artikel()
    {
        return $this->belongsToMany('App\Artikel', 'artikels_tags', 'tag_id', 'artikel_id');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
