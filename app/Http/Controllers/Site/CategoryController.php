<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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

    public function form(CategoryFormRequest $request){

        // echo 9 . '<br>';
        // print_r(97);
        // $imageOrigin = storage_path() . "/" . $request->image;
        // $imageOrigin = $request->image;
        // $uri = 
        // echo 'Origem: ' . $imageOrigin . '<br>';
        // echo 'Foi: ' . 9 . '<br>';
        // $imageDestiny = '/images/toolbar/'. $imageOrigin;
        // echo 'Foi: ' . $imageDestiny . '<br>';
        // print_r($imageDestiny);
        // File::copy($imageOrigin, public_path($imageDestiny));
        // echo 'Foi: ' . $imageDestiny;
        // $request['image'] = $imageDestiny;
        // echo 'Foi: ' . 2 . '<br>';

        $category = Category::create($request->all());
        // Notification::route('mail', config('mail.from.address'))
        //     ->notify(new NewContact($category));

        toastr()->success('Categoria criada com sucesso!');
        return back();
    }
}
