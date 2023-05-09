<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\subadmin;

class SubAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        subadmin::create([
            'name' => 'SubAdmin',
            'email' => 'SubAdmin@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
