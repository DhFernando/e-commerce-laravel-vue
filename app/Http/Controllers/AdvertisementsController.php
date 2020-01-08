<?php

namespace App\Http\Controllers;

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
        'itemName'=>'required | ',
        'description'=>'required | min:3',
        'price'=>'required',
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

        User::find(Auth::user()->id)->advertisements()->create(array_merge(
            $this->requestValidate(),
            ['state'=>0]
        ));

        return redirect('/');
    }

    public function show($advertisment)
    {
        $ad = Advertisements::find($advertisment);
        return view('Advertisements.show',compact('ad'));
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
        $advertisement->update($this->requestValidate());
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


}
