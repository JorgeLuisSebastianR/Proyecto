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
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',20);
            $table->string('tipo',20);
            $table->string('modelo',20);
            $table->text('decripcion',20);
            $table->string('mateterialFabricacion',30);
            $table->unsignedDecimal('precio',8,2)-> default(0.00);
            $table->integer('stock');
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
        Schema::dropIfExists('articulos');
    }
};
