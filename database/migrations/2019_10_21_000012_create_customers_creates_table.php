<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersCreatesTable extends Migration
{
    public function up()
    {
        Schema::create('customers_creates', function (Blueprint $table) {
            $table->increments('id');

            $table->string('uuid')->nullable();

            $table->string('name');

            $table->string('email')->unique();

            $table->string('payment_token')->nullable();

            $table->string('payment_response_code')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
