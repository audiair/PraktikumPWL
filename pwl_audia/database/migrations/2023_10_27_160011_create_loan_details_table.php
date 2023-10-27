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
        Schema::create('loan_details', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_return');
            $table->timestamps();

            $table->foreignId('loan_id')
            ->references('id')
            ->on('loanns')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('book_id')
            ->references('id')
            ->on('books')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_details');
    }
};
