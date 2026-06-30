<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'desc' => $this->desc,
            'qty' => $this->qty,
            'price' => $this->price,
            'thumbnail' => $this->thumbnail,
            'sizes' => $this->sizes,
            'colors' => $this->colors,
        ];
    }
}
