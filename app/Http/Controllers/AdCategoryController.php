<?php

namespace App\Http\Controllers;

use App\AdCategory;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return AdCategory::where('type','m')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
//        json_encode(AdCategory::all());
//        ;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
//        return response()->json($request->MC_id);

//        return  ;
        return AdCategory::create([
            'MC_id'=>3,
            'type'=>'s',
            'description'=>'$request->newCategoy',
            'user_id'=>'Auth::user()->id',

        ]);

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\AdCategory  $adCategory
     * @return \Illuminate\Http\Response
     */
    public function show(AdCategory $adCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdCategory  $adCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(AdCategory $adCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdCategory  $adCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdCategory $adCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdCategory  $adCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdCategory $adCategory)
    {
        //
    }


    public function findSC(Request $request){
//        return response()->json($request->MC_id);
            $vv = $request->MC_id;;
        return AdCategory::where('MC_id', $vv)->get();
//        return $request->MC_id;
    }
}
