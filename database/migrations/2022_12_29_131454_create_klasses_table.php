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
        Schema::create('klasses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('rentree_id')->unique()->unsigned();
            $table->foreign('rentree_id')->references('id')->on('rentrees')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('klasses');
    }
};
