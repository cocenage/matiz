<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Catalog;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.cards.index', [
            'cards' => SpladeTable::for(Card::class)
                ->withGlobalSearch(columns: ['name', 'rent'])
                ->column('name', label: "Название машины", sortable: true)
                ->column('rent', label: "цена  аренды")
                ->column('volume', label: "объем ")
                ->column('power', label: "мощность ")
                ->column('box', label: "коробка передач")
                ->column('fuel', label: "топливо ")
                ->column('drive', label: "привод ")
                ->column('image', label: "Изображение нашей пушки гонки")
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
        return view('admin.cards.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $card = new Card();
        $card->name = $request->input('name');
        $card->rent = $request->input('rent');
        $card->volume = $request->input('volume');
        $card->power = $request->input('power');
        $card->box = $request->input('box');
        $card->fuel = $request->input('fuel');
        $card->drive = $request->input('drive');
        $card->isActive = $request->input('isActive');
        $card->image = $request->file('image')->store('public/cards');
        $card->save();
        Toast::title('Услуга добавлена!');
        return redirect()->route('cards.index');
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
    public function edit(Card $card)
    {
        return view('admin.cards.edit', compact('card'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Card $card)
    {
        $card->name = $request->input('name');
        $card->rent = $request->input('rent');
        $card->volume = $request->input('volume');
        $card->power = $request->input('power');
        $card->box = $request->input('box');
        $card->fuel = $request->input('fuel');
        $card->drive = $request->input('drive');
        $card->isActive = $request->input('isActive');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->storeAs('public/cards', $filename);
            $card->image = $filename;
        }
        $card->save();
        Toast::title('Услуга обновлена!');
        return redirect()->route('cards.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Card $card)
    {
        $card->delete();
        Toast::title('Услуга удалена');
        return redirect()->route('cards.index');
    }
}
