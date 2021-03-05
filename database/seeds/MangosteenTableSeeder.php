<?php

use App\Mangosteen;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MangosteenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {


        DB::table('mangosteen')->insert([
            [
            'name' => 'มังคุดมันรวม',
            'amount' => 0,
            
            ],
            [
            'name' => 'มังคุดมันลาย',
            'amount' => 0,
            ],
            [
            'name' => 'มังคุดกาก',
            'amount' => 0,
        
            ],
            [
            'name' => 'มังคุดจิ๋ว',
            'amount' => 0,
            
            ],
            [
            'name' => 'มังคุดตกไซร์',
            'amount' => 0,
                
            ],
            [
            'name' => 'มังคุดดำ',
            'amount' => 0,
                
            ],
            [
            'name' => 'มังคุดแตก',
            'amount' => 0,
                
             ]

        ]);

        
    }
}

