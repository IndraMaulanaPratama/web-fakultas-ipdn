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
        Schema::create('ACCESS_LEVEL', function (Blueprint $table) {
            $table->id('ACCESS_ID');

            // ROLE_ID
            $table->foreignId('ACCESS_ROLE')
            ->nullable(true)
            ->constrained('ROLE', 'ROLE_ID')
            ->onUpdate('cascade');

            //  MENU_ID
            $table->foreignId('ACCESS_MENU')
            ->constrained('MENU', 'MENU_ID')
            ->onUpdate('cascade');

            //  SUBMENU_ID
            $table->foreignId('ACCESS_SUBMENU')
            ->nullable(true)
            ->constrained('SUBMENU', 'SUBMENU_ID')
            ->onUpdate('cascade');

            $table->string('ACCESS_NAME', 50)->nullable(false);
            $table->boolean('ACCESS_READ');
            $table->boolean('ACCESS_DETAIL');
            $table->boolean('ACCESS_CREATE');
            $table->boolean('ACCESS_UPDATE');
            $table->boolean('ACCESS_SOFT_DELETE');
            $table->boolean('ACCESS_DELETE');
            $table->boolean('ACCESS_HIDE');
            $table->boolean('ACCESS_SHOW');

            $table->timestamp('ACCESS_CREATED_AT');
            $table->timestamp('ACCESS_UPDATED_AT')->nullable(true);
            $table->dateTime('ACCESS_DELETED_AT')->nullable(true);

            // ACCESS_CREATED_BY
            $table->foreignId('ACCESS_CREATED_BY')
            ->constrained('users', 'id')
            ->onUpdate('cascade');

            // ACCESS_UPDATED_BY
            $table->foreignId('ACCESS_UPDATED_BY')
            ->nullable(true)
            ->constrained('users', 'id')
            ->onUpdate('cascade');

            // ACCESS_DELETED_BY
            $table->foreignId('ACCESS_DELETED_BY')
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
        Schema::dropIfExists('ACCESS_LEVEL');
    }
};
