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
        Schema::create('acces', function (Blueprint $table) {

            $table->id();
            $table->foreignId('groupe_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete('set null');
            $table->foreignId('module_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete('set null');
            $table->integer('etat')->default(0);
            $table->integer('deletable')->default(0);

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
        Schema::dropIfExists('acces');
    }
};
