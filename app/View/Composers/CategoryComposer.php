<?php


namespace App\Http\Composers;


use App\Models\Categories;
use Illuminate\View\View;

class CategoryComposer
{

    public function compose(View $view)
    {
        $view->with('categories',Categories::with(['categories','posts'])->get());
    }
}
