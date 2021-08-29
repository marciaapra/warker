<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CidadeResource extends JsonResource
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
            "id" => $this->id,
            "cidade" => $this->nome,
            "coords" => [
                "latitude" => $this->latitude,
                "longitude" => $this->longitude
            ],
            "postos" => PostoResource::collection($this->postos)
        ];
    }
}
