<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'manage users']);
        Permission::create(['name' => 'manage authors, books, authors, categories, genres, publishers, tags']);
        Permission::create(['name' => 'manage reservations as librarian']);
        Permission::create(['name' => 'manage reservations as customer']);
        Permission::create(['name' => 'manage reviews as admin']);
        Permission::create(['name' => 'manage reviews as customer']);

        Role::create(['name' => 'admin'])->givePermissionTo(['manage users', 'manage reviews as admin']);
        Role::create(['name' => 'librarian'])->givePermissionTo([
            'manage authors, books, authors, categories, genres, publishers, tags',
            'manage reservations as librarian']);
        Role::create(['name' => 'customer'])->givePermissionTo([
            'manage reservations as customer',
            'manage reviews as customer']);
    }
}
