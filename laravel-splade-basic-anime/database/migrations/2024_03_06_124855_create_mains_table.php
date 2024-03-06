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
        Schema::create('mains', function (Blueprint $table) {
            $table->id();
            $table->string('img_logo');
            $table->string('navbar_text');
            $table->string('navbar_text2');
            $table->string('navbar_text3');
            $table->string('navbar_text4');
            $table->string('navbar_text5');
            $table->string('navbar_text6');
            $table->string('navbar_text7');
            $table->string('navbar_text8');

            $table->string('main_text');
            $table->string('main_text2');
            $table->string('main_text3');
            $table->string('button_text1');
            $table->string('button_text2');

            $table->string('about_main');
            $table->string('about_descr');
            $table->string('about_main_bufs');
            $table->string('about_bufs');
            $table->string('about_main_bufs1');
            $table->string('about_bufs1');
            $table->string('about_main_bufs2');
            $table->string('about_bufs2');
            $table->string('about_main_bufs3');
            $table->string('about_bufs3');

            $table->string('card_main_text');
            $table->string('card_img_car');
            $table->string('card_text');
            $table->string('card_img_car2');
            $table->string('card_text2');
            $table->string('card_img_car3');
            $table->string('card_text3');
            $table->string('card_img_car4');
            $table->string('card_text4');

            $table->string('gallery_main_text');

            $table->string('review_main_text');

            $table->string('order_main_text');

            $table->string('img_footer_logo');
            $table->string('footer_main_text');
            $table->string('footer_number');
            $table->string('footer_number_text');
            $table->string('footer_number1');
            $table->string('footer_number_text1');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mains');
    }
};
