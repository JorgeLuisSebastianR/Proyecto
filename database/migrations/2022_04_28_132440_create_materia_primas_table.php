<?php
//HOLA
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
        Schema::create('materia_primas', function (Blueprint $table) {
            $table->id();
            $table->string('tipo',50);
            $table->string('nombre',100);
            $table->string('marca',50);
            $table->string('modelo',50);
            $table->integer('cantidad');
            $table->string('dimensiones',50);
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
        Schema::dropIfExists('materia_primas');
    }
};
