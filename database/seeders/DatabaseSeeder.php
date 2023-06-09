<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

       /*   \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'passwrod' => 'test@example.com',
         ]); */

         $user = new User();

         $user->name = 'admin';
         $user->email = 'admin@admin';
         $user->role = 'admin';
         $user->password = bcrypt('admin');
 
         $user->save();
    }
}
