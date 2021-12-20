<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('site.product.index', [
            'products' => Product::all(),
        ]);
    }

    public function newProduct(){
        return view('site.category.cms-new-product');
    }

    public function editProduct(){
        return view('site.category.cms-edit-product');
    }
}
