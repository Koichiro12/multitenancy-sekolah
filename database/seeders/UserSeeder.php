<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'level' => 0,
        ]);
        DB::table('user_profiles')->insert([
            'id_user' => '1',
            'bio' => 'Your Bio Here',
            'alamat' => '-',
            'no_hp' => '-',
            'foto_profile' => '-'
        ]);
        
    }
}
