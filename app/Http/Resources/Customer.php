<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Jenssegers\Date\Date;

class Customer extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $datas = parent::toArray($request);
        //$datas['aaa'] = 'aaaaa';
        $datas['level'] = $this->level->name;
        $datas['created_time'] = Date::parse($this->created_at)->diffForHumans();
        $datas['source'] = $this->source->name;
        $datas['industry'] = $this->industry->name;
        $datas['created_at'] = $this->created_at->toDateString();
        $datas['updated_at'] = $this->updated_at->toDateString();
        $datas['last_call_time'] = $this->last_call_time;
        return $datas;
        ///return parent::toArray($request);
        // return [

        // ];
    }
}
