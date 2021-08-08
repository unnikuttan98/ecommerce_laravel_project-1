<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
            'name'=>'oppo mobile',
            'price'=>'300',
            'description'=>'A smartphone with much more features',
            'catagory'=>' mobile',
            'gallery'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRD_hCTRVzIxaIYfX50_-DZVylFJy_b8ZV6Ww&usqp=CAU"
        ],
        [
            'name'=>'poco mobile',
            'price'=>'200',
            'description'=>'A smartphone with much more features',
            'catagory'=>' mobile',
            'gallery'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaFnwUIvNw8vtS_zbXCAIvLEagNPW3Ye9X2g&usqp=CAU"
        ],
        [
            'name'=>'Panasonic TV',
            'price'=>'200',
            'description'=>'A TV with much more features',
            'catagory'=>'TV',
            'gallery'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrYUEJUUdXDi80iZ3_e9Zm096rqA-z4behGw&usqp=CAU"
        ],
        [
            'name'=>'Fridge',
            'price'=>'200',
            'description'=>'A Fridge with much more features',
            'catagory'=>'Fridge',
            'gallery'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT77VYxMVdre6qiy4UdZVE2PxpzOmVyUxD6rw&usqp=CAU"
        ]
        ]);
    }
}
