<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->nullable();

            $table->longText('description')->nullable();

            $table->decimal('price', 15, 2)->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
