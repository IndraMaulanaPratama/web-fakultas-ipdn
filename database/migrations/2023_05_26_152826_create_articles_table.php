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
        Schema::create('ARTICLE', function (Blueprint $table) {
            $table->id('ARTICLE_ID');

            // CATEGORY_ID
            $table->foreignId('ARTICLE_CATEGORY')
            ->nullable(true)
            ->constrained('CATEGORY', 'CATEGORY_ID')
            ->onUpdate('cascade');

            $table->string('ARTICLE_TITLE', 150)->nullable(false);
            $table->text('ARTICLE_CONTENT');
            $table->string('ARTICLE_THUMBNAIL', 200)->nullable(true);
            $table->string('ARTICLE_STATUS', 1)->nullable(false)->comment('0: Archive, 1. Publish, 2: Draft');

            $table->timestamp('ARTICLE_CREATED_AT');
            $table->timestamp('ARTICLE_UPDATED_AT')->nullable(true);
            $table->timestamp('ARTICLE_DELETED_AT')->nullable(true);

            // ARTICLE_CREATED_BY
            $table->foreignId('ARTICLE_CREATED_BY')
            ->constrained('users', 'id')
            ->onUpdate('cascade');

            // ARTICLE_UPDATED_BY
            $table->foreignId('ARTICLE_UPDATED_BY')
            ->nullable(true)
            ->constrained('users', 'id')
            ->onUpdate('cascade');

            // ARTICLE_DELETED_BY
            $table->foreignId('ARTICLE_DLETED_BY')
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
        Schema::dropIfExists('ARTICLE');
    }
};
