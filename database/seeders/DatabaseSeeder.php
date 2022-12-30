<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('admin_users')->insert([
            [
                'username' => 'admin',
                'password' => bcrypt('123456'),
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
            ]
        ]);

        DB::table('shop_customers')->insert([
            [
                'name' => 'customer',
                'email' => 'customer@gmail.com',
                'password' => bcrypt('123456'),
            ]
        ]);
    }
}
