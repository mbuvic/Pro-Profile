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
        // Fix individual_profiles table
        Schema::table('individual_profiles', function (Blueprint $table) {
            // Drop the incorrect deleted_at column
            $table->dropColumn('deleted_at');
            
            // Add proper soft deletes
            $table->softDeletes();
            
            // Change string columns to text
            $table->text('about')->nullable()->change();
            $table->text('company')->nullable()->change();
            $table->text('location')->nullable()->change();
            $table->text('business_hours')->nullable()->change();
            
            // Ensure JSON columns are properly defined
            $table->json('websites')->nullable()->change();
            $table->json('contacts')->nullable()->change();
            $table->json('emails')->nullable()->change();
            $table->json('social_links')->nullable()->change();
        });

        // Fix business_profiles table
        Schema::table('business_profiles', function (Blueprint $table) {
            // Drop the incorrect deleted_at column
            $table->dropColumn('deleted_at');
            
            // Add proper soft deletes
            $table->softDeletes();
            
            // Change string columns to text
            $table->text('about')->nullable()->change();
            $table->text('location')->nullable()->change();
            $table->text('address')->nullable()->change();
            
            // Ensure JSON columns are properly defined
            $table->json('websites')->nullable()->change();
            $table->json('contacts')->nullable()->change();
            $table->json('emails')->nullable()->change();
            $table->json('social_links')->nullable()->change();
            $table->json('services')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Revert individual_profiles table
        Schema::table('individual_profiles', function (Blueprint $table) {
            $table->dropSoftDeletes();
            $table->date('deleted_at')->nullable();
            
            $table->string('about')->nullable()->change();
            $table->string('company')->nullable()->change();
            $table->string('location')->nullable()->change();
            $table->string('business_hours')->nullable()->change();
        });

        // Revert business_profiles table
        Schema::table('business_profiles', function (Blueprint $table) {
            $table->dropSoftDeletes();
            $table->date('deleted_at')->nullable();
            
            $table->string('about')->nullable()->change();
            $table->string('location')->nullable()->change();
            $table->string('address')->nullable()->change();
        });
    }
}; 