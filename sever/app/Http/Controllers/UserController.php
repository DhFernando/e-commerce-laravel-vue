<?php

namespace App\Http\Controllers;

use App\Advertisements;
use App\Permission;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{


    private function requestValidate(){
        return tap(request()->validate([
            'name'=>'required',
            'email'=>'required'
        ]),function (){
            if(request()->hasFile('image')){
                request()->validate([
                    'image'=>'file|image|max:5000',
                ]);
            }
        }
        );
    }

    private function permissionValidation(){
        return tap(request()->validate([
           'userUpdate'=>'',
           'userSetPermission'=>'',
           'userDelete'=>'',
           'userMakeAdmin'=>'',
           'userSetBlock'=>'',
           'advertisementApprove'=>'',
           'advertisementDelete'=>'',
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

        if(Auth::check()){
            $user = Auth::user();
            $user_ads = User::find($user->id)->advertisements;
            $request_ads = Advertisements::where('state',0)->get();
            return view('User.index',compact('user','user_ads','request_ads' ));
        }else{
            return redirect('/login');
        }

    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        //
    }

    public function storeUserPermission(){
        //
    }


    public function show(User $user)
    {
        $userAds = Advertisements::where('user_id',$user->id)->get();
        return view('User.show',compact('user' , 'userAds'));
    }


    public function edit(User $user)
    {
        if(Gate::allows('isOwnerAccount',$user)){
            return view('User.edit',compact('user'));
        }else{
            return $user->name.' you do not have access to this';
        }
    }


    public function update(Request $request, User $user)
    {
        $user->update($this->requestValidate());
        return redirect("/user/".$user->id);
    }


    public function destroy(User $user)
    {
        //
    }

    public function getAllUsers(){
        return User::all();
    }

    public function s_user(User $user){  // s_user => selected user
        return [
                'user'=>$user,
                'userAd'=>$user->advertisements()->get(),
                'userPermission'=>$user->permission()->first()
        ];
    }

}
