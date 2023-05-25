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
        Schema::create('ROLE', function (Blueprint $table) {
            $table->id('ROLE_ID');
            $table->string('ROLE_NAME', 20)->nullable(false);
            $table->timestamp('ROLE_CREATED_AT');
            $table->timestamp('ROLE_UPDATED_AT')->nullable(true);
            $table->dateTime('ROLE_DELETED_AT')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ROLE');
    }
};
