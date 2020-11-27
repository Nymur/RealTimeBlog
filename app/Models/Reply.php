<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Reply extends Eloquent
{
    use HasFactory;

    // protected $fillable = [];
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function question(){
        return $this->belongsTo('App\Models\Question');
    }

    public function like(){
        return $this->hasMany('App\Models\Like');
    }
}
