<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisitsSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('visits')->insert([
            [
                'empl_id' => 1,
                'cust_id' => 4,
                'day' => 20201227,
                'time' => '11:00',
                'treat_id' => 1

            ], [

                'empl_id' => 3,
                'cust_id' => 4,
                'day' => 20201221,
                'time' => '11:00',
                'treat_id' => 2


            ], [
                'empl_id' => 4,
                'cust_id' => 3,
                'day' => 20201227,
                'time' => '17:00',
                'treat_id' => 3
            ], [
                'empl_id' => 1,
                'cust_id' => 2,
                'day' => 20200112,
                'time' => '13:00',
                'treat_id' => 4

            ], [
                'empl_id' => 1,
                'cust_id' => 2,
                'day' => 20200119,
                'time' => '10:00',
                'treat_id' => 1
            ], [
                'empl_id' => 1,
                'cust_id' => 4,
                'day' => 20200119,
                'time' => '12:00',
                'treat_id' => 2
            ], [
                'empl_id' => 1,
                'cust_id' => 4,
                'day' => 20200119,
                'time' => '12:00',
                'treat_id' => 1

            ], [
                'empl_id' => 2,
                'cust_id' => 3,
                'day' => 20200119,
                'time' => '8:00',
                'treat_id' => 1
            ], [
                'empl_id' => 2,
                'cust_id' => 1,
                'day' => 20200119,
                'time' => '10:00',
                'treat_id' => 1
            ], [
                'empl_id' => 3,
                'cust_id' => 1,
                'day' => 20200120,
                'time' => '10:00',
                'treat_id' => 1
            ], [
                'empl_id' => 3,
                'cust_id' => 3,
                'day' => 20200120,
                'time' => '9:00',
                'treat_id' => 3

            ], [
                'empl_id' => 5,
                'cust_id' => 4,
                'day' => 20200121,
                'time' => '9:00',
                'treat_id' => 3
            ], [
                'empl_id' => 4,
                'cust_id' => 2,
                'day' => 20200121,
                'time' => '12:00',
                'treat_id' => 3
            ], [
                'empl_id' => 4,
                'cust_id' => 2,
                'day' => 20200121,
                'time' => '13:00',
                'treat_id' => 3
            ], [
                'empl_id' => 3,
                'cust_id' => 2,
                'day' => 20200121,
                'time' => '10:00',
                'treat_id' => 4
            ], [
                'empl_id' => 3,
                'cust_id' => 4,
                'day' => 20200121,
                'time' => '10:00',
                'treat_id' => 4
            ], [
                'empl_id' => 3,
                'cust_id' => 2,
                'day' => 20200121,
                'time' => '13:00',
                'treat_id' => 4
            ], [
                'empl_id' => 3,
                'cust_id' => 1,
                'day' => 20200119,
                'time' => '16:00',
                'treat_id' => 4

            ], [
                'empl_id' => 3,
                'cust_id' => 3,
                'day' => 20200119,
                'time' => '15:00',
                'treat_id' => 4
            ], [
                'empl_id' => 3,
                'cust_id' => 1,
                'day' => 20200119,
                'time' => '15:00',
                'treat_id' => 2
            ], [
                'empl_id' => 3,
                'cust_id' => 4,
                'day' => 20200119,
                'time' => '14:00',
                'treat_id' => 2
            ]
        ]);
    }
}
