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
        Schema::create('LOGS', function (Blueprint $table) {
            $table->id('LOGS_ID');

            // USER_ID
            $table->foreignId('LOGS_USER')
            ->nullable(false)
            ->constrained('users', 'id')
            ->onUpdate('cascade');

            $table->string('LOGS_ACTIVITY', 255)->nullable(false);
            $table->timestamp('LOGS_CREATED_AT');
            $table->timestamp('LOGS_UPDATED_AT')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LOGS');
    }
};
