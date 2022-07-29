<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if ($this->resource == null) return null;

        return [
            "id" => $this->id,
            "category" => $this->category,
            "name" => $this->name,
            "price" => $this->price,
            "image" => $this->image,
            "amount" => $this->amount
        ];
    }
}
