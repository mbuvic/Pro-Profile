<?php

use App\Models\User;
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
        Schema::create('business_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->string('username')->unique();
            $table->string('business_name');
            $table->string('about')->nullable();
            $table->string('location')->nullable();
            $table->string('address')->nullable();
            $table->string('logo')->nullable();
            $table->string('theme')->nullable();
            $table->json('websites')->nullable();
            $table->json('contacts')->nullable();
            $table->json('emails')->nullable();
            $table->json('social_links')->nullable();
            $table->json('services')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_profiles');
    }
};
