<?php

namespace Database\Factories;

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
        return [
            // buatkan nama palsu faker(palsu)
            'name' => fake()->name(),
            // buat email fake tapi unik
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            // hash password agar tidak mengrimkan data password mentah-mentah
            // null qualishing operator, klo true pake nilai di dalamnya, klo null pake yg sebelah kanan
            // $a = $a ? $a : $b; // ternary operator
            // $a = $a ?; $b; elvis // operator
            // $a ?? $b; // null coalescing operator
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
    
    // merubah field admin
    public function is_admin(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_admin' => true,
        ]);
    }
}
