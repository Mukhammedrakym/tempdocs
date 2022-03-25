<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TemplateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'filepath' => $this->faker->file('public/storage/templates', false, false),
            'fields' => $this->faker->text(),
        ];
    }
}
