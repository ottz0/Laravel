<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['id','article_id','title','content'];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
}
