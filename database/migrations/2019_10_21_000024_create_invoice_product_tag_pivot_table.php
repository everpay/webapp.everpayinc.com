<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceProductTagPivotTable extends Migration
{
    public function up()
    {
        Schema::create('invoice_product_tag', function (Blueprint $table) {
            $table->unsignedInteger('invoice_id');

            $table->foreign('invoice_id', 'invoice_id_fk_496315')->references('id')->on('invoices')->onDelete('cascade');

            $table->unsignedInteger('product_tag_id');

            $table->foreign('product_tag_id', 'product_tag_id_fk_496315')->references('id')->on('product_tags')->onDelete('cascade');
        });
    }
}
