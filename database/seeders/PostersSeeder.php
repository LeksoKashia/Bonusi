<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Posters;

class PostersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Posters::create([
            "title" => "Arrival",
            "body" => "Mystically Nice",
            "author" => 'Denis Villeneuve',
            "active" => 1
        ]);
        Posters::create([
            "title" => "The Life of David Gale",
            "body" => "Capital Punishmen",
            "author" => 'Alan Parker',
            "active" => 1
        ]);
        Posters::create([
            "title" => "True Romance",
            "body" => "Love",
            "author" => 'Tony Scott',
            "active" => 0
        ]);
        Posters::create([
            "title" => "The Jacket",
            "body" => "Retrograde Amnesia",
            "author" => 'John Maybury',
            "active" => 0
        ]);
        Posters::create([
            "title" => "The Martian",
            "body" => "Mars Life",
            "author" => 'Ridley Scott',
            "active" => 1
        ]);
        Posters::create([
            "title" => "Goodfellas",
            "body" => "Gangsta",
            "author" => 'Martin Scorsese',
            "active" => 1
        ]);
        Posters::create([
            "title" => "The Departed",
            "body" => "undercover",
            "author" => 'Martin Scorsese',
            "active" => 0
        ]);
        Posters::create([
            "title" => "The Godfather",
            "body" => "Mafia",
            "author" => 'Francis Ford Coppola',
            "active" => 1
        ]);
        Posters::create([
            "title" => "The Game",
            "body" => "The Best End in Movies",
            "author" => 'David Fincher',
            "active" => 1
        ]);
        Posters::create([
            "title" => "Taxi Driver",
            "body" => "Sigma",
            "author" => 'Martin Scorsese',
            "active" => 0
        ]);
    }
}
