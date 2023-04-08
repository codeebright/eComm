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
         //
         DB::table('products')->insert([
            [
                'name'=>'Oppo mobile',
                "price"=>"300",
                "discription"=>"A smartphone with 8gb ram and much more feature",
                "catagory"=>"mobile",
                "gallary"=>"https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
            ],
            [
                'name'=>'Panasonic Tv',
                "price"=>"400",
                "discription"=>"A smart tv with much more feature",
                "catagory"=>"tv",
                "gallary"=>"https://i.gadgets360cdn.com/products/televisions/large/1548154685_832_panasonic_32-inch-lcd-full-hd-tv-th-l32u20.jpg"
            ],
            [
                'name'=>'Soni Tv',
                "price"=>"500",
                "discription"=>"A tv with much more feature",
                "catagory"=>"tv",
                "gallary"=>"https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png"
            ],
            [
                'name'=>'LG fridge',
                "price"=>"200",
                "discription"=>"A fridge with much more feature",
                "catagory"=>"fridge",
                "gallary"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFx-2-wTOcfr5at01ojZWduXEm5cZ-sRYPJA&usqp=CAU"
             ]
        ]);
        // DB::table('products')->insert([
        //     [
        //         'name'=>'Lg mobile',
        //         'price'=>'1000$',
        //         'catagory'=>'mobile',
        //         'discription'=>'the mobile des',
        //         'gallary'=>'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-13-model-unselect-gallery-1-202207?wid=5120&hei=2880&fmt=p-jpg&qlt=80&.v=1654893619853'
        //     ], 
        //         ['name'=>'iphoen',
        //         'price'=>'1000$',
        //         'catagory'=>'mobile',
        //         'discription'=>'the mobile description',
        //         'gallary'=>'https://images.pexels.com/photos/788946/pexels-photo-788946.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        //         ],
        //             ['name'=>'iphone 11',
        //             'price'=>'1000$',
        //             'catagory'=>'mobile',
        //             'discription'=>'the mobile description',
        //             'gallary'=>'https://images.pexels.com/photos/1294886/pexels-photo-1294886.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        //             ]
        // ]);
    }
}
