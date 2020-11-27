<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReplyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' =>$this->_id,
            'reply' => $this->body,
            'question'=> $this->question->title,
            'created_at'=> $this->created_at->diffForHumans()
        ];
    }
}
