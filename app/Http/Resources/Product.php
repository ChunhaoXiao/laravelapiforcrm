<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request);
       return [
           'id' => $this->id,
           'name' => $this->name,
           'price' => $this->price,
           'description' => $this->description,
           'cover' => $this->cover,
           'picturelist' => $this->picturelist,
           'on_sale' => $this->is_on_sale == 1 ? '已上架' :'已下架',
       ];
    }
}
