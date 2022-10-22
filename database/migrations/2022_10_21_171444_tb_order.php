<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $table_name = 'order';

    public function up()
    {
        Schema::create('order', function(Blueprint $table) {

            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            $table->string('order_ref');
            $table->integer('status');
            $table->timestamps();

            // foreign key
<<<<<<< HEAD
            // $table->foreign('user_id')->references('id')->on('users');
=======
            $table->foreign('user_id')->references('id')->on('users');
>>>>>>> 4b08243122357dee1fa61f4db70d1e39f15f8246

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
