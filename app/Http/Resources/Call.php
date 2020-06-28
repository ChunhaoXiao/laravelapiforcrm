<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Call extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $datas =  parent::toArray($request);
        $datas['from_now'] = $this->from_now;
        $datas['created_date'] = $this->created_at->toDateString();
       // $datas['type'] = $this->;
        return $datas;
    }
}
