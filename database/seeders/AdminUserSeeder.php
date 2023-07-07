<?php

namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

use Spatie\Permission\Models\Permission;





class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    public function run()
    {
        
        $user = user::create([
            'name' => 'distribuidor',
            'email' => 'distribuidor@admin.com',
            'password' => bcrypt('password'),
            
        ]);
       
        $user->assignRole($role);
    }
}
