<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('description');
            $table->string('from');
            $table->string('to');
            $table->double('deliver_price');
            $table->unsignedBigInteger('user_id');
            $table->foreign("user_id")
                ->references("id")
                ->on("users")
                ->onDelete('cascade');
            $table->unsignedBigInteger('product_id');
            $table->foreign("product_id")
                ->references("id")
                ->on("products")
                ->onDelete('cascade');
            $table->unsignedBigInteger('client_id');
            $table->foreign("client_id")
                ->references("id")
                ->on("clients")
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
