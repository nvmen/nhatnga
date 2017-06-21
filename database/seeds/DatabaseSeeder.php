<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Eloquent::unguard();
        $this->call('MediaTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('ServicesSeeder');
        $this->call('ServiceTranslationSeeder');
        $this->call('VisaCategoryTableSeeder');
        $this->call('VisaCategoryTranslationTableSeeder');
        $this->call('TourTypeTableSeeder');
        $this->call('TourTypeTranslateTableSeeder');
        $this->call('NewsCateTableSeeder');
        $this->call('NewsCateTranslateTableSeeder');
    }
}
