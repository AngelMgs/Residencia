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
        Schema::create('record_has_forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('record_id')->references('id')->on('records')->onDelete('cascade');
            $table->foreignId('form_id')->references('id')->on('forms')->onDelete('cascade');

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
        Schema::dropIfExists('record_has_forms');
    }
};
