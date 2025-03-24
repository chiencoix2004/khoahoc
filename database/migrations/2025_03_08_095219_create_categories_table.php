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
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // Cột id tự tăng
            $table->string('name'); // Tên danh mục
            $table->string('slug')->unique(); // Slug cho URL, duy nhất 
            $table->unsignedBigInteger('parent_id')->nullable(); // Cột parent_id để phân cấp
            $table->timestamps(); // Cột created_at và updated_at 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};