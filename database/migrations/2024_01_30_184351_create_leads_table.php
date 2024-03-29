<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('telefone')->nullable();
            $table->string('empresa')->nullable();
            $table->string('cargo')->nullable();
            $table->text('interesses')->nullable();
            $table->string('fonte')->nullable();
            $table->enum('status', ['novo', 'em_acompanhamento', 'convertido'])->default('novo');
            $table->timestamp('data_criacao')->useCurrent();
            $table->timestamp('ultima_atualizacao')->useCurrent()->nullable();
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
        Schema::dropIfExists('leads');
    }
}
