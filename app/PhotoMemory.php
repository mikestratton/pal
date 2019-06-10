<?php

namespace PAL;

use Illuminate\Database\Eloquent\Model;

class PhotoMemory extends Model
{
    protected $fillable = [
        'user_id',
        'photo_id',
        'name',
        'description',
        'year_born',
        'year_died',
    ];

    public function photo(){
        return $this->hasMany('PAL\Photo');
    }
}
