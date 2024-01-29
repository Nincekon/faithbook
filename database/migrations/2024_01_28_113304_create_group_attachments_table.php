<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('group_attachments', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // cover, thumbnail, etc.
            $table->string('path', 1024);
            $table->string('url', 1024);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_attachments');
    }
};
