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
            $table->integer('user_id');
            $table->string('order_id');
            $table->date('tanggal');
            $table->decimal('berat', 8, 2);
            $table->integer('total')->nullable();
            $table->string('telp')->nullable();
            $table->json('jenis_id');
            $table->integer('category_id');

            $table->integer('pembayaran_id')->default('1');
            $table->integer('status_id')->default('1');
            $table->integer('owner_id');
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
