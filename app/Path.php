<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Path extends Model
{
    protected $fillable = [
        'path',
        'description',
        'project_id',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function project() {
        return $this->belongsTo('App\Project');
    }

    public function case() {
        return $this->hasMany('App\Case');
    }
}
