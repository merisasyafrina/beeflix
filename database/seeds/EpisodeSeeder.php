<?php

use Illuminate\Database\Seeder;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Drama
        DB::table('episode')->insert(['movie_id'=>1,
        'episode'=>'1',
        'title'=>'Descendants of The Sun Episode 1']);

        DB::table('episode')->insert(['movie_id'=>1,
        'episode'=>'2',
        'title'=>'Descendants of The Sun Episode 2']);

        DB::table('episode')->insert(['movie_id'=>1,
        'episode'=>'3',
        'title'=>'Descendants of The Sun Episode 3']);

        DB::table('episode')->insert(['movie_id'=>1,
        'episode'=>'4',
        'title'=>'Descendants of The Sun Episode 4']);

        DB::table('episode')->insert(['movie_id'=>1,
        'episode'=>'5',
        'title'=>'Descendants of The Sun Episode 5']);

        DB::table('episode')->insert(['movie_id'=>1,
        'episode'=>'6',
        'title'=>'Descendants of The Sun Episode 6']);

        DB::table('episode')->insert(['movie_id'=>2,
        'episode'=>'1',
        'title'=>'Itaewon Class Episode 1']);

        DB::table('episode')->insert(['movie_id'=>2,
        'episode'=>'2',
        'title'=>'Itaewon Class Episode 2']);

        DB::table('episode')->insert(['movie_id'=>2,
        'episode'=>'3',
        'title'=>'Itaewon Class Episode 3']);

        DB::table('episode')->insert(['movie_id'=>2,
        'episode'=>'4',
        'title'=>'Itaewon Class Episode 4']);

        DB::table('episode')->insert(['movie_id'=>2,
        'episode'=>'5',
        'title'=>'Itaewon Class Episode 5']);

        DB::table('episode')->insert(['movie_id'=>2,
        'episode'=>'6',
        'title'=>'Itaewon Class Episode 6']);

        DB::table('episode')->insert(['movie_id'=>3,
        'episode'=>'1',
        'title'=>'Reply 1988 Episode 1']);

        DB::table('episode')->insert(['movie_id'=>3,
        'episode'=>'2',
        'title'=>'Reply 1988 Episode 2']);

        DB::table('episode')->insert(['movie_id'=>3,
        'episode'=>'3',
        'title'=>'Reply 1988 Episode 3']);

        DB::table('episode')->insert(['movie_id'=>3,
        'episode'=>'4',
        'title'=>'Reply 1988 Episode 4']);

        DB::table('episode')->insert(['movie_id'=>3,
        'episode'=>'5',
        'title'=>'Reply 1988 Episode 5']);

        DB::table('episode')->insert(['movie_id'=>3,
        'episode'=>'6',
        'title'=>'Reply 1988 Episode 6']);

        DB::table('episode')->insert(['movie_id'=>4,
        'episode'=>'1',
        'title'=>'Hospital Playlist Episode 1']);

        DB::table('episode')->insert(['movie_id'=>4,
        'episode'=>'2',
        'title'=>'Hospital Playlist Episode 2']);
        
        DB::table('episode')->insert(['movie_id'=>4,
        'episode'=>'3',
        'title'=>'Hospital Playlist Episode 3']);

        DB::table('episode')->insert(['movie_id'=>4,
        'episode'=>'4',
        'title'=>'Hospital Playlist Episode 4']);

        DB::table('episode')->insert(['movie_id'=>4,
        'episode'=>'5',
        'title'=>'Hospital Playlist Episode 5']);

        DB::table('episode')->insert(['movie_id'=>4,
        'episode'=>'6',
        'title'=>'Hospital Playlist Episode 6']);

        //Kids
        DB::table('episode')->insert(['movie_id'=>5,
        'episode'=>'1',
        'title'=>'Finding Nemo']);

        DB::table('episode')->insert(['movie_id'=>6,
        'episode'=>'1',
        'title'=>'Monster Inc.']);

        DB::table('episode')->insert(['movie_id'=>7,
        'episode'=>'1',
        'title'=>'Toy Story 4']);

        DB::table('episode')->insert(['movie_id'=>8,
        'episode'=>'1',
        'title'=>'Frozen 2']);

        //TV Show
        DB::table('episode')->insert(['movie_id'=>9,
        'episode'=>'1',
        'title'=>'Dark Episode 1']);

        DB::table('episode')->insert(['movie_id'=>9,
        'episode'=>'2',
        'title'=>'Dark Episode 2']);

        DB::table('episode')->insert(['movie_id'=>9,
        'episode'=>'3',
        'title'=>'Dark Episode 3']);

        DB::table('episode')->insert(['movie_id'=>9,
        'episode'=>'4',
        'title'=>'Dark Episode 4']);

        DB::table('episode')->insert(['movie_id'=>9,
        'episode'=>'5',
        'title'=>'Dark Episode 5']);

        DB::table('episode')->insert(['movie_id'=>9,
        'episode'=>'6',
        'title'=>'Dark Episode 6']);

        DB::table('episode')->insert(['movie_id'=>10,
        'episode'=>'1',
        'title'=>'Riverdale Episode 1']);

        DB::table('episode')->insert(['movie_id'=>10,
        'episode'=>'2',
        'title'=>'Riverdale Episode 2']);

        DB::table('episode')->insert(['movie_id'=>10,
        'episode'=>'3',
        'title'=>'Riverdale Episode 3']);

        DB::table('episode')->insert(['movie_id'=>10,
        'episode'=>'4',
        'title'=>'Riverdale Episode 4']);

        DB::table('episode')->insert(['movie_id'=>10,
        'episode'=>'5',
        'title'=>'Riverdale Episode 5']);

        DB::table('episode')->insert(['movie_id'=>10,
        'episode'=>'6',
        'title'=>'Riverdale Episode 6']);

        DB::table('episode')->insert(['movie_id'=>11,
        'episode'=>'1',
        'title'=>'Gossip Girl Episode 1']);

        DB::table('episode')->insert(['movie_id'=>11,
        'episode'=>'2',
        'title'=>'Gossip Girl Episode 2']);

        DB::table('episode')->insert(['movie_id'=>11,
        'episode'=>'3',
        'title'=>'Gossip Girl Episode 3']);

        DB::table('episode')->insert(['movie_id'=>11,
        'episode'=>'4',
        'title'=>'Gossip Girl Episode 4']);

        DB::table('episode')->insert(['movie_id'=>11,
        'episode'=>'5',
        'title'=>'Gossip Girl Episode 5']);

        DB::table('episode')->insert(['movie_id'=>11,
        'episode'=>'6',
        'title'=>'Gossip Girl Episode 6']);

        DB::table('episode')->insert(['movie_id'=>12,
        'episode'=>'1',
        'title'=>'Game of Thrones Episode 1']);

        DB::table('episode')->insert(['movie_id'=>12,
        'episode'=>'2',
        'title'=>'Game of Thrones Episode 2']);

        DB::table('episode')->insert(['movie_id'=>12,
        'episode'=>'3',
        'title'=>'Game of Thrones Episode 3']);

        DB::table('episode')->insert(['movie_id'=>12,
        'episode'=>'4',
        'title'=>'Game of Thrones Episode 4']);

        DB::table('episode')->insert(['movie_id'=>12,
        'episode'=>'5',
        'title'=>'Game of Thrones Episode 5']);

        DB::table('episode')->insert(['movie_id'=>12,
        'episode'=>'6',
        'title'=>'Game of Thrones Episode 6']);
    }
}
