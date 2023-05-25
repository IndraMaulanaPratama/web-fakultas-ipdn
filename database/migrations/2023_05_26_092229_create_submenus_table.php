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
        Schema::create('SUBMENU', function (Blueprint $table) {
            $table->id('SUBMENU_ID');

            // MENU_ID
            $table->foreignId('SUBMENU_MENU')
            ->nullable(true)
            ->constrained('MENU', 'MENU_ID')
            ->onUpdate('cascade');

            $table->smallInteger('SUBMENU_ORDER', false);
            $table->string('SUBMENU_NAME', 20)->nullable(false);
            $table->string('SUBMENU_URL', 255)->nullable(false);

            $table->timestamp('SUBMENU_CREATED_AT');
            $table->timestamp('SUBMENU_UPDATED_AT')->nullable(true);
            $table->timestamp('SUBMENU_DELETED_AT')->nullable(true);

            // SUBMENU_CREATED_BY
            $table->foreignId('SUBMENU_CREATED_BY')
            ->constrained('users', 'id')
            ->onUpdate('cascade');

            // SUBMENU_UPDATED_BY
            $table->foreignId('SUBMENU_UPDATED_BY')
            ->nullable(true)
            ->constrained('users', 'id')
            ->onUpdate('cascade');

            // SUBMENU_DELETED_BY
            $table->foreignId('SUBMENU_DLETED_BY')
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
        Schema::dropIfExists('SUBMENU');
    }
};
