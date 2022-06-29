<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'email' => 'Support@youthped.com',
            'phone' => '08122324343',
            'owner_name' => 'Administrator',
            'company_name' => 'Youthped Indonesia',
            'short_description' => 'Youthped indonesia',
            'keyword' => '-',
            'about' => 'Youthped indonesia',
            'address' => '-',
            'postal_code' => 16514,
            'city' => 'Depok',
            'province' => 'Jawa Barat'
        ]);
    }
}