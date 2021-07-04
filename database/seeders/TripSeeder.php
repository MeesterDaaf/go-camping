<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('trips')->insert(
            [
                'title'        => "Kerstvakantie 2021",
                'status'       => "active",
                'start_date'   => "2021-07-13",
                'end_date'     => "2021-07-13"
            ]
        );

        DB::table('trips')->insert(
            [
                'title'        => "Zomervakantie 2021",
                'status'       => "active",
                'start_date'   => "2021-07-13",
                'end_date'     => "2021-07-13"
            ]
        );

        DB::table('trips')->insert(
            [
                'title'        => "Weekend weg 2021",
                'status'       => "active",
                'start_date'   => "2021-07-13",
                'end_date'     => "2021-07-13"
            ]
        );
    }
}
