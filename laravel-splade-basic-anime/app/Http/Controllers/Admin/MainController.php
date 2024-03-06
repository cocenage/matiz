<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Main;
use App\Models\Review;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.mains.index', [
            'mains' => SpladeTable::for(Main::class)
                ->column('img_logo', label: "лого", sortable: true)
                ->column('navbar_text', label: "navbar", sortable: true)
                ->column('navbar_text2', label: "navbar", sortable: true)
                ->column('navbar_text3', label: "navbar", sortable: true)
                ->column('navbar_text4', label: "navbar", sortable: true)
                ->column('navbar_text5', label: "navbar", sortable: true)
                ->column('navbar_text6', label: "navbar", sortable: true)
                ->column('navbar_text7', label: "navbar", sortable: true)
                ->column('navbar_text8', label: "navbar", sortable: true)
                ->column('main_text', label: "text", sortable: true)
                ->column('main_text2', label: "text", sortable: true)
                ->column('main_text3', label: "text", sortable: true)
                ->column('button_text1', label: "text", sortable: true)
                ->column('button_text2', label: "text", sortable: true)
                ->column('about_main', label: "маин", sortable: true)
                ->column('about_descr', label: "описани", sortable: true)
                ->column('about_main_bufs', label: "баф название", sortable: true)
                ->column('about_bufs', label: "бафс описание", sortable: true)
                ->column('about_main_bufs1', label: "баф название", sortable: true)
                ->column('about_bufs1', label: "бафс описание", sortable: true)
                ->column('about_main_bufs2', label: "баф название", sortable: true)
                ->column('about_bufs2', label: "бафс описание", sortable: true)
                ->column('about_main_bufs3', label: "баф название", sortable: true)
                ->column('about_bufs3', label: "бафс описание", sortable: true)
                ->column('card_main_text', label: "card", sortable: true)
                ->column('card_img_car', label: "card", sortable: true)
                ->column('card_text', label: "card", sortable: true)
                ->column('card_img_car2', label: "card", sortable: true)
                ->column('card_text2', label: "card", sortable: true)
                ->column('card_img_car3', label: "card", sortable: true)
                ->column('card_text3', label: "card", sortable: true)
                ->column('card_img_car4', label: "card", sortable: true)
                ->column('card_text4', label: "card", sortable: true)
                ->column('gallery_main_text', label: "main-text", sortable: true)
                ->column('review_main_text', label: "main-text", sortable: true)
                ->column('order_main_text', label: "main-text", sortable: true)
                ->column('img_footer_logo', label: "main-text", sortable: true)
                ->column('footer_main_text', label: "main-text", sortable: true)
                ->column('footer_number', label: "footer_number", sortable: true)
                ->column('footer_number_text', label: "footer_number", sortable: true)
                ->column('footer_number1', label: "footer_number", sortable: true)
                ->column('footer_number_text1', label: "footer_number", sortable: true)
                ->column('action', label: "Действие", canBeHidden: false)
                ->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mains.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $main = new Main();
        $main->img_logo = $request->file('img_logo')->store('public/main');
        $main->navbar_text= $request->input('navbar_text');
        $main->navbar_text2 = $request->input('navbar_text2');
        $main->navbar_text3 = $request->input('navbar_text3');
        $main->navbar_text4 = $request->input('navbar_text4');
        $main->navbar_text5 = $request->input('navbar_text5');
        $main->navbar_text6 = $request->input('navbar_text6');
        $main->navbar_text7 = $request->input('navbar_text7');
        $main->navbar_text8 = $request->input('navbar_text8');
        $main->main_text = $request->input('main_text');
        $main->main_text2 = $request->input('main_text2 ');
        $main->main_text3 = $request->input('main_text3 ');
        $main->button_text1 = $request->input('button_text1');
        $main->button_text2 = $request->input('button_text2');
        $main->about_main = $request->input('about_main');
        $main->about_descr = $request->input('about_descr');
        $main->about_main_bufs = $request->input('about_main_bufs');
        $main->about_bufs = $request->input('about_bufs');
        $main->about_main_bufs1 = $request->input('about_main_bufs1');
        $main->about_bufs1 = $request->input('about_bufs1');
        $main->about_main_bufs2 = $request->input('about_main_bufs2');
        $main->about_bufs2 = $request->input('about_bufs2');
        $main->about_main_bufs3 = $request->input('about_main_bufs3');
        $main->about_bufs3 = $request->input('about_bufs3');
        $main->card_main_text = $request->input('card_main_text');
        $main->card_img_car = $request->input('card_img_car');
        $main->card_text = $request->input('card_text');
        $main->card_img_car2 = $request->input('card_img_car2');
        $main->card_text2 = $request->input('card_text2');
        $main->card_img_car3 = $request->input('card_img_car3');
        $main->card_text3 = $request->input('card_text3');
        $main->card_img_car4 = $request->input('card_img_car4');
        $main->card_text4 = $request->input('card_text4');
        $main->gallery_main_text = $request->input('gallery_main_text');
        $main->review_main_text = $request->input('review_main_text');
        $main->order_main_text = $request->input('order_main_text');
        $main->img_footer_logo = $request->file('img_footer_logo')->store('public/main');
        $main->footer_main_text = $request->input('footer_main_text');
        $main->footer_number = $request->input('footer_number');
        $main->footer_number_text = $request->input('footer_number_text');
        $main->footer_number1 = $request->input('footer_number1');
        $main->footer_number_text1 = $request->input('footer_number_text1');
        $main->save();
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
    public function edit(Main $main)
    {
        return view('admin.mains.edit', compact('main'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Main $main)
    {
        $main->navbar_text= $request->input('navbar_text');
        $main->navbar_text2 = $request->input('navbar_text2');
        $main->navbar_text3 = $request->input('navbar_text3');
        $main->navbar_text4 = $request->input('navbar_text4');
        $main->navbar_text5 = $request->input('navbar_text5');
        $main->navbar_text6 = $request->input('navbar_text6');
        $main->navbar_text7 = $request->input('navbar_text7');
        $main->navbar_text8 = $request->input('navbar_text8');
        $main->main_text = $request->input('main_text');
        $main->main_text2 = $request->input('main_text2 ');
        $main->main_text3 = $request->input('main_text3 ');
        $main->button_text1 = $request->input('button_text1');
        $main->button_text2 = $request->input('button_text2');
        $main->about_main = $request->input('about_main');
        $main->about_descr = $request->input('about_descr');
        $main->about_main_bufs = $request->input('about_main_bufs');
        $main->about_bufs = $request->input('about_bufs');
        $main->about_main_bufs1 = $request->input('about_main_bufs1');
        $main->about_bufs1 = $request->input('about_bufs1');
        $main->about_main_bufs2 = $request->input('about_main_bufs2');
        $main->about_bufs2 = $request->input('about_bufs2');
        $main->about_main_bufs3 = $request->input('about_main_bufs3');
        $main->about_bufs3 = $request->input('about_bufs3');
        $main->card_main_text = $request->input('card_main_text');
        $main->card_img_car = $request->input('card_img_car');
        $main->card_text = $request->input('card_text');
        $main->card_img_car2 = $request->input('card_img_car2');
        $main->card_text2 = $request->input('card_text2');
        $main->card_img_car3 = $request->input('card_img_car3');
        $main->card_text3 = $request->input('card_text3');
        $main->card_img_car4 = $request->input('card_img_car4');
        $main->card_text4 = $request->input('card_text4');
        $main->gallery_main_text = $request->input('gallery_main_text');
        $main->review_main_text = $request->input('review_main_text');
        $main->order_main_text = $request->input('order_main_text');
        $main->footer_main_text = $request->input('footer_main_text');
        $main->footer_number = $request->input('footer_number');
        $main->footer_number_text = $request->input('footer_number_text');
        $main->footer_number1 = $request->input('footer_number1');
        $main->footer_number_text1 = $request->input('footer_number_text1');


        if ($request->hasFile('img_footer_logo')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->storeAs('public/mains', $filename);
            $main->image = $filename;
        }
        if ($request->hasFile('img_logo')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->storeAs('public/mains', $filename);
            $main->image = $filename;
        }
        $main->save();
        Toast::title('Отзыв обновлен!');
        return redirect()->route('mains.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Main $main)
    {
        $main->delete();
        Toast::title('Отзыв удален');
        return redirect()->route('mains.index');
    }
}
