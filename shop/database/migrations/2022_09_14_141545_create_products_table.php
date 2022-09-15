<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Products', function (Blueprint $table) {
            $table->increments("productID");
            $table->string("ProductName");
            $table->string("description");
            $table->boolean("status")->default(false);
            $table->integer("price");
            $table->integer("quantity");
            $table->foreign("participantID")->references("participantID")->on("Participants");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
