<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $guarded=[];
   // public $timestamps=false;

    public function posts()
    {
        return $this->hasMany(Posts::class, 'category_id');
    }
    public function categories() {
        return $this->hasMany(Categories::class,'parent_id');
    }
    public function setNameAttribute($value)
    {
        $this->attributes['name_slug'] = Str::slug($value);
    }
}
