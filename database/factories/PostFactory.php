<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'title' => $this->faker->word(),
            'body' => $this->faker->text(500),
            'post_status_enum' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
