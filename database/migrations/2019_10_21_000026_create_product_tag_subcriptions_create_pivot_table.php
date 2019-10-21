<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTagSubcriptionsCreatePivotTable extends Migration
{
    public function up()
    {
        Schema::create('product_tag_subcriptions_create', function (Blueprint $table) {
            $table->unsignedInteger('subcriptions_create_id');

            $table->foreign('subcriptions_create_id', 'subcriptions_create_id_fk_496251')->references('id')->on('subcriptions_creates')->onDelete('cascade');

            $table->unsignedInteger('product_tag_id');

            $table->foreign('product_tag_id', 'product_tag_id_fk_496251')->references('id')->on('product_tags')->onDelete('cascade');
        });
    }
}
