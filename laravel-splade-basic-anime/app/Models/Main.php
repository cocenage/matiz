<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    use HasFactory;

    protected $table = "mains";
    protected $fillable = [
        'img_logo',
        'navbar_text',
        'navbar_text2',
        'navbar_text3',
        'navbar_text4',
        'navbar_text5',
        'navbar_text6',
        'navbar_text7',
        'navbar_text8',
        'main_text',
        'main_text2',
        'main_text3',
        'button_text1',
        'button_text2',
        'about_main',
        'about_descr',
        'about_main_bufs',
        'about_bufs',
        'about_main_bufs1',
        'about_bufs1',
        'about_main_bufs2',
        'about_bufs2',
        'about_main_bufs3',
        'about_bufs3',
        'card_main_text',
        'card_img_car',
        'card_text',
        'card_img_car2',
        'card_text2',
        'card_img_car3',
        'card_text3',
        'card_img_car4',
        'card_text4',
        'gallery_main_text',
        'review_main_text',
        'order_main_text',
        'img_footer_logo',
        'footer_main_text',
        'footer_number',
        'footer_number_text',
        'footer_number1',
        'footer_number_text1'
    ];
}
