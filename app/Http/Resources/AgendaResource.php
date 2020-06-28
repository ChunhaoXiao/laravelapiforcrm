<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;
class AgendaResource extends JsonResource
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
        $data['time'] = $this->time;
        $data['theme'] = $this->type->name;
        $data['status'] = $this->status;
       //$data['agent_end'] = $this->agent_end;
       // $data['agent_start'] = $this->ag
        $data['description'] =  !empty($this->description) ? Str::limit($this->description, 20) : '';
        return $data;
    }


}
