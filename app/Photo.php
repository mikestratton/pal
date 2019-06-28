<?php

namespace PAL;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'user_id',
        'photo_memory_id',
        'file',
    ];

    public function memory(){
        return $this->belongsTo('PAL\PhotoMemory');
    }


}
