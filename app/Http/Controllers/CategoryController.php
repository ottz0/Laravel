<?php

namespace App\Http\Controllers;

use App\Models\Category;
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








        $llc = array();
        $parentCategories = Category::where('parent_id', null)->get();

        foreach($parentCategories as $parentCategory){
                $llc[] = Category::where('parent_id',$parentCategory->id)->with('articles')->get();
        };

        return view('marketplace.categories.index', [
            'categories' => $llc
        ]);







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
