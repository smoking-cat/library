<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create()->assignRole('admin');
        User::factory()->create()->assignRole('librarian');
        User::factory()->create()->assignRole('customer');
    }
}
