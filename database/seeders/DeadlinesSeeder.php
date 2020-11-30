<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeadlinesSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('deadlines')->insert([
            [
                'empl_id' => 1,
                'time_from' => '8:00',
                'time_to' => '13:00',
                'day' => 20201227,
            ], [
                'empl_id' => 1,
                'time_from' => '15:00',
                'time_to' => '19:00',
                'day' => 20201228,
            ], [
                'empl_id' => 2,
                'time_from' => '8:00',
                'time_to' => '13:00',
                'day' => 20201229,
            ], [
                'empl_id' => 2,
                'time_from' => '14:00',
                'time_to' => '20:00',
                'day' => 20201230,
            ], [
                'empl_id' => 3,
                'time_from' => '10:00',
                'time_to' => '18:00',
                'day' => 20201222,
            ], [
                'empl_id' => 3,
                'time_from' => '9:00',
                'time_to' => '14:00',
                'day' => 20201221,

            ], [
                'empl_id' => 4,
                'time_from' => '15:00',
                'time_to' => '19:00',
                'day' => 20201227,
            ], [
                'empl_id' => 4,
                'time_from' => '10:00',
                'time_to' => '16:00',
                'day' => 20201128,
            ], [
                'empl_id' => 5,
                'time_from' => '8:00',
                'time_to' => '11:00',
                'day' => 20201122,
            ], [
                'empl_id' => 5,
                'time_from' => '8:00',
                'time_to' => '16:00',
                'day' => 20201227,
            ], [
                'empl_id' => 1,
                'time_from' => '15:00',
                'time_to' => '19:00',
                'day' => 20201128,
            ], [
                'empl_id' => 2,
                'time_from' => '8:00',
                'time_to' => '13:00',
                'day' => 20201229,
            ], [
                'empl_id' => 2,
                'time_from' => '14:00',
                'time_to' => '20:00',
                'day' => 20201230,
            ], [
                'empl_id' => 3,
                'time_from' => '10:00',
                'time_to' => '18:00',
                'day' => 20201222,
            ], [
                'empl_id' => 3,
                'time_from' => '9:00',
                'time_to' => '14:00',
                'day' => 20201221,
            ], [
                'empl_id' => 4,
                'time_from' => '15:00',
                'time_to' => '19:00',
                'day' => 20201227,
            ], [
                'empl_id' => 4,
                'time_from' => '10:00',
                'time_to' => '16:00',
                'day' => 20210328,
            ], [
                'empl_id' => 5,
                'time_from' => '8:00',
                'time_to' => '11:00',
                'day' => 20210322,
            ], [
                'empl_id' => 5,
                'time_from' => '8:00',
                'time_to' => '12:00',
                'day' => 202101102,
            ], [

                'empl_id' => 5,
                'time_from' => '8:00',
                'time_to' => '16:00',
                'day' => 20210327,
            ],
            [
                'empl_id' => 1,
                'time_from' => '8:00',
                'time_to' => '14:00',
                'day' => 202101119,

            ], [
                'empl_id' => 2,
                'time_from' => '8:00',
                'time_to' => '16:00',
                'day' => 202101119,

            ], [
                'empl_id' => 3,
                'time_from' => '8:00',
                'time_to' => '17:00',
                'day' => 202101119,
            ], [
                'empl_id' => 5,
                'time_from' => '10:00',
                'time_to' => '15:00',
                'day' => 202101120,
            ], [
                'empl_id' => 5,
                'time_from' => '8:00',
                'time_to' => '14:00',
                'day' => 202101121,
            ], [
                'empl_id' => 4,
                'time_from' => '8:00',
                'time_to' => '15:00',
                'day' => 202101121,
            ], [
                'empl_id' => 3,
                'time_from' => '8:00',
                'time_to' => '14:00',
                'day' => 202101121,

            ],

        ]);
    }
}
