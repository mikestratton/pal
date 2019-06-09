<?php

namespace PhotosAfterLife;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'user_id',
        'file',
        'caption',
    ];

    public function memory(){
        return $this->belongsTo('PhotosAfterLife\PhotoMemory');
    }
}
