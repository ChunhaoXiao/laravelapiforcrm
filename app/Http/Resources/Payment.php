<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Jenssegers\Date\Date;
class Payment extends JsonResource
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
        $datas['created_time'] = Date::parse($this->created_at)->diffForHumans();
        $datas['paymethod'] = $this->paymethod->name;
        $datas['customer'] = $this->customer->name;
        return $datas;
    }
}
