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
        Schema::create('clients', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('name',50);
            $table->string('email',100);
            $table->string('password');
            $table->enum('gender',['Male','Female','Other'])->nullable();
            $table->text('address')->default('empty')->nullable();
            $table->date('join_date')->nullable();
            $table->integer('points')->default('0')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
