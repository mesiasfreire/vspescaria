<?php


namespace App\Services;


use App\Models\Posts;
use Illuminate\Support\Facades\DB;

class PostService
{

    /**
     * @var Posts
     */
    private $post;

    public function __construct(Posts $post)
    {
        $this->post = $post;
    }

    public function store($post = null)
    {
        try {
            DB::beginTransaction();




            DB::commit();
        }catch (\Throwable $ex){
            DB::rollback();
        }


    }

    /**
     * @return Posts
     */
    public function getPost(): Posts
    {
        return $this->post;
    }

    public function storePostCoverImage($image)
    {
        if ($file = $image['post_cover']) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
        }
    }
}
