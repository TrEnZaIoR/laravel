<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prepod>
 */
class PrepodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake() -> name(),
            'fam' => fake() ->lastName(),
            'rost' => mt_rand(150,190),
            'grup' => fake() ->bloodGroup(),
            'sr' => mt_rand(2,5),
            'yer' => mt_rand(15,21),
            'created_at' => fake() -> dateTime(),
            'updated_at' => fake() -> dateTime(),
        ];
    }
}
