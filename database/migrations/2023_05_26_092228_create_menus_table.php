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
        Schema::create('MENU', function (Blueprint $table) {
            $table->id('MENU_ID');

            $table->smallInteger('MENU_ORDER', false)->nullable(false);
            $table->string('MENU_NAME', 20)->nullable(false);
            $table->string('MENU_URL', 255)->nullable(false);
            $table->string('MENU_ICON', 100)->nullable(false);

            $table->timestamp('MENU_CREATED_AT');
            $table->timestamp('MENU_UPDATED_AT')->nullable(true);
            $table->timestamp('MENU_DELETED_AT')->nullable(true);

            // MENU_CREATED_BY
            $table->foreignId('MENU_CREATED_BY')
            ->constrained('users', 'id')
            ->onUpdate('cascade');

            // MENU_UPDATED_BY
            $table->foreignId('MENU_UPDATED_BY')
            ->nullable(true)
            ->constrained('users', 'id')
            ->onUpdate('cascade');

            // MENU_DELETED_BY
            $table->foreignId('MENU_DELETED_BY')
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
        Schema::dropIfExists('MENU');
    }
};
