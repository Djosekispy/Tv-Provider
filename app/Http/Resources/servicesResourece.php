<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class servicesResourece extends JsonResource
{
  
    public function toArray(Request $request): array
    {
        return [
            'name' => strtoupper($this->name),
            //'description' => $this->description,
            //'price' => $this->price,
        ];
    }
}
