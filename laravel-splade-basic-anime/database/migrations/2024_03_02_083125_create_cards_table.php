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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique()->comment('Название машины');
            $table->string('rent')->comment('цена аренды');
            $table->string('volume')->comment('Объем бака');
            $table->string('power')->comment('Мощность движка');
            $table->string('box')->comment('коробка передач');
            $table->string('fuel')->comment('топливо');
            $table->string('drive')->comment('привод');
            $table->string('image')->default('Фото машины');
            $table->boolean('isActive')->default(0)->comment('Статус кейса');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
