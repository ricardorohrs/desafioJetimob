<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('modelo');
            $table->year('ano');
            $table->enum('categoria', ['Novo', 'Seminovo', 'Usado']);
            $table->decimal('preco');
            $table->string('placa')->nullable()->default('Não informado');
            $table->text('descricao')->nullable()->default('Não informado');
            $table->string('image')->nullable()->default('Não informado');
            $table->string('cor')->nullable()->default('Não informado');
            $table->double('quilometragem')->nullable();
            $table->enum('cambio', ['Manual', 'Automático'])->nullable();
            $table->enum('combustivel', ['Gasolina', 'Etanol', 'Diesel', 'GNV', 'Flex'])->nullable();
            $table->enum('portas', ['2', '4'])->nullable();
            $table->decimal('motor')->nullable();
            $table->dateTime('venda')->nullable();
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
        Schema::dropIfExists('carros');
    }
}
