<?php

use Illuminate\Database\Seeder;

class TemplateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('template')->delete();

        DB::table('template')->insert([
            'id' => 1,
            'name' => 'tour-description',
            'data' => '',

        ]);
    }
}
