<?php

namespace PAL;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name'
    ];

    public function user(){

        return $this->hasMany('PAL\User');
    }
}
