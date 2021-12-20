<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
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
        return view('site.category.index', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * @param Category $category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Category $category){
        return view('site.category.show', ['category' => $category->load('products')]);
    }

    public function newCategory(){
        return view('site.category.cms-new-category');
    }

    public function editCategory(){
        return view('site.category.cms-edit-category');
    }
}
