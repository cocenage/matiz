<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Feedback;
use App\Models\Order;
use App\Models\Review;
use App\Models\Status;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cards = Card::pluck('name', 'id')->toArray();
        return view('admin.orders.index', [
            'order' => SpladeTable::for(Order::class)
                ->withGlobalSearch(columns: ['name', 'surname'])
                ->selectFilter('card_id', $cards, label: "статусы")
                ->column('name', label: 'имя')
                ->column('surname', label: 'фамилюс')
                ->column('number', label: 'номер')
                ->column('date_start', label: 'дата старт')
                ->column('date_end', label: 'дата end')

                ->column('isActive', label: 'актив пасив')
                ->column('action', label: 'Действие')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cards = Card::pluck('name', 'id')->toArray();
        return view('admin.orders.create', compact('cards'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = new Order();
        $order->name = $request->input('name');
        $order->surname = $request->input('surname');
        $order->number = $request->input('number');
        $order->date_start = $request->input('date_start');
        $order->date_end = $request->input('date_end');

        $order->isActive = $request->input('isActive');
        $order->card_id = $request->input('card_id');
        $order->save();
        Toast::title('Новая заявка успешно добавлена');
        return redirect()->route('orders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
//        $statuses = Status::pluck('title', 'id')->toArray();
        return view('admin.orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {

        $order->name = $request->input('name');
        $order->surname = $request->input('surname');
        $order->number = $request->input('number');
        $order->date_start = $request->input('date_start');
        $order->date_end = $request->input('date_end');

        $order->isActive = $request->input('isActive');

        $order->save();
        Toast::title('заявка обновлена!');
        return redirect()->route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        Toast::title('заявка удалена');
        return redirect()->route('orders.index');
    }
}
