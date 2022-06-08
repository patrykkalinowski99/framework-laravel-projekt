<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use App\Models\RoleToUser;
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
        $role = new Role();
        $role->name = 'admin';
        $role->save();
        $role = new Role();
        $role->name = 'moderator';
        $role->save();
        $role = new Role();
        $role->name = 'user';
        $role->save();

           //  admin account
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin';
        $user->password = Hash::make('admin');
        $user->save();
        
         $role = new RoleToUser();
         $role->user_id = $user->id;
         $role->role_id = '1';
         $role->save();
    }
}
