<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Page extends Model
{
    protected $table='page';
    protected $fillable = ['page_title','page_slug','created_at','updated_at','page_actived'];

    public function pages() {
        return $this->hasMany(Page::class,'parent_id');
    }
    public function setPageTitleAttribute($value){
        $this->attributes['page_slug'] = Str::slug($value);
        $this->attributes['page_title'] =$value;
    }
}
