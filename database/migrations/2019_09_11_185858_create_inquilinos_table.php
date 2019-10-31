<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInquilinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquilinos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 50);
            $table->string('CPF', 14) -> unique();
            $table->string('fone_res', 14) -> nullable();
            $table->string('fone_cel', 15);
            $table->string('endereco', 50);
            $table->string('bairro', 30);
            $table->string('CEP', 10);
            $table->string('cidade', 50);
            $table->char('UF', 2);
            $table->string('email', 50);
            $table->date('dt_nasc');
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
        Schema::dropIfExists('inquilinos');
    }
}
