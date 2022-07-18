<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('product_pic');
            $table->double('price');
            $table->double('weight')->nullable();
            $table->integer('quantity')->default(1);
            $table->unsignedBigInteger('user_id');
            $table->foreign("user_id")
                ->references("id")
                ->on("users")
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign("category_id")
                ->references("id")
                ->on("categories")
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
