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
            'name'=>'Lg mobile',
            'price'=>'1000$',
            'catagory'=>'mobile',
            'discription'=>'the mobile des',
            'gallary'=>'https://www.pexels.com/photo/black-smartphone-on-black-table-top-63690/'
        ]);
    }
}
