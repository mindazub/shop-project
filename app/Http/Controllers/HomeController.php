<?php

namespace App\Http\Controllers;

use App\Rating;
use App\Banner;
use App\Category;
use App\Product;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return View
     */
    public function index(): View
    {
        $ratings = Rating::all();
        $banners = Banner::all();
        $categories = Category::all();
        $products = Product::paginate(6);
        return view('index', compact('categories', 'products', 'banners', 'ratings'));
    }


    /**
     * @param Request $request
     * @param $id
     * @return View
     */
    public function productsByCategories(Request $request): View
    {
        $categoryId = request('category_id');
        $ratings = Rating::all();
        $banners = Banner::all();
        $categories = Category::all();
        $products = Product::where('category_id', $categoryId)->paginate(6);
        return view('index', compact('categories', 'products', 'banners', 'ratings'));
    }
}
