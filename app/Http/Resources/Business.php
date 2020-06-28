<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Jenssegers\Date\Date;
class Business extends JsonResource
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
        $data['create_time'] = Date::parse($this->created_at)->diffForHumans();
        $data['customer'] = $this->customer->name;
        $data['level'] = $this->level->name;
        $data['product'] = Product::collection($this->products);
        return $data;
    }
}
