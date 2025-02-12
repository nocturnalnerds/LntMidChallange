<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class employeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            ['name' => 'John Doe', 'age' => 30, 'phone' => '123-456-7890', 'address' => '123 Main St'],
            ['name' => 'Jane Smith', 'age' => 25, 'phone' => '987-654-3210', 'address' => '456 Elm St'],
            ['name' => 'Alice Johnson', 'age' => 28, 'phone' => '555-123-4567', 'address' => '789 Oak St'],
        ]);
    }
}