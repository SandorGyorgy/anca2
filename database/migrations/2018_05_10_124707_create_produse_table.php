<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produse', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nume');
            $table->string('descriere');
            $table->float('pret');
            $table->binary('poza')->nullable();
            $table->integer('categorie_id');
            $table->integer('brand_id');
            
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
        Schema::dropIfExists('produse');
    }
}
