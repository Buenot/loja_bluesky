<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Execute as migrações.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrinhodecompras', function (Blueprint $table) {
            
            $table->id();
            $table->timestamps();            
            $table->integer('product_id');
            $table->string('status');
            $table->bigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverta as migrações.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrinhodecompras');
    }
};
