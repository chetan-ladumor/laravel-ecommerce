<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$p1=[

        	'name'=>'Learn to build website using php and html',
        	'image'=>'uploads/1.JPG',
        	'price'=>4021,
        	'description'=>'Welcome to the world of web.'

        ];
        $p2=[

        	'name'=>'Learn to build website using java and servelets',
        	'image'=>'uploads/2.JPG',
        	'price'=>4021,
        	'description'=>'Welcome to the world of software'

        ];

        Product::create($p1);
        Product::create($p2);*/

        factory(App\Product::class,30)->create();


    }
}
