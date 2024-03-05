<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Gallery;
use App\Models\Network;
use App\Models\Order;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class IndexController extends Controller
{
    // функция для открытия главной страницы
    public function index() {
        $cards = Card::where('isActive', 1)-> get();
        $galleries = Gallery::where('isActive', 1)-> get();
        $reviews = Review::where('isActive', 1)-> get();
        $orders = Order::where('isActive', 1)-> get();

        return view('client.index', [

            'reviews'=>$reviews,
            'cards'=>$cards,
            'galleries'=>$galleries,
            'orders'=>$orders

        ]);
    }

    public function store(Request $request) {
        $orders = new Order();
        $orders->name = $request->input('name');
        $orders->surname = $request->input('surname');
        $orders->number = $request->input('number');
        $orders->date_start = $request->input('date_start');
        $orders->date_end = $request->input('date_end');
        $orders->card_id = $request->input('card_id');
        $orders->isActive = 1;
        $orders->save();
        Toast::title('заказ обновлен!');
        return redirect()->route('client.index');
    }
}
