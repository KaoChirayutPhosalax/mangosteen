<?php

// use App\Product;

namespace Database\ProductTableSeeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function pro()
    {
        $pro = new product();


        $pro->insert([
        'name' => 'มังคุดมันรวม', ]);

        // $pro->insert([
        // 'name' => 'มังคุดมันลาย', ]);

        // $pro->insert([
        // 'name' => 'มังคุดกาก', ]);

        // $pro->insert([
        // 'name' => 'มังคุดจิ๋ว', ]);

        // $pro->insert([
        // 'name' => 'มังคุดตกไซร์', ]);
    
        // $pro->insert([
        // 'name' => 'มังคุดดำ ', ]);
    
        // $pro->insert([
        // 'name' => 'มังคุดแตก', ]);


    }
}
