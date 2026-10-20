<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $categoris = Category::get();
        return view('Frontend.index', compact('categoris'));
    }

    public function shop()
    {
        return view('Frontend.shop');
    }

    public function returnProcess()
    {
        return view('Frontend.returnProcess');
    }

    public function categoryProduct()
    {
        return view('Frontend.categoryProduct');
    }

    public function subCategoryProduct()
    {
        return view('Frontend.sub-Category-Product');
    }

    public function productDetails()
    {
        return view('Frontend.product-details');
    }

    public function viewCart()
    {
        return view('Frontend.viewCart');
    }

    public function checkout()
    {
        return view('Frontend.checkout');
    }

}
