<?php


namespace App\Http\Composers;


use App\Models\Posts;
use Illuminate\View\View;

class PostComposer
{
    public function compose(View $view)
    {
        $view->with('posts',Posts::with('category')
                                    ->where('destaque',false)
                                    ->where('slide',false)
                                    ->orderBy('id','desc')
                                    ->get());
    }

}
