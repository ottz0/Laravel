<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Category extends Model
{
    use HasFactory;

    use HasRecursiveRelationships;

    protected $guarded = ['id'];

    public function getParentKeyName()
    {
        return 'parent_id';
    }

    public function recursiveCategories()
    {
        return $this->hasManyOfDescendantsAndSelf(Article::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
        //return $this->hasManyThrough(Article::class, Category::class);
    }


}
