<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'description',
        'user_id',
    ];


    public function user() {
        return $this->belongsTo('App\User');
    }

    public function path() {
        return $this->hasMany('App\Path');
    }
}
