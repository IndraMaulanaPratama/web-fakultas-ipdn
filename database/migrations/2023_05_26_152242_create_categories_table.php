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
        Schema::create('CATEGORY', function (Blueprint $table) {
            $table->id('CATEGORY_ID');
            $table->string('CATEGORY_NAME', 150);

            $table->timestamp('CATEGORY_CREATED_AT');
            $table->timestamp('CATEGORY_UPDATED_AT')->nullable(true);
            $table->timestamp('CATEGORY_DELETED_AT')->nullable(true);

            // CATEGORY_CREATED_BY
            $table->foreignId('CATEGORY_CREATED_BY')
            ->constrained('users', 'id')
            ->onUpdate('cascade');

            // CATEGORY_UPDATED_BY
            $table->foreignId('CATEGORY_UPDATED_BY')
            ->nullable(true)
            ->constrained('users', 'id')
            ->onUpdate('cascade');

            // CATEGORY_DELETED_BY
            $table->foreignId('CATEGORY_DLETED_BY')
            ->nullable(true)
            ->constrained('users', 'id')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('CATEGORY');
    }
};
