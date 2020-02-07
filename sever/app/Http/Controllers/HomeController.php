<?php

namespace App\Http\Controllers;

use App\AdCategory;
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
        $adCategories = AdCategory::where('user_id',1)->get();
        return view('Home.index' , compact('adCategories'));
    }
}
