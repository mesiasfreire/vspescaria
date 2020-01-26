<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Self_;

class Posts extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'post_title',
        'post_slug',
        'post_content',
        'post_cover',
        'post_status',
        'author_id',
        'category_id',
        'created_at',
        'updated_at',
        'post_published',
    ];
    const POST_COVER = ['r'=>'RASCUNHO','a'=>'ATIVO','d'=>'DESABILITADO'];
    protected $appends = ['post_status_original'];

    public function category() {
        return $this->belongsTo(Categories::class);
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function getPostStatusAttribute($value){
        return self::POST_COVER[$value];
    }

    public function setPostTitleAttribute($value){
        $this->attributes['post_slug'] = Str::slug($value);
        $this->attributes['post_title'] =$value;
    }

    public function getPostStatusOriginalAttribute()
    {
        return $this->attributes['post_status_original'] = array_flip(self::POST_COVER)[$this->post_status];
    }
}
