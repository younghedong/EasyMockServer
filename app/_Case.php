<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class _Case extends Model
{
    protected $table = 'cases';

    protected $fillable = [
        'response',
        'is_default',
        'description',
        'delay',
        'path_id',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function path() {
        return $this->belongsTo('App\Path');
    }
}
