<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('TESTIMONI', function (Blueprint $table) {
            $table->id('TESTIMONI_ID');

            // SETTING_ID
            $table->foreignId('TESTIMONI_SETTING')
            ->constrained('SETTING', 'SETTING_ID')
            ->onUpdate('cascade');

            $table->string('TESTIMONI_USERNAME', 100);
            $table->string('TESTIMONI_CONTENT', 255);
            $table->string('TESTIMONI_BATCH', 4);
            $table->string('TESTIMONI_IMAGE', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TESTIMONI');
    }
};
