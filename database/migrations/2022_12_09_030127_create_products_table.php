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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('order_id');
            $table->date('tanggal_masuk');
            $table->date('tanggal_selesai');
            $table->string('status_pembayaran')->nullable();
            $table->decimal('berat', 8, 2);
            $table->integer('total')->nullable();
            $table->string('telp')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->integer('status_id')->default('1');
            $table->unsignedBigInteger('owner_id');
            
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('owner_id')->references('id')->on('owners');
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
};
