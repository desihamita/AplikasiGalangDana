<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bank;

class BankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bank = array (
            0 =>
            array (
                'name' => 'BANK BRI',
                'code' => '001',
                'path_image' => '/img/bank/bri.jpeg'
            ),
            1 => 
            array (
                'name' => 'BANK BNI',
                'code' => '002',
                'path_image' => '/img/bank/bni.jpeg'
            ),
            2 => 
            array (
                'name' => 'BANK BCA',
                'code' => '003',
                'path_image' => '/img/bank/bca.jpeg'
            ),
        );
        
        collect($bank)->map(function ($item) {
            Bank::query()
            ->updateOrCreate(
              [
                'code' => $item['code'],
              ],
              [
                'name' => $item['name'],
                'code' => $item['code'],
                'path_image' => $item['path_image']
              ]  
            );
        });   
    }
}