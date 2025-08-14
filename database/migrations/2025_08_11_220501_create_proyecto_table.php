<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('proyecto', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->date('fechaini');
            $table->string('estado');
            $table->string('responsable');
            $table->float('monto');
            $table->unsignedBigInteger('created_by');
            $table->timestamps();

            //Creación foreign key
            $table->foreign('created_by')->references('id')->on('usuario')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyecto');
    }
};
