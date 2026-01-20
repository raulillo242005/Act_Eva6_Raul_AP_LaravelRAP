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
    Schema::create('post_r_a_p_s', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_rap_id')->constrained('user_r_a_p_s')->onDelete('cascade');
        $table->string('title');
        $table->text('content');
        $table->string('excerpt');
        $table->integer('views');
        $table->string('category');
        $table->timestamp('published_at')->nullable();
        $table->boolean('is_published');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_raps');
    }
};
