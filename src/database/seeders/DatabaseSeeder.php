<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        DB::table('employees')->insert([
            ['name' => 'John Doe', 'age' => 30, 'phone' => '123-456-7890', 'address' => '123 Main St'],
            ['name' => 'Jane Smith', 'age' => 25, 'phone' => '987-654-3210', 'address' => '456 Elm St'],
            ['name' => 'Alice Johnson', 'age' => 28, 'phone' => '555-123-4567', 'address' => '789 Oak St'],
        ]);
        
    }
}