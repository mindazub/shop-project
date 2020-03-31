<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Http\Requests\StoreBannerRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $banners = Banner::all();
        return view('banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBannerRequest $request
     * @return RedirectResponse
     */
    public function store(StoreBannerRequest $request): RedirectResponse
    {
        $path = $request->file('banner')
            ? $request->file('banner')->store('banners', 'public') :'default/900x350.png';

        Banner::create([
            'banner' =>  $path
        ]);

        return redirect()->route('banners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();

        return redirect()->route('banners.index');
    }
}
