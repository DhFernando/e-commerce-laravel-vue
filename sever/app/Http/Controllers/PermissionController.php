<?php

namespace App\Http\Controllers;

use App\Permission;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermissionController extends Controller
{
    private function requestValidate(){
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
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Permission $permission)
    {
        //
    }

    public function edit(Permission $permission)
    {

    }


    public function update(User $user)
    {
        $user->permission()->first()->update(array_merge(
            [
                'userUpdate'=>'0',
                'userSetPermission'=>'0',
                'userDelete'=>'0',
                'userMakeAdmin'=>'0',
                'userSetBlock'=>'0',
                'advertisementApprove'=>'0',
                'advertisementDelete'=>'0',
            ],
            array_merge(
                $this->requestValidate(),
                [ 'setupUserId'=>Auth::user()->id ]
            )
            )
        );

        return redirect("/user/");
    }


    public function destroy(Permission $permission)
    {
        //
    }
}
