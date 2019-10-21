<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreatePaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('create_payments', function (Blueprint $table) {
            $table->increments('id');

            $table->decimal('amount', 15, 2)->nullable();

            $table->string('uuid')->nullable();

            $table->string('customer_name')->nullable();

            $table->string('payment_type')->nullable();

            $table->string('customer_email')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
