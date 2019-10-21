<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategorySubcriptionsCreatePivotTable extends Migration
{
    public function up()
    {
        Schema::create('product_category_subcriptions_create', function (Blueprint $table) {
            $table->unsignedInteger('subcriptions_create_id');

            $table->foreign('subcriptions_create_id', 'subcriptions_create_id_fk_496250')->references('id')->on('subcriptions_creates')->onDelete('cascade');

            $table->unsignedInteger('product_category_id');

            $table->foreign('product_category_id', 'product_category_id_fk_496250')->references('id')->on('product_categories')->onDelete('cascade');
        });
    }
}
