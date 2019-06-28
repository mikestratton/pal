<?php

namespace PAL;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class PhotoMemory extends Model
{
    use Searchable;

    protected $fillable = [
        'user_id',
        'photo_id',
        'name',
        'description',
        'year_born',
        'year_died',
    ];

    public function photo(){
        return $this->belongsTo('PAL\Photo');
    }

    public function user(){
        return $this->belongsTo('PAL\User');
    }
}
