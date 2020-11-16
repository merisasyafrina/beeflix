<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Drama
        DB::table('movie')->insert(['genre_id'=>1, 
        'title'=>'Descendants of The Sun', 
        'photo'=>'assets/dots.jpg',
        'description'=>'This drama tells of the love story that develops between a surgeon and a special forces officer.',
        'rating'=>'4.9']);

        DB::table('movie')->insert(['genre_id'=>1, 
        'title'=>'Itaewon Class', 
        'photo'=>'assets/itaewonclass.jpg',
        'description'=>'The story of Park Sae Ro Yi who opens a restaurant in Itaewon.',
        'rating'=>'4.8']);

        DB::table('movie')->insert(['genre_id'=>1, 
        'title'=>'Reply 1988', 
        'photo'=>'assets/reply.jpg',
        'description'=>'Follows the lives of 5 families living on the same street in a neighbourhood called Ssangmundong in Seoul. It takes a nostalgic look back at the year 1988.',
        'rating'=>'4.7']);

        DB::table('movie')->insert(['genre_id'=>1, 
        'title'=>'Hospital Playlist', 
        'photo'=>'assets/hospitalplaylist.jpeg',
        'description'=>'Hospital Playlist tells the story of five doctors who have been friends since they entered medical school in 1999.',
        'rating'=>'4.6']);

        //Kids
        DB::table('movie')->insert(['genre_id'=>2, 
        'title'=>'Finding Nemo', 
        'photo'=>'assets/findingnemo.jpg',
        'description'=>'After his son is captured in the Great Barrier Reef and taken to Sydney, a timid clownfish sets out on a journey to bring him home.',
        'rating'=>'4.1']);

        DB::table('movie')->insert(['genre_id'=>2, 
        'title'=>'Monster Inc.', 
        'photo'=>'assets/monsterinc.jpg',
        'description'=>'In order to power the city, monsters have to scare children so that they scream. However, the children are toxic to the monsters, and after a child gets through, 2 monsters realize things may not be what they think.',
        'rating'=>'4']);

        DB::table('movie')->insert(['genre_id'=>2, 
        'title'=>'Toy Story 4', 
        'photo'=>'assets/toystory.jpg',
        'description'=>'When a new toy called "Forky" joins Woody and the gang, a road trip alongside old and new friends reveals how big the world can be for a toy.',
        'rating'=>'3.9']);

        DB::table('movie')->insert(['genre_id'=>2, 
        'title'=>'Frozen 2', 
        'photo'=>'assets/frozen.jpg',
        'description'=>'Anna, Elsa, Kristoff, Olaf and Sven leave Arendelle to travel to an ancient, autumn-bound forest of an enchanted land. They set out to find the origin of Elsa\'s powers in order to save their kingdom.',
        'rating'=>'3.6']);

        //TV Show
        DB::table('movie')->insert(['genre_id'=>3, 
        'title'=>'Dark', 
        'photo'=>'assets/dark.jpg',
        'description'=>'A family saga with a supernatural twist, set in a German town, where the disappearance of two young children exposes the relationships among four families.',
        'rating'=>'4.5']);

        DB::table('movie')->insert(['genre_id'=>3, 
        'title'=>'Riverdale', 
        'photo'=>'assets/riverdale.jpg',
        'description'=>'While navigating the troubled waters of romance, school and family, Archie and his gang become entangled in dark Riverdale mysteries.',
        'rating'=>'3.2']);

        DB::table('movie')->insert(['genre_id'=>3, 
        'title'=>'Gossip Girl', 
        'photo'=>'assets/gossipgirl.jpg',
        'description'=>'Privileged teens living on the Upper East Side of New York can hide no secret from the ruthless blogger who is always watching.',
        'rating'=>'3.8']);

        DB::table('movie')->insert(['genre_id'=>3, 
        'title'=>'Game of Thrones', 
        'photo'=>'assets/gameofthrones.jpg',
        'description'=>'Nine noble families fight for control over the lands of Westeros, while an ancient enemy returns after being dormant for millennia.',
        'rating'=>'4.8']);
    }
}
