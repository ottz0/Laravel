<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($categorySlug, $subCategorySlug, $articleSlug)
    {
        $parents = Category::tree()->get()->toTree();
        $categories = Category::where('slug', $subCategorySlug)->with('articles')->get();
        $articles = Article::where('slug', $articleSlug)->get();

        return view('marketplace.articles.show', [
            'parents' => $parents,
            'categories' => $categories,
            'articles' => $articles
        ]);
    }
}
