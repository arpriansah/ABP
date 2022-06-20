<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            [
            'name' => 'Arpriansah Yonathan',
            'username' => 'arpri',
            'email' => 'arpriansah@gmail.com', 
            'password' => bcrypt('arpri'),
            'phone' => '082345678678',
            ],
            [
                'name' => 'Ariqoh Novitasari',
                'username' => 'ariqoh',
                'email' => 'ariqoh@gmail.com', 
                'password' => bcrypt('ariqoh'),
                'phone' => '082345678678',
            ],
            [
                'name' => 'Michelle C. F. Bara',
                'username' => 'michelle',
                'email' => 'michelle@gmail.com', 
                'password' => bcrypt('michelle'),
                'phone' => '082345678678',
            ],
            [
                'name' => 'Balqis Sayyidahtul Atikah',
                'username' => 'balqis',
                'email' => 'balqis@gmail.com', 
                'password' => bcrypt('balqis'),
                'phone' => '082345678678',
            ],
        ]);
    }
}
