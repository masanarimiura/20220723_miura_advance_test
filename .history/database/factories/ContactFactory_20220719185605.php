<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition()
    {
        $gender = ['男性','女性'];
        return [
            'full_name' => $this->faker->name,
            'gender' => $this->faker->randomElement($gender),
            'email' => $this->faker->email,
            'email' => $this->faker->email,
            'email' => $this->faker->email,

            'age' => $this->faker->numberBetween(1,100),
            'nationality' =>$this->faker->country
        ];
    }
}
