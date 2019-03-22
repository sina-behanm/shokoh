<?php

use Illuminate\Database\Seeder;
use App\Tags;
class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tag = new Tags([
            'name' => 'Tutorials'
        ]);

        $tag->save();


        $tag = new Tags([
            'name' => 'Industry News'
        ]);

        $tag->save();
    }
}
