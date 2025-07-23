<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
   Schema::create('categories', function (Blueprint $table) {
    $table->id();                               // Primary key
    $table->string('name');                    // Category name
    $table->string('image')->nullable();       // Image file name (optional)
    $table->text('description')->nullable();   // Description (optional)
    $table->softDeletes();
    $table->timestamps();                      // created_at and updated_at
});
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
