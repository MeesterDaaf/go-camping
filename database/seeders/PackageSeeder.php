<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert(
            [
                'trip_id'       => 1,
                'item_id'       => 1,
                'isPacked'      => 0
            ]
        );

        DB::table('packages')->insert(
            [
                'trip_id'       => 1,
                'item_id'       => 2,
                'isPacked'      => 0
            ]
        );

        DB::table('packages')->insert(
            [
                'trip_id'       => 1,
                'item_id'       => 3,
                'isPacked'      => 0
            ]
        );
    }
}
