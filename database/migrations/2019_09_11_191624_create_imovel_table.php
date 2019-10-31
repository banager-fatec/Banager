<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImovelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imovel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo do imóvel', 50)-> nullable();
            $table->string('M²', 10)-> nullable();
            $table->string('valor do aluguel')->nullable();
            $table->boolean('venda');
            $table->string('bairro', 50);
            $table->string('numero', 4);
            $table->string('CEP', 10);
            $table->string('qualidade', 2);
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
        Schema::dropIfExists('imovel');
    }
}
