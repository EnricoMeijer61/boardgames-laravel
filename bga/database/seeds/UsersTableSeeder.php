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
        DB::table('users')->insert([
            'id' => '100',
            'fname' => 'test',
            'lname' => 'test',
            'email' => 'test@test.nl',
            'password' => '$2y$10$i5f/IQoqmy2WKLDkhZGcAOKzy37S3qtHo1xapSdW/yYQOWNnv4QHq',
            'weight' => '100',
            'role_id' => '1'

        ]);
        DB::table('users')->insert([
            'id' => '101',
            'fname' => 'Enrico',
            'lname' => 'Meijer',
            'email' => 'enrico@gmail.com',
            'password' => '$2y$10$bACHfR1OASGW3/A8JZWbrOokaUqfrEsF6JcX4amLr3LUt3lbzt2cC',
            'weight' => '200',
            'role_id' => '3'
        ]);
    }
}
