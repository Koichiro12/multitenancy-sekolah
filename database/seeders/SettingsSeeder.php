<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tenant_settings')->insert([
            'settings_name' => 'nama_sekolah',
            'value' => '-',
            'default' => 'MTS NU PAKIS',
            'status_settings' => '1',
        ]);
        DB::table('tenant_settings')->insert([
            'settings_name' => 'slug',
            'value' => '-',
            'default' => 'Islami Cerdas Berprestasi',
            'status_settings' => '1',
        ]);
        DB::table('tenant_settings')->insert([
            'settings_name' => 'tentang_sekolah',
            'value' => '-',
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'status_settings' => '1',
        ]);
        DB::table('tenant_settings')->insert([
            'settings_name' => 'alamat_sekolah',
            'value' => '-',
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'status_settings' => '1',
        ]);
        DB::table('tenant_settings')->insert([
            'settings_name' => 'no_hp',
            'value' => '-',
            'default' => '089765656543456',
            'status_settings' => '1',
        ]);
        DB::table('tenant_settings')->insert([
            'settings_name' => 'email',
            'value' => '-',
            'default' => 'admin@admin.com',
            'status_settings' => '1',
        ]);
        DB::table('tenant_settings')->insert([
            'settings_name' => 'logo_sekolah',
            'value' => '-',
            'default' => '-',
            'status_settings' => '1',
        ]);
    }
}
