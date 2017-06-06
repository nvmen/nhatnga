<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([

            'full_name' => 'Nhat Nga',
            'email' => 'admin@gmail.com',
            'phone' => '01683105920',
            'address' => '357/10 cmt8 f12,q10',
            'password' => bcrypt('123456A'),
            'is_active' => true,
            'user_type' => 'admin',
        ]);
        DB::table('users')->insert([

            'full_name' => 'Nhat Nga',
            'email' => 'men.nguyen.sg@gmail.com',
            'phone' => '01683105920',
            'address' => '357/10 cmt8 f12,q10',
            'password' => bcrypt('123456A'),
            'is_active' => true,
            'user_type' => 'mennguyen',
        ]);
    }
}
