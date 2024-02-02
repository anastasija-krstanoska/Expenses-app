<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('name');
            $table->float('price');
            $table->unsignedBigInteger('user_id'); // Foreign key za korisnik
            $table->unsignedBigInteger('category_id'); // Foreign key za kategorija
            $table->tinyInteger('status')->default(1);
            $table->timestamps();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
