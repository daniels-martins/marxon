<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('alt');
            $table->string('tags')->nullable();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->text('pg1');
            $table->text('pg2');
            $table->text('pg3')->nullable();
            $table->text('pg4')->nullable();
            $table->text('pg5')->nullable();
            $table->text('pg6')->nullable();
            $table->text('pg7')->nullable();
            $table->string('quote1')->nullable();
            $table->string('quote2')->nullable();


            //non nullable timestamps
            
            $table->timestamp('created_at')->default(now());
            $table->timestamp('updated_at')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
