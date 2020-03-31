<?php

namespace App\Http\Controllers;

use App\Rating;
use App\Banner;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        if(!$request->has('category_id'))
        {
            $products = Product::paginate(6);
        } else {
            $categoryId = request('category_id');
            $products = Product::where('category_id', $categoryId)->paginate(6);
        }
        $ratings = Rating::all();
        $banners = Banner::all();
        $categories = Category::all();

        return view('index', compact('categories', 'products', 'banners', 'ratings'));
    }

}
