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
        Schema::create('showrooms', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->bigInteger('user_id');
            $table->string('name', 255);
            $table->string('owner', 255);
            $table->string('brand', 255);
            $table->date('purchase_order');
            $table->text('description');
            $table->string('image', 255);
            $table->enum('status',['Lunas','Belum-Lunas']);
            $table->timestamps('');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('showrooms');
    }
};
