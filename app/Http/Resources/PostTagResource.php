<?php

namespace App\Http\Resources;

use App\Models\PostTag;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin PostTag */
class PostTagResource extends JsonResource
{
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'post_id' => $this->post_id,
            'tag_id' => $this->tag_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
