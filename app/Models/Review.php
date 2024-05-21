<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'id' => 1,
            'movie' => 'jojo Bizzare Adventure',
            'user' => 'Rantiamaliah',
            'rating' => '5.00',
            'date' => '14 Januari 2024',
        ],
        [
            'id' => 2,
            'movie' => 'Noragami',
            'user' => 'Rafingrh',
            'rating' => '4.50',
            'date' => '9 Maret 2024',
        ],
        [
            'id' => 3,
            'movie' => 'Wind Breaker',
            'user' => 'Adityw',
            'rating' => '4.80',
            'date' => '20 April 2024',
        ],
        [
            'id' => 4,
            'movie' => 'Spy X Family',
            'user' => 'Wawapz',
            'rating' => '5.00',
            'date' => '21 Mei 2024',
        ],
        [
            'id' => 5,
            'movie' => 'Toradora',
            'user' => 'Ygzenx',
            'rating' => '4.80',
            'date' => '28 Mei 2024',
        ],   
    ];

    public function getAllReview()
    {
        return $this->reviews;
    }


}