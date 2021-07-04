<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                'title'         => 'kookgerei',
                'status'        => 'active'
            ]
        );

        DB::table('categories')->insert(
            [
                'title'         => 'tent',
                'status'        => 'active'
            ]
        );

        DB::table('categories')->insert(
            [
                'title'         => 'speelgoed',
                'status'        => 'active'
            ]
        );
    }
}
