<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Reply;

use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function likeIt(Reply $reply){
        $reply->like()->create(['user_id'=> '5fbcfa6d8d1d0000f3007372']);
        return response('created');
    }

    public function unlikeIt(Reply $reply){
        $reply->like()->where('user_id = 5fbcfa6d8d1d0000f3007372')->delete();
        return response("deleted llike");
    }
}
