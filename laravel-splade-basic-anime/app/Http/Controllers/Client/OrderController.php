<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Review;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class OrderController extends Controller
{
    public function order(Request $request){

        $orders = new Order();
        $orders->name = $request->input('name');
        $orders->surname = $request->input('surname');
        $orders->number = $request->input('number');
        $orders->date_start = $request->input('date_start');
        $orders->date_end = $request->input('date_end');
        $orders->car = $request->input('car');
        $orders->isActive = $request->input('isActive');
        $orders->save();
        Toast::title('заказ обновлен!');
        return redirect()->route('orders.index');
    }
}
