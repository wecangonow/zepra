<?php

namespace App\Http\Resources;

use App\Game;
use Illuminate\Http\Resources\Json\Resource;

class Video extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     *
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id'               => $this->id,
            'name'             => $this->name,
            'description'      => $this->description,
            'views'            => $this->views,
            'likes'            => $this->likes,
            'cover_image'      => $this->cover_image,
            'duration'         => $this->duration,
            'game_info'        => Game::find($this->game_id)->only(['name', 'logo']),
            'recommend_reason' => 'need to be verified',
        ];
    }
}
