<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Gallery;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class GalleryController extends Controller
{
    public function index()
    {
        return view('admin.galleries.index', [
            'galleries' => SpladeTable::for(Gallery::class)
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
        return view('admin.galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gallery = new Gallery();
        $gallery->isActive = $request->input('isActive');
        $gallery->image = $request->file('image')->store('public/gallery');
        $gallery->save();
        Toast::title('галерея добавлена!');
        return redirect()->route('galleries.index');
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
    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {

        $gallery->isActive = $request->input('isActive');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->storeAs('public/galleries', $filename);
            $gallery->image = $filename;
        }
        $gallery->save();
        Toast::title('галерея обновлена!');
        return redirect()->route('galleries.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        Toast::title('галерея удалена');
        return redirect()->route('galleries.index');
    }
}
