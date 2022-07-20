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
            [
                'name'=>'Sony TV',
                'price'=>'12000',
                'catagory'=>'Electronics',
                'description'=>'A 32 inch HD Flat screen television',
                'gallery'=>'https://cdn.pixabay.com/photo/2012/04/13/15/03/monitor-32743_1280.png'
            ],
            [
                'name'=>'Sony TV',
                'price'=>'12000',
                'catagory'=>'Electronics',
                'description'=>'A 32 inch HD Flat screen television',
                'gallery'=>'https://cdn.pixabay.com/photo/2012/04/13/15/03/monitor-32743_1280.png'
            ],
            [
                'name'=>'Sony TV',
                'price'=>'12000',
                'catagory'=>'Electronics',
                'description'=>'A 32 inch HD Flat screen television',
                'gallery'=>'https://cdn.pixabay.com/photo/2012/04/13/15/03/monitor-32743_1280.png'
            ],
            [
                'name'=>'Sony TV',
                'price'=>'12000',
                'catagory'=>'Electronics',
                'description'=>'A 32 inch HD Flat screen television',
                'gallery'=>'https://cdn.pixabay.com/photo/2012/04/13/15/03/monitor-32743_1280.png'
            ],
            [
                'name'=>'Sony TV',
                'price'=>'12000',
                'catagory'=>'Electronics',
                'description'=>'A 32 inch HD Flat screen television',
                'gallery'=>'https://cdn.pixabay.com/photo/2012/04/13/15/03/monitor-32743_1280.png'
            ],
            [
                'name'=>'Sony TV',
                'price'=>'12000',
                'catagory'=>'Electronics',
                'description'=>'A 32 inch HD Flat screen television',
                'gallery'=>'https://cdn.pixabay.com/photo/2012/04/13/15/03/monitor-32743_1280.png'
            ],
            [
                'name'=>'Sony TV',
                'price'=>'12000',
                'catagory'=>'Electronics',
                'description'=>'A 32 inch HD Flat screen television',
                'gallery'=>'https://cdn.pixabay.com/photo/2012/04/13/15/03/monitor-32743_1280.png'
            ],
            [
                'name'=>'Sony TV',
                'price'=>'12000',
                'catagory'=>'Electronics',
                'description'=>'A 32 inch HD Flat screen television',
                'gallery'=>'https://cdn.pixabay.com/photo/2012/04/13/15/03/monitor-32743_1280.png'
            ],
            [
                'name'=>'Sony TV',
                'price'=>'12000',
                'catagory'=>'Electronics',
                'description'=>'A 32 inch HD Flat screen television',
                'gallery'=>'https://cdn.pixabay.com/photo/2012/04/13/15/03/monitor-32743_1280.png'
            ],
            
            
            
       ]);
    }
}
