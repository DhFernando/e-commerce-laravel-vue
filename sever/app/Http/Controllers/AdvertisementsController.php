<?php

namespace App\Http\Controllers;

use App\AdCategory;
use App\Advertisements;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class AdvertisementsController extends Controller
{

private function requestValidate(){
    return tap(request()->validate([
        'main_name'=>'required',
        'description'=>'required | min:3',
        'price'=>'required',
        'SubCategory_id'=>'required',
        'MainCategory_id'=>'required',
        'location'=>'required',
        'condition'=>'required',
    ]),function (){
        if(request()->hasFile('image')){
            request()->validate([
                'image'=>'file|image|max:5000',
            ]);
        }
    }
    );
}

    public function index()
    {
        $ads = Advertisements::where('state',1)->get();

        return view('Advertisements.index',compact('ads'));
    }


    public function create()
    {
        if(Auth::check()){
            $user = Auth::user();
            $advertisement = new Advertisements();
            return view('Advertisements.create',compact('user','advertisement'));
        }else{
            return redirect('/login');
        }

    }

    public function store(){

        $Ad = User::find(Auth::user()->id)->advertisements()->create(array_merge(
            $this->requestValidate(),
            ['state'=>0]
        ));

        $this->storeImage($Ad);

        return redirect('/');
    }

    public function storeImage($Ad){
        if(request()->has('image')){
            $Ad->update([
                'image'=>request()->image->store('uploads','public')

            ]);
        }
    }

    public function show($advertisement)
    {
        $ad = Advertisements::find($advertisement);
        $otherAdsFormUser = Advertisements::where('user_id',$ad->user_id)->where('state',1)->get();
        $subCategory  = AdCategory::where('id',$ad->SubCategory_id)->first();
        $MC = AdCategory::where('id',$subCategory->MC_id)->first();
//         $categories = json_encode(array(
//                    'subCategory'=>AdCategory::where('id',$ad->AdCategory_id)->first(),
//                    'MC'=>AdCategory::where('id',$subCategory->MC_id)->first()
//                ));

        return view('Advertisements.show',compact('ad', 'otherAdsFormUser','MC','subCategory'));

    }

    public function filter($categoryId)
    {
        if($categoryId == 'NA'){
            $ads = Advertisements::where('subCategory',request()->subCategoryId)->where('state',1)->get();
            $mainCategory = AdCategory::where('id',request()->subCategoryId)->first();
            $subCategories = AdCategory::where('MC_id',$mainCategory->id)->get();

            return view('Advertisements.index',compact('ads','subCategories','mainCategory'));

        }else{

            $ads =  Advertisements::where('MainCategory_id',$categoryId)->get();
            $subCategories = AdCategory::where('MC_id',$categoryId)->get();
            return view('Advertisements.index',compact('ads','subCategories'));
        }
    }



    public function edit(Advertisements $advertisement)
    {
        if(Gate::allows('isOwner',$advertisement)){
            $user = Auth::user();
            return view('Advertisements.edit',compact('user', 'advertisement'));
        }

    }


    public function update(Request $request, Advertisements $advertisement)
    {
        $Ad = $advertisement->update($this->requestValidate());
        $this->storeImage($advertisement);
        return redirect('/advertisement/'.$advertisement->id);
    }

    public function approve(Advertisements $advertisement)
    {
        if($advertisement->state == 1 ){
            $advertisement->state = 0 ;
        }else{
            $advertisement->state = 1 ;
        }
        $advertisement->push();
        return redirect('/user');
    }

    public function destroy(Advertisements $advertisments)
    {
        //
    }

//    public function formOption(){
//        return view('Advertis')
//    }


}
