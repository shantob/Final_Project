<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districs = ['Dhaka','Barishal','Khulna','Chittagong'];
        foreach ($districs as $distric){
            District::create(['name'=>$distric]);
        }

    }
}
