<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'post_id' => \App\Models\Post::factory(),
            'user_id' => \App\Models\User::factory(),
            'body' => $this->faker->word(),
            'likes' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
