<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceStoreRequest;
use App\Models\Feedback;
use App\Models\Review;
use App\Models\Service;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.reviews.index', [
            'reviews' => SpladeTable::for(Review::class)
                ->withGlobalSearch(columns: ['name', 'text'])
                ->column('name', label: "ФИО", sortable: true)
                ->column('text', label: "Отзыв")
                ->column('order', label: "Кол-во заказов")
                ->column('rating', label: "Рейтинг")
                ->column('action', label: "Действие", canBeHidden: false)
                ->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $review = new Review();
        $review->name = $request->input('name');
        $review->text = $request->input('text');
        $review->order = $request->input('order');
        $review->rating = $request->input('rating');
        $review->isActive = $request->input('isActive');
        $review->save();
        Toast::title('Новый отзыв добавлен.');
        return redirect()->route('reviews.index');
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
    public function edit(Review $review)
    {
        return view('admin.reviews.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        $review->name = $request->input('name');
        $review->text = $request->input('text');
        $review->rating = $request->input('rating');
        $review->order = $request->input('order');
        $review->isActive = $request->input('isActive');

        $review->save();
        Toast::title('Отзыв обновлен!');
        return redirect()->route('reviews.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $review->delete();
        Toast::title('Отзыв удален');
        return redirect()->route('reviews.index');
    }
}
