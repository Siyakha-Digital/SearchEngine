<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SMME;
use App\Models\Category;

class SMMEsTableSeeder extends Seeder
{
    public function run()
    {
        $retail = Category::create(['name' => 'Retail']);
        $tech = Category::create(['name' => 'Tech']);

        $smme1 = SMME::create([
            'name' => 'Example SMME 1',
            'slogan' => 'Quality You Can Trust',
            'image' => 'path/to/image1.jpg',
            'category' => json_encode(['Retail']),
            //'contact_details' => 'example1@example.com',
        ]);

        $smme2 = SMME::create([
            'name' => 'Example SMME 2',
            'slogan' => 'Innovating Future',
            'image' => 'path/to/image2.jpg',
            'category' => json_encode(['Tech']),
            //'contact_details' => 'example2@example.com',
        ]);

        $smme1->categories()->attach($retail);
        $smme2->categories()->attach($tech);
    }
}
