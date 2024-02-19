<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected function numberCreator()
    {
        $countryCode = '380';
        $operatorCodes = ['63','50', '93', '98', '95', '97'];

        $randomOperatorCode = $operatorCodes[array_rand($operatorCodes)];
        $randomNumber = mt_rand(1000000, 9999999);

        return $countryCode . $randomOperatorCode . $randomNumber;
    }

    public function definition(): array
    {
        return [
            'number' => $this->numberCreator(),
            "user_id" => User::get()->random()->id,
        ];
    }
}
