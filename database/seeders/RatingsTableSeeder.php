<?php

namespace Database\Seeders;
use App\Models\rating;
use Illuminate\Database\Seeder;

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ratingRecord =[
            ['id'=>1 ,'cus_id'=>1 ,'driver_id'=>1,'order-id'=>1 ,'review'=>'vrey good' ,'rating'=>4 ,'status'=>0]
        ];

        rating::insert($ratingRecord);
    }
}
