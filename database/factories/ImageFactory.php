<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "url"=>$this->faker->imageUrl($width = 640, $height = 480),
            "name"=>$this->faker->name,
            "description"=>$this->faker->text(200),
            "color"=>$this->faker->randomElement($array = array ('primary','secondary','success','dark'))
        ];
    }
}
