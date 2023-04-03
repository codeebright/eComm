<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeedr extends Seeder
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
                'name'=>'Lg mobile',
                'price'=>'1000$',
                'catagory'=>'mobile',
                'discription'=>'the mobile des',
                'gallary'=>'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-13-model-unselect-gallery-1-202207?wid=5120&hei=2880&fmt=p-jpg&qlt=80&.v=1654893619853'
            ], 
                ['name'=>'iphoen',
                'price'=>'1000$',
                'catagory'=>'mobile',
                'discription'=>'the mobile description',
                'gallary'=>'https://images.pexels.com/photos/788946/pexels-photo-788946.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
                ],
                    ['name'=>'iphone 11',
                    'price'=>'1000$',
                    'catagory'=>'mobile',
                    'discription'=>'the mobile description',
                    'gallary'=>'https://images.pexels.com/photos/1294886/pexels-photo-1294886.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
                    ]
        ]);
    }
}
