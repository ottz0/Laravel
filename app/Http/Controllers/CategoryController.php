<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;
use Illuminate\Http\Request;


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


        //$root = Category::where('parent_id', null)->get();
        // $collection = array();
        // $roots = Category::where('parent_id', null)->get();

        // foreach($roots as $root){
        //     $collection[] = Category::where('parent_id', $root->id)->with('articles')->get();
        // }

        // //dd($collection);

        // return view('marketplace.categories.index', [
        //     'categories' => $collection
        // ]);


        //$category = Article::with('category')->get();
        $rootCategories = [];
        $roots = Category::tree()->get()->toTree();
        foreach($roots as $root){
            $rootCategories = Category::with('recursiveCategories')->get();
        }

        //$category = Category::with('recursiveCategories')->get();

        // foreach($rootCategories as $rootCategory){
        //     echo $rootCategory->title;
        // }


        dd($rootCategories);


        // $categories = Category::tree()->with('articles')->get()->toTree();
        // foreach($categories as $category){
        //     echo $category->title . '<br />';
        //     foreach($category->children as $child){
        //         echo $child->title . '<br />&nbsp;&nbsp;&nbsp;&nbsp;';
        //         foreach($child->articles as $article){
        //             echo $article->title . '<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        //         }
        //     }
        // };


        //dd($categories);

        // return view('marketplace.categories.index', [
        //     'categories' => $categories
        // ]);





















        // $categories = array();
        // $parentCategories = Category::where('parent_id', null)->get();

        // foreach($parentCategories as $parentCategory){
        //         $categories[] = Category::where('parent_id',$parentCategory->id)->with('articles');
        // };

        // //dd($categories);

        // return view('marketplace.categories.index', [
        //     'categories' => $categories
        // ]);











       //$parentCategories = [];
        //Find the parents where null
        //$parents = Category::where('parent_id', null)->get();
        //Get the id's of the parents



        // foreach($parents as $parent){
        //     echo  $parent->id;
        //     //$parentCategories =  Category::where('parent_id',$parent->id)->with('articles')->get();
        //     $parentCategories = Category::where('parent_id', $parent->id)->get();
        // }
        // return view('marketplace.categories.index', [
        //     'categories' => $c
        // ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$categories = Category::with('articles')->get();

        $categories = Category::whereNotNull('parent_id')->with('articles')->get();

        //$categories = $subCategories->with('articles')->get();

        //dd($categories);

        return view('marketplace.categories.show', [
            'categories' => $categories
        ]);
    }
}
