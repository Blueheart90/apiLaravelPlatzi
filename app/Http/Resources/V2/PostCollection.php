<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{

    // Indicamos en que formato se va a devolver la colección
    // en este caso no hace falta, ya laravel lo hace por nosotros
    //public $collects = PostResource::class;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'meta' => [
                'organization' => 'jbernalme',
                'authors' => [
                    'jesus',
                    'juan',
                ],
            ],
            'type' => 'posts',
        ];
    }
}
