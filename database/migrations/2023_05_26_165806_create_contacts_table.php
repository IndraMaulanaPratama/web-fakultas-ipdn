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
        Schema::create('CONTACT', function (Blueprint $table) {
            $table->id('CONTACT_ID');

            // SETTING_ID
            $table->foreignId('CONTACT_SETTING')
            ->constrained('SETTING', 'SETTING_ID')
            ->onUpdate('cascade');

            $table->string('CONTACT_ADDRESS', 255);
            $table->string('CONTACT_TELEPHONE');
            $table->string('CONTACT_FAX');
            $table->string('CONTACT_EMAIL', 150);
            $table->string('CONTACT_FACEBOOK', 255)->nullable(true);
            $table->string('CONTACT_YOUTUBE', 255)->nullable(true);
            $table->string('CONTACT_INSTAGRAM', 255)->nullable(true);
            $table->text('CONTACT_MAPS');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('CONTACT');
    }
};
