<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            "name"=>"LG Mobile",
            "price"=>"10000",
            "category"=>"mobile",
            "gallery"=>"https://5.imimg.com/data5/PX/WQ/MN/SELLER-38271709/mobile.png",
            "description"=>"New Smart Phone"
            ],
            [
            "name"=>"Nokia Mobile",
            "price"=>"12000",
            "category"=>"mobile",
            "gallery"=>"https://5.imimg.com/data5/PX/WQ/MN/SELLER-38271709/mobile.png",
            "description"=>"New Smart Phone"
            ],
            [
            "name"=>"Samsung Mobile",
            "price"=>"8000",
            "category"=>"mobile",
            "gallery"=>"https://5.imimg.com/data5/PX/WQ/MN/SELLER-38271709/mobile.png",
            "description"=>"New Smart Phone"
            ],
            [
            "name"=>"Lenevo Mobile",
            "price"=>"5000",
            "category"=>"mobile",
            "gallery"=>"https://5.imimg.com/data5/PX/WQ/MN/SELLER-38271709/mobile.png",
            "description"=>"New Smart Phone"
            ],
            [
            "name"=>"Vivo Mobile",
            "price"=>"20000",
            "category"=>"mobile",
            "gallery"=>"https://5.imimg.com/data5/PX/WQ/MN/SELLER-38271709/mobile.png",
            "description"=>"New Smart Phone"
        ]
        ]);
    }
}
