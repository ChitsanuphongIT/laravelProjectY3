<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_detail')->insert(array(
            [
                "id" => 1,
                "order_id" => 6,
                "product_id" => 2,
                "qty" => 2,
                "price" => 5000,
                "total" => 10000,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "id" => 2,
                "order_id" => 6,
                "product_id" => 3,
                "qty" => 1,
                "price" => 6500,
                "total" => 6500,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ));
    }
}
