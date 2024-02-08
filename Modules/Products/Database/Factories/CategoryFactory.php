<?php

namespace Modules\Products\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Products\App\Models\Category::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'parent_id' => null, // You may modify this based on your data structure
            'image' => null, // You may add image generation logic here
            'slug' => $this->faker->slug,
            'status' => 'active', // Default status
            'visibility' => true, // Default visibility
            'sort_order' => $this->faker->numberBetween(0, 100),
        ];
    }
}
