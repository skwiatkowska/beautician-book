<?php
namespace Database\Seeders;

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
        
         $this->call(TreatmentsSeeder::class);
         $this->call(EmployeesSeeder::class);
         $this->call(DeadlinesSeeder::class);
         $this->call(UsersSeeder::class);
         $this->call(VisitsSeeder::class);
    }
}
