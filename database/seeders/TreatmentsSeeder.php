<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TreatmentsSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('treatments')->insert([
            [
                'name' => 'Manicure hybrydowy',
                'price' => 80
            ], [
                'name' => 'Manicure japoński',
                'price' => 70
            ], [
                'name' => 'Laminacja rzęs',
                'price' => 150
            ], [
                'name' => 'Mezoterapia igłowa',
                'price' => 250
            ], [
                'name' => 'Mikrodermabrazja',
                'price' => 140
            ], [
                'name' => 'Peeling kawitacyjny',
                'price' => 80
            ], [
                'name' => 'Masaż klasyczny',
                'price' => 90
            ]
        ]);
    }
}
