<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersCreateRolePivotTable extends Migration
{
    public function up()
    {
        Schema::create('customers_create_role', function (Blueprint $table) {
            $table->unsignedInteger('customers_create_id');

            $table->foreign('customers_create_id', 'customers_create_id_fk_496304')->references('id')->on('customers_creates')->onDelete('cascade');

            $table->unsignedInteger('role_id');

            $table->foreign('role_id', 'role_id_fk_496304')->references('id')->on('roles')->onDelete('cascade');
        });
    }
}
