<?php

namespace Database\Seeders;

use\App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Reviewseeder extends Seeder
{
    public function run(): void
    {
        Review::create([

            'id' => 1,
            'movie' => 'jojo Bizzare Adventure',
            'user' => 'Rantiamaliah',
            'rating' => '5.00',
            'date' => '14 Januari 2024',
        ]);
        
       Review::create([
            'id' => 2,
            'movie' => 'Noragami',
            'user' => 'Rafingrh',
            'rating' => '4.50',
            'date' => '9 Maret 2024',
        ]);
        
        Review::create([
            'id' => 3,
            'movie' => 'Wind Breaker',
            'user' => 'Adityw',
            'rating' => '4.80',
            'date' => '20 April 2024',
        ]);
        
        Review::create([
            'id' => 4,
            'movie' => 'Spy X Family',
            'user' => 'Wawapz',
            'rating' => '5.00',
            'date' => '21 Mei 2024',
        ]);

        Review::create([
            'id' => 5,
            'movie' => 'Toradora',
            'user' => 'Ygzenx',
            'rating' => '4.80',
            'date' => '28 Mei 2024',
        ]);    
    }
}
