<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'post_id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'published' => $this->is_published ? 'Published' : 'Not published',
            'tags' => TagResource::collection($this->whenLoaded('tags')),
            'secret' => $this->when($this->id == 4, 'secret value'),
            'url' => route('api.posts.show', $this->id)
        ];
    }
}
