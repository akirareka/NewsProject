<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(ArticlesTableSeeder::class);

        $user = new User;
        $user->name = "Admin";
        $user->email = "admin@mail.com";
        $user->password = Hash::make('adminadmin');
        $user->phone = "081284423527";
        $user->role = "Admin";
        $user->save();
        
        
    }
}
