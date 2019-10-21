<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponCreatesTable extends Migration
{
    public function up()
    {
        Schema::create('coupon_creates', function (Blueprint $table) {
            $table->increments('id');

            $table->string('coupon_name')->nullable();

            $table->string('uuid')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
