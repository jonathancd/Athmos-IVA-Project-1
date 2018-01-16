<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRimborsoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rimborsos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('token');
            $table->integer('type');
            $table->datetime('valid_date');
            
            $table->string('fatturato')->nullable();
            $table->string('provincia')->nullable();
            $table->string('iva')->nullable();
            $table->datetime('date')->nullable();
            $table->integer('modello')->nullable();

            $table->integer('stato')->nullable();
            $table->string('credit')->nullable();
            $table->string('art74')->nullable();

            $table->integer('giorni_rimborso')->nullable();
            $table->string('evaluation')->nullable();
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
        //
    }
}
