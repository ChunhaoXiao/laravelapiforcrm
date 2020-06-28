<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Jenssegers\Date\Date;

class Thread extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $data = parent::toArray($request);
        $data['src'] = $this->src->name;
        $data['create_time'] = Date::parse($this->created_at)->diffForHumans();
        $data['level'] = $this->level->name;
        $data['industry'] = $this->industry->name;
        $data['call_date'] = $this->call_date->toDateString();
        return $data;
    }
}
