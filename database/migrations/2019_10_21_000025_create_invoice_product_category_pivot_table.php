<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceProductCategoryPivotTable extends Migration
{
    public function up()
    {
        Schema::create('invoice_product_category', function (Blueprint $table) {
            $table->unsignedInteger('invoice_id');

            $table->foreign('invoice_id', 'invoice_id_fk_496314')->references('id')->on('invoices')->onDelete('cascade');

            $table->unsignedInteger('product_category_id');

            $table->foreign('product_category_id', 'product_category_id_fk_496314')->references('id')->on('product_categories')->onDelete('cascade');
        });
    }
}
