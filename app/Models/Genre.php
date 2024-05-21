<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'id' => 1,
            'name' => 'Horror',
            'descripsion' => 'Horror film is a genre of film that seeks to provoke emotions in the form of fear or disgust from the audience. Their storylines often involve themes of death, the supernatural, or mental illness. Many horror film stories center on a certain evil antagonist.',
        ],
        [
            'id' => 2,
            'name' => 'Thriller',
            'descripsion' => 'Thriller genre is a type of genre designed to make the audience feel tense. This can be achieved through unanswered mysteries, troubling situations, and unpredictable threats. Thrillers often feature action, crime, and intrigue, with the main character fighting to uncover secrets or defeat powerful enemies.',
        ],
        [
            'id' => 3,
            'name' => 'Action',
            'descripsion' => ' In the context of film, action refers to the genre of film that features action scenes, such as fights, chases, or explosions.',
        ],
        [
            'id' => 4,
            'name' => 'Comedy',
            'descripsion' => '  Comedy film (comedy) is a type of film whose goal is to make the audience laugh. In comedy films, there is funny and funny humor that makes laughs, both through scenes, behavior, situations, to dialogues, conversations, and punchlines shown in the film.',
        ],
        [
            'id' => 5,
            'name' => 'Romance',
            'descripsion' => '  A romance film is a love story recorded in a visual medium for broadcast in theaters and television that focuses on the passion, emotions and affectionate involvement of the main characters and a truly powerful journey, their true and pure love that will carry them through dating, courtship or marriage.',
        ],   
    ];

    public function getAllGenre()
    {
        return $this->genres;
    }


}