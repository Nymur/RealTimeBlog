<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Like extends Eloquent
{
    use HasFactory;

    protected $guarded = [];

    public function reply(){
        return $this->belongsTo('App\Models\Reply');
    }
}
