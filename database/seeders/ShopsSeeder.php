<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\Shops;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('shops')->insert(
[



'name'=>'baab',
'location'=>'no where',
'owner'=>'bassem',
'mobile'=>'87878787',
'status'=>'true'





]


       ) ;
    }
}
