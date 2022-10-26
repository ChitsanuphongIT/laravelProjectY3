<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order')->insert(array(
            [
                'id' => 1,
                'order_ref' => 'PO202210240001',
                'status' => 0,
                'user_id' => 1,
                'user_fullname' => 'Yodchai Maharatanapong',
                'user_email' => 'yodchai@gmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'order_ref' => 'PO202210240002',
                'status' => 1,
                'user_id' => 1,
                'user_fullname' => 'Somchai Maharatanapong',
                'user_email' => 'somchai@gmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ));
    }
}
