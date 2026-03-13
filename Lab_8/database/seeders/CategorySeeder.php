<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    

public function run()
{
    DB::table('categories')->insert([
        ['name'=>'Điện thoại','description'=>'Danh mục điện thoại'],
        ['name'=>'Laptop','description'=>'Danh mục laptop'],
        ['name'=>'Tablet','description'=>'Danh mục tablet'],
        ['name'=>'Phụ kiện','description'=>'Danh mục phụ kiện'],
        ['name'=>'Đồng hồ','description'=>'Danh mục đồng hồ']
    ]);
}
}
