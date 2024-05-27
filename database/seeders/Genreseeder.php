<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Genreseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Horror',
            'description' => 'Horror film is a genre of film that seeks to provoke emotions in the form of fear or disgust from the audience. Their storylines often involve themes of death, the supernatural, or mental illness. Many horror film stories center on a certain evil antagonist.'
        ]);

        Genre::create([
            'name' => 'Thriller',
            'description' => 'Thriller genre is a type of genre designed to make the audience feel tense. This can be achieved through unanswered mysteries, troubling situations, and unpredictable threats. Thrillers often feature action, crime, and intrigue, with the main character fighting to uncover secrets or defeat powerful enemies.',
        ]);

        Genre::create([
            'name' => 'Action',
            'description' => 'In the context of film, action refers to the genre of film that features action scenes, such as fights, chases, or explosions.',
        ]);

        Genre::create([
            'name' => 'Comedy',
            'description' => 'Comedy film (comedy) is a type of film whose goal is to make the audience laugh. In comedy films, there is funny and funny humor that makes laughs, both through scenes, behavior, situations, to dialogues, conversations, and punchlines shown in the film.',
        ]);


        Genre::create([
            'name' => 'Romance',
            'description' => 'A romance film is a love story recorded in a visual medium for broadcast in theaters and television that focuses on the passion, emotions and affectionate involvement of the main characters and a truly powerful journey, their true and pure love that will carry them through dating, courtship or marriage.',
        ]);
    }
}
