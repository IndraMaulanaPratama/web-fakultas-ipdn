<?php

namespace Database\Factories;

use App\Models\article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\article>
 */
class articleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = article::class;


    public function definition(): array
    {
        return [
            'ARTICLE_CATEGORY' => random_int(1, 4),
            'ARTICLE_TITLE' => fake()->sentence(),
            'ARTICLE_CONTENT' => fake()->paragraphs(5, true),
            'ARTICLE_STATUS' => random_int(0, 2),

            'ARTICLE_CREATED_AT' => Carbon::now('Asia/Jakarta'),
            'ARTICLE_CREATED_BY' => 1,
        ];
    }
}
