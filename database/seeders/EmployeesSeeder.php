<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('employees')->insert([
            [
                'fname' => 'Anna',
                'lname' => 'Nowak',
                'mobile' => 123123123,
                'email' => 'nowak@nowak.pl',
            ], [
                'fname' => 'Magdalena',
                'lname' => 'Kowalska',
                'mobile' => 234234234,
                'email' => 'kowalska@x.pl',
            ], [
                'fname' => 'Lena',
                'lname' => 'Zoch',
                'mobile' => 345345345,
                'email' => 'lena@zoch.pl',
            ], [
                'fname' => 'Joanna',
                'lname' => 'Zychowicz',
                'mobile' => 901902903,
                'email' => 'zychowicz@a.pl',
            ], [
                'fname' => 'Paulina',
                'lname' => 'Borek',
                'mobile' => 567567567,
                'email' => 'borek@borek.pl',
            ]
        ]);
    }
}
