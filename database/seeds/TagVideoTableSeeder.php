<?php

use Illuminate\Database\Seeder;

class TagVideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\TagVideo::class, 200)->create();
    }
}
