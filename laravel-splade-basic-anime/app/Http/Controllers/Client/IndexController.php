<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Gallery;
use App\Models\Network;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // функция для открытия главной страницы
    public function index() {
        $cards = Card::where('isActive', 1)-> get();
        $galleries = Gallery::where('isActive', 1)-> get();
        $reviews = Review::where('isActive', 1)-> get();

        return view('client.index', [

            'reviews'=>$reviews,
            'cards'=>$cards,
            'galleries'=>$galleries,

        ]);
    }
}
