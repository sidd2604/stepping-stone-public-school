<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use Faker\Factory as Faker;

class EventsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 20; $i++) {
            Event::create([
                'title' => $faker->sentence(4),
                'description' => $faker->paragraph(2),
                'event_date' => $faker->dateTimeBetween('-1 years', '+1 years')->format('Y-m-d'),
                'occasion' => $faker->word(),
                'main_image' => 'theme/images/1.jpg', // use images from your theme
                'gallery_images' => json_encode([
                    'theme/images/' . rand(1, 10) . '.jpg',
                    'theme/images/' . rand(1, 10) . '.jpg',
                ]),
                'classes_involved' => 'Class ' . rand(1, 6),
                'summary' => $faker->sentence(10),
            ]);
        }
    }
}
