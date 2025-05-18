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
    Schema::create('landing_page_settings', function (Blueprint $table) {
        $table->id();
        $table->string('hero_title')->nullable();
        $table->text('hero_description')->nullable();
        $table->string('hero_cta_link')->nullable();
        $table->json('navigation')->nullable();
        $table->longText('about_us')->nullable();
        $table->string('about_image')->nullable();
        $table->json('benefits')->nullable(); // array of {icon, text}
        $table->longText('testimoni_text')->nullable();
        $table->string('testimoni_image')->nullable();
        $table->json('faqs')->nullable(); // array of {q, a}
        $table->string('logo')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landing_page_settings');
    }
};
