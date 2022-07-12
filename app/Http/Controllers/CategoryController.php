<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get whole tree
        //$tree = Category::tree(2)->get();
        //$descendants = Category::find(2)->descendants()->get();
        //dd($descendants);
        //$c = Category::tree()->get()->toTree();
        //$c = Category::find(1)->articles;
        //$b = Category::withCount('articles')->get();
        //$categories = Category::with('articles')->get();
        //$id = Category::where('parent_id',1)->get();
        //$categories = Category::where('parent_id', null)->get();
        //$categories = Category::whereNotNull('parent_id')->get();

        $categories = [];
        $parentIds = Category::all();
        foreach($parentIds as $parentId){
            $categories = Category::where('parent_id', null)->with('recursiveArticles')->get();
        }

        //dd($categories);

        return view('marketplace.categories.index', [
            'categories' => $categories
        ]);

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // $categories = Category::where('parent_id', $categoryId)
        //     ->with(['recursiveArticles' => function($q){
        //         return $q->limit(8);
        //     }])
        //     ->get();

        // $parent = Category::where('slug', $slug)->get();
        // $parentId = $parent[0]->id;
        // $categories = Category::where('parent_id', $parentId)
        //     ->with('articles')
        //     ->get();
        // dd($categories);

        //dd($slug);

        $parents = Category::tree()->get()->toTree();
        $subCategories = Category::where('slug', $slug)->get();
        $articles = Category::where('parent_id',$subCategories[0]->id)->with('articles')->get();
        //dd($subCategories);
        return view('marketplace.categories.show', [
            'parents' => $parents,
            'subCategories' => $subCategories,
            'articles' => $articles
        ]);
    }
    public function subCategory($categorySlug, $subCategorySlug)
    {


        $parents = Category::tree()->get()->toTree();
        $subCategories = Category::where('slug', $subCategorySlug)->with('articles')->get();

        dd($subCategories);

        return view('marketplace.categories.sub_category', [
            'parents' => $parents
        ]);
    }
}
