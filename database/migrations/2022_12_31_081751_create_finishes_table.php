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
        Schema::create('finishes', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->date('tanggal')->nullable();
            $table->integer('berat')->nullable();
            $table->integer('jenis_id')->nullable();
            $table->integer('category_id')->nullable();

            $table->integer('pembayaran_id')->nullable();
            $table->integer('status_id')->default('3');
            $table->unsignedBigInteger('owner_id');
            $table->timestamps();

            $table->foreign('owner_id')->references('id')->on('owners');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('finishes');
    }
};
