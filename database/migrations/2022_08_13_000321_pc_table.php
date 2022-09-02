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
        Schema::create('pc', function (Blueprint $table) {
            $table->id();
            $table->string('id_do_pc')->nullable()->unique();
            $table->string('marca')->nullable();
            $table->string('ram')->nullable();
            $table->string('memoria')->nullable();
            $table->string('processador')->nullable();
            $table->string('sistema_operacional')->nullable();
            $table->string('status')->nullable();
            $table->integer('preco')->nullable();
            $table->rememberToken();
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
        Schema::drop('pc');
    }
};