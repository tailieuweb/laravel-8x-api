<?php namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'image' => $this->image,
            'category_id' => $this->category_id,
            'description' => $this->description,
            'created_at' => $this->created_at->format('m/d/Y'),
            'updated_at' => $this->updated_at->format('m/d/Y'),
        ];
    }

}
