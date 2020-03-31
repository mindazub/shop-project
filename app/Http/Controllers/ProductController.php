<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRatingRequest;
use App\Category;
use App\Http\Requests\StoreProductRequest;
use App\Product;
use App\Rating;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {

        $products = Product::paginate(5);

        return view('products.index', compact('products', 'ratings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $categories = Category::all();

        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreProductRequest $request
     * @return RedirectResponse
     */
    public function store(StoreProductRequest $request): RedirectResponse
    {
        $path = $request->file('photo') ? $request->file('photo')
        ->store('photos', 'public') : 'default/700x400.jpg';

        Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category_id'),
            'photo' => $path,
        ]);

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function show($id): View
    {
        $rating = Rating::where('product_id', $id);
        $product = Product::findOrFail($id);
        return view('products.show', compact('product', 'rating'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit($id): View
    {

        $product = Product::findOrFail($id);
        $categories = Category::all();

        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $product = Product::findOrFail($id);

        $oldPhotoPath = $product->photo;

        $product->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category_id'),
            'photo' => $request->file('photo') ? $request->file('photo')->store('photos', 'public') : $oldPhotoPath,
        ]);

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index');
    }

    /**
     * Store the rating from product show page, only the user not admin
     * @param Product $product
     * @param StoreRatingRequest $request
     * @return RedirectResponse
     */

    public function storeRating(Product $product, StoreRatingRequest $request): RedirectResponse
    {
        $product->ratings()->create(['rating' => $request->input('rating')]);

        return redirect()->back();

    }
}
