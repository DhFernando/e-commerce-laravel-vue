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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function storeUserPermission(){
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $userAds = Advertisements::where('user_id',$user->id)->get();
        return view('User.show',compact('user' , 'userAds'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(User $user)
    {
        if(Gate::allows('isOwnerAccount',$user)){
            return view('User.edit',compact('user'));
        }else{
            return $user->name.' you do not have access to this';
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update($this->requestValidate());
        return redirect("/user/".$user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function getAllUsers(){
        return User::all();
    }

    public function s_user(User $user){
        return [
                'user'=>$user,
                'userAd'=>$user->advertisements()->get(),
                'userPermission'=>$user->permission()->first()
        ];
    }

    public function setPermission($user_id){
//        dd($user_id);
        Permission::create(
            array_merge(
                    [
                'userUpdate'=>'0',
                'userSetPermission'=>'0',
                'userDelete'=>'0',
                'userMakeAdmin'=>'0',
                'userSetBlock'=>'0',
                'advertisementApprove'=>'0',
                'advertisementDelete'=>'0',
            ],array_merge(
                    $this->permissionValidation(),
                    [
                        'user_id'=>$user_id, // the person who have this permission
                        'setupUserId'=>Auth::user()->id , // the person who set permission
                    ]
                )
            )
        );

        return redirect("/user/");
    }

    public function permissionUpdate(User $user){
        $user->permission()->first()->update(
            array_merge(
                $this->permissionValidation(),
                [ 'setupUserId'=>Auth::user()->id ]
            )
        );

        return redirect("/user/");

    }
}
