<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->integer('supplier_id');
            $table->integer('product_id');
            $table->integer('category_id');
            $table->string('purchase_no');
            $table->date('date');
            $table->string('description');
            $table->double('buying_qty')->default('0');
            $table->double('unit_price')->default('0');
            $table->double('buying_price')->default('0');
            $table->tinyInteger('status')->default('0')->comment('0=pending, 1=approved');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
};
