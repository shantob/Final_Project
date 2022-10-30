<?php

namespace App\View\Composers;

use App\Models\Card;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\District;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ForntendComposer
{

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $districts = District::pluck('name', 'id')->toArray();
        $carousels = Carousel::latest()->get();
        $categories = Category::all();
        $view->with([
            'categories' => $categories,
            'districts' => $districts,
            'cartItemCount' => auth()->user()?->carts->count(),
            'carousels' => $carousels
        ]);
    }
}
