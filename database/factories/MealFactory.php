<?php

namespace Database\Factories;

use App\Models\Meal;
use App\Models\MealTranslation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Locale;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Meal>
 */
class MealFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        
        return [
            
            /* 'title' => json_encode([
                'en' => $this->faker->sentence(),
                'fr' => $this->faker->sentence(),
                'es' => $this->faker->sentence(),
            ]),  */
            
            /* $this->setTranslations('title', 'en', $this->faker->sentence()),
            $this->setTranslations('title', 'fr', $this->faker->sentence()),
            $this->setTranslations('title', 'es', $this->faker->sentence()), */

            /* Meal::create([
                'title'=>[
                    'en' => $this->faker->sentence(),
                    'fr' => $this->faker->sentence(),
                    'es' => $this->faker->sentence(),
                ],
                'description' =>[
                    'fr' => $this->faker->text(),
                    'es' => $this->faker->text(),
                    'en' => $this->faker->text(),
                ],
               
            ]), */

            /* 'description' => json_encode([
                'fr' => $this->faker->text(),
                'es' => $this->faker->text(),
                'en' => $this->faker->text(),
            ]), */
            'title' => $this->faker->sentence(),
            'description' => $this->faker->text(),
            'status' => 'created'
        ]; 
    }
}
