<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categories;
use App\Models\Posts;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::all();
        return view('admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Posts::with(['category','user'])->get();
        $post_status = Posts::POST_COVER;
        $categories = Categories::all()->pluck('name','id');
        return view('admin.post.create',compact(['posts','categories','post_status']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $user =  Auth::user();
        if ($file = $request->file('post_cover')){
            $name = time(). $file->getClientOriginalName();
            $file->move('images',$name);
            $input['post_status'] = $request->post_status ?? 'r';
            $input['post_cover']=$name;
            $input['post_published']= $request->post_status == 'a' ? Carbon::now('America/Manaus')->format('Y-m-d H:m:s') : ' ';
        }
           // dd($input);
       $salvo = $user->posts()->create($input);
     //   dd($salvo);
        return redirect('/admin/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Posts::findOrFail($id);
        $categories = Categories::all()->pluck('name','id');
        $post_status = Posts::POST_COVER;

        return view('admin.post.create',compact(['post','categories','post_status']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $user =  Auth::user();
        try {
            if ($file = $request->file('post_cover')){
                $name = time(). $file->getClientOriginalName();
                $file->move('images',$name);
                $input['post_cover']=$name;
                $input['post_published']= $request->post_status == 'a' ? Carbon::now('America/Manaus') : ' ';

            }
            $post = Posts::findOrFail($id);
            $post->post_title = $request->post_title;
            $post->post_content = $request->post_content;
            $post->post_status = $input['post_status'];
            $post->save();
            return redirect('/admin/posts');

        }catch(\Throwable $ex){
            dd($ex);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
