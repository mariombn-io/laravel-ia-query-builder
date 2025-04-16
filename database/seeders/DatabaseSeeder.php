<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Cria 100 tags únicas
        $tags = Tag::factory()->count(100)->create();

        // Cria 1.000 usuários
        $users = User::factory()->count(1000)->create();

        // Para cada usuário, cria de 1 a 5 posts
        $users->each(function ($user) use ($tags) {
            $posts = Post::factory()
                ->count(rand(1, 5))
                ->for($user)
                ->create();

            $posts->each(function ($post) use ($tags, $user) {
                // Atribui de 1 a 5 tags aleatórias
                $post->tags()->attach(
                    $tags->random(rand(1, 5))->pluck('id')->toArray()
                );

                // Cria de 3 a 10 comentários por post
                Comment::factory()
                    ->count(rand(3, 10))
                    ->for($post)
                    ->for(User::inRandomOrder()->first()) // autor aleatório
                    ->create();
            });
        });
    }
}
