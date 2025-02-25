<?php

namespace Domains\Shop\Http\Controllers;

use App\Http\Controllers\Controller;
use Domains\Shop\Http\Requests\CategoryRequest;
use Domains\Shop\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        $categories = Category::all() ; 

        return view('Shop::module',['categories' => $categories]);
    }


    public function create() {
        return view("Shop::create");
    }

    public function createStore(CategoryRequest $request) {

        $data = $request->validated() ; 
        $done = Category::create($data); 
        return redirect()->route('Shop::module') ; 
    }

    

}