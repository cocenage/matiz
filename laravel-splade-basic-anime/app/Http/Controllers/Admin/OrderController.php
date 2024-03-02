<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Order;
use App\Models\Review;
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
        return view('admin.cards.index', [
            'cards' => SpladeTable::for(Card::class)
                ->withGlobalSearch(columns: ['name', 'surname'])
                ->column('name', label: "имя", sortable: true)
                ->column('surname', label: "фамилия")
                ->column('number', label: "номер телефона")
                ->column('date_start', label: "стартовая дата")
                ->column('date_end', label: "конечная дата")
                ->column('car', label: "выбор машины")
                ->column('isActive', label: "актив или пассив")
                ->column('action', label: "Действие", canBeHidden: false)
                ->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.orders.create');
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
        $order->car = $request->input('car');
        $order->isActive = $request->input('isActive');
        $order->save();
        Toast::title('Новый заказ добавлен. Нам на него все равно.');
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
        $order->car = $request->input('car');
        $order->isActive = $request->input('isActive');
        $order->save();
        Toast::title('заказ обновлен!');
        return redirect()->route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        Toast::title('Отзыв удален');
        return redirect()->route('orders.index');
    }
}
