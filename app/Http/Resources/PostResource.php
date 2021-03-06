<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'Title' => $this->Title,
            'Body' => $this->Body
        ];
    }

    public function with($request){
        return [
            'version' => '1.0.0',
            'author_url' => url('www.google.com')
        ];
    }
}
