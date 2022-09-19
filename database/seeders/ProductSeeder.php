<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
          [  'name'=>'LG mobile',
            "price"=>"200",
            "description"=>"A smart phone with 4 gb ram ",
            "category"=>"mobile",
            "gallery"=>"https://images.priceoye.pk/oppo-a9-2020-pakistan-priceoye-dwndm.jpg",
        ],
        [  'name'=>'Panasonic TV',
            'price'=>'400',
            'description'=>'A smart TV with much more feature ',
            'category'=>'TV',
            'gallery'=>'https://televisionoffers.co.uk/wp-content/uploads/2020/08/panasonic-50-inch-tx-50hx580b-smart-4k-led-tv-with-hdr.jpg',
             ],
             [  'name'=>'Oppo mobile',
             'price'=>'300',
             'description'=>'A smart phone with 8 gb ram with much more feature',
             'category'=>'mobile',
             'gallery'=>'https://images.priceoye.pk/oppo-a9-2020-pakistan-priceoye-dwndm.jpg',
             ],
             [  'name'=>'Soni TV',
             'price'=>'500',
             'description'=>'A smart tv  with much more feature ',
             'category'=>'tv',
             'gallery'=>'http://www.hitechreview.com/uploads/2011/01/kdl-24ex320-932x699.jpg',
             ],
        ]);
    }
}
/*
,



*/
