<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Setting extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'key' => $this->key,
            'display_name' => $this->display_name,
            'value' => $this->value,
            'details' => $this->details,
            'type' => $this->type,
            'order' => $this->order,
            'group' => $this->group,
        ];
    }
}
