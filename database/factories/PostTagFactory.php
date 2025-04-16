<?php

namespace Database\Factories;

use App\Models\PostTag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PostTagFactory extends Factory
{
    protected $model = PostTag::class;

    public function definition()
    {
        return [
            'post_id' => $this->faker->randomNumber(),
            'tag_id' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
