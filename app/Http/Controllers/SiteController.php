<?php

namespace App\Http\Controllers;

use App\Mail\ContatoMail;
use App\Models\Categories;
use App\Models\Posts;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use function foo\func;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index (){
        $posts_destaque = Posts::with('category')
                                 ->where('destaque',true)
                                ->orderBy('id','desc')
                                ->take(3)
                                ->get();


        return view('site.layout.page',compact('posts_destaque'));
    }

    public function page($categoria)
    {
            $category =Categories::with(['posts','categories'])
                        ->where('name_slug',$categoria)
                        ->first();
            if(!$category) {
                return abort(404);
            }
            return view('site.layout.category',compact('category'));
    }

    public function content($category, $post)
    {
        $catPosts = Categories::with([
                'posts' => function ($query) use ($post) {
                    $query->where('post_slug', $post);
                },
                'categories.posts' => function($query) {
                    if ($query->count() >= 5) {
                        $query->get()->random(5);
                    }
                    $query->get();
                }
            ])
            ->where('name_slug', $category)->first();
        if (!$catPosts || $catPosts->posts->isEmpty()) {
            return abort(404);
        }
        return view('site.layout.content',compact('catPosts'));
    }
    public function sendEmail(Request $request) {

        $validator = Validator::make($request->all(), [
            'nome' => 'required|max:255',
            'email'=>  'required|email',
            'assunto'=> 'required',
        ]);
        if ($validator->fails()) {
            return redirect('/#contact')
                ->withErrors($validator)
                ->withInput();
        }
        $contato = [
            'nome'=>    $request->nome,
            'email'=>   $request->email,
            'assunto'=> $request->assunto,
        ];

        Mail::send(new ContatoMail($contato));
    }

}
