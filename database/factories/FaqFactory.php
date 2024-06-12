<?php

namespace Database\Factories;

use App\Models\Faq;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Faq>
 */
class FaqFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Faq::class;

    public function definition()
    {
        return [
            'question' => $this->faker->sentence,
            'answer' => $this->faker->paragraph,
            'link' => $this->faker->url,
        ];
    }
}
