<?php

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genre')->insert(['name'=>'Drama']);
        DB::table('genre')->insert(['name'=>'Kids']);
        DB::table('genre')->insert(['name'=>'TV Show']);
    }
}
