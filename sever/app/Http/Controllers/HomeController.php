<?php

namespace App\Http\Controllers;

use App\AdCategory;
use App\Advertisements;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $adCategories = AdCategory::where('user_id',1)->get();;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $adCategories = AdCategory::where('MC_id','==',0)->get();
        $allAds = Advertisements::where('state',1)->get();
        return view('Home.index' , compact('allAds','adCategories'));
    }
}
