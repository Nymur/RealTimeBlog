<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Models\User;
use App\Models\Reply;
use App\Models\Category;

class Question extends Eloquent
{
    use HasFactory;
    // protected $fillable = []; //this is good way
    protected $guarded = [];


    public function getRouteKeyName(){
        return 'slug';
    }

    public function getPathAttribute(){
        return asset("api/question/$this->slug");
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function replies(){
        return $this->hasMany(Reply::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
