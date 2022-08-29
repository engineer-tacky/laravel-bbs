<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Thread>
 */
class ThreadFactory extends Factory
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

        return [
            'category_id' => $category_id,
            'name' => fake()->city(),
        ];
    }
}
