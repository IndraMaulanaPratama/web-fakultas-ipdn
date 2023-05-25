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
        Schema::create('SETTING', function (Blueprint $table) {
            $table->id('SETTING_ID');

            $table->string('SETTING_REGIONAL', 255);
            $table->string('SETTING_FAVICON', 50);
            $table->string('SETTING_LOGO', 50);
            $table->string('SETTING_HEADER', 50);
            $table->string('SETTING_DIRECTOR_IMAGE', 50);
            $table->string('SETTING_DIRECTOR_MESSAGE', 255);
            $table->text('SETTING_URL_MARS');
            $table->text('SETTING_URL_HYMNE');

            $table->timestamp('SETTING_CREATED_AT');
            $table->timestamp('SETTING_UPDATED_AT')->nullable(true);
            $table->timestamp('SETTING_DELETED_AT')->nullable(true);

            // SETTING_CREATED_BY
            $table->foreignId('SETTING_CREATED_BY')
            ->constrained('users', 'id')
            ->onUpdate('cascade');

            // SETTING_UPDATED_BY
            $table->foreignId('SETTING_UPDATED_BY')
            ->nullable(true)
            ->constrained('users', 'id')
            ->onUpdate('cascade');

            // SETTING_DELETED_BY
            $table->foreignId('SETTING_DLETED_BY')
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
        Schema::dropIfExists('SETTING');
    }
};
