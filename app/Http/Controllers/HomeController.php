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
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

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
}
