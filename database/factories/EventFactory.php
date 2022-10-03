<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\TechEvents;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TechEvents::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name,
            'starts'=> $this->faker->dateTime(2021-01-01),
            'ends'=> $this->faker->dateTime(2021-12-31),
            'status'=> 'CONFIRMED',
            'summary' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'location' => $this->faker->word,
            'uid' => $this->faker->domainName,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()


        ];
    }
}
