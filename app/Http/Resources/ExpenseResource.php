<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExpenseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

    public function toArray(Request $request): array
    {

        $data = [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'user_id' => $this->user_id,
            'category_id' => $this->category_id,
        ];


        return $data;
    }
}
