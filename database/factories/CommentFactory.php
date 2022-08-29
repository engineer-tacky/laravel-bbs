<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        //Categoryテーブルの中からランダムに1つのレコードのidを取得する。
        $category_id = \App\Models\Category::all()->random(1)[0]->id;

        //Threadテーブルの中からランダムに1つのレコードのidを取得する。
        $thread_id = \App\Models\Thread::all()->random(1)[0]->id;

        return [
            'category_id' => $category_id,
            'thread_id' => $thread_id,
            'comment' => fake()->realText(),
        ];
    }
}
