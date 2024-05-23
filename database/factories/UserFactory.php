<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = $this->faker->boolean(); // true for male, false for female
        $country = Country::query()->firstWhere('en_short_name', 'Vietnam');

        $cityJsonFilePath = public_path() . "/json/city_vn.json";
        $city = (array) json_decode(file_get_contents($cityJsonFilePath));
        $cityId = $city[array_rand($city)];

        return [
            'first_name' => ($gender) ? $this->faker->firstNameMale() : $this->faker->firstNameFemale(),
            'last_name' => $this->faker->name(),
            'phone' => $this->faker->unique()->phoneNumber(),
            'birthday' => $this->faker->dateTimeBetween('1990-01-01', '2003-12-31'),
            'gender' => ($gender) ? 'male' : 'female',
            'avatar' => 'build/img/avatar1.jpg',
            'city_id' => $cityId->slug,
            'country_id' => $country->country_id,
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
