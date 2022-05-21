<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Locations extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'         => $this->id,
            'num'        => $this->num,
            'name'       => $this->name,
            'sector_id'  => $this->sector_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];    
      }
}
