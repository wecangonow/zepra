<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Category;

class Game extends Resource
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

            'id'                   => $this->id,
            'name'                 => $this->name,
            'description'          => $this->description,
            'logo'                 => $this->logo,
            'corner_image'         => $this->corner_image,
            'stars'                => $this->stars,
            'category_name'        => Category::find($this->category_id)->getAttribute('name'),
            'ios_download_url'     => $this->ios_download_url,
            'android_download_url' => $this->android_download_url,
            'cover_image'          => $this->cover_image,
            'recommend_reason'     => 'need to be verified',
        ];
    }
}
