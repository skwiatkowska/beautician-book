<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('admins')->insert([
            [
                'email' => 'admin@recepcja.pl',
                'password' => bcrypt('admin'),
            ]
        ]);
        DB::table('customers')->insert([
            [

                'fname' => 'Krystyna',
                'lname' => 'Kowalska',
                'email' => 'krysia@mail.com',
                'pesel' => '123',
                'mobile' => '123123123',
                'password' => bcrypt('krysia'),
            ], [
                'fname' => 'Hanna',
                'lname' => 'Nowak',
                'email' => 'hanka@nowak.com',
                'pesel' => '321',
                'mobile' => '123456789',
                'password' => bcrypt('hanka'),
            ], [
                'fname' => 'Kornelia',
                'lname' => 'Miechowska',
                'email' => 'kornelka@x.com',
                'pesel' => '345',
                'mobile' => '123321123',
                'password' => bcrypt('kornelia'),
            ],
            [
                'fname' => 'Katarzyna',
                'lname' => 'Olichowska',
                'email' => 'kasia@kasia.pl',
                'pesel' => '345444',
                'mobile' => '143321123',
                'password' => bcrypt('kasia'),
            ]
        ]);
    }
}
