<?php

namespace PAL;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name'
    ];

    public function user(){

        return $this->belongsTo('PAL\User');
    }
}
