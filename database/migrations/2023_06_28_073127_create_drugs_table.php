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
        Schema::create('drugs', function (Blueprint $table) {
            $table->id();
            $table->string('approved_by')->nullable();
            $table->dateTime('approved_date')->nullable();
            $table->boolean('approved_status')->nullable();
            $table->integer('dose');
            $table->dateTime('expiry_date')->nullable();
            $table->string('name');
            $table->text('rejection_note')->nullable();
            $table->string('registered_by');
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drugs');
    }
};
