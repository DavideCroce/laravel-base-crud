<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics', array());
        foreach ($comics as $comic) {
            $new_comic = new Comic();

            $new_comic->fill($comic);

            $new_comic->save();
        }
    }
}
