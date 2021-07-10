<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert(
            [
                'title'         => 'wok',
                'category_id'   => 1,
                'status'        => 'active'
            ]
        );

        DB::table('items')->insert(
            [
                'title'         => 'borden',
                'category_id'   => 1,
                'status'        => 'active'
            ]
        );

        DB::table('items')->insert(
            [
                'title'         => 'haringen',
                'category_id'   => 2,
                'status'        => 'active'
            ]
        );

        DB::table('items')->insert(
            [
                'title'         => 'bal',
                'category_id'   => 3,
                'status'        => 'active'
            ]
        );
    }
}
