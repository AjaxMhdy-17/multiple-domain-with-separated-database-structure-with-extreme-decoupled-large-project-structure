<?php

namespace Domains\Shop\Http\Controllers;

use App\Http\Controllers\Controller;

class VariantController extends Controller
{
    public function index()
    {
        return view('Shop::variant_controller');
    }
}