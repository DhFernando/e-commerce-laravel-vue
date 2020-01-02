@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <div class="bg-danger m-5 rounded-circle border border-dark" style="height: 200px;" ></div>
                        <div>Name : {{$user->name}}</div>
                        <div>Your Id : {{$user->id}}</div>
                        <div>Your E-mail : {{$user->email}}</div>
                        <p>your account created at {{ $user->created_at }}</p>
                        <p>Total num of Advertisement form you : {{ $user_ads->count() }}</p>
                        <a class="btn btn-primary btn-lg btn-block text-white btn-sm">Change Account Setting</a>
                    </div>
                    <div class="col-7 ">
                        <div class="row p-2">
                            <user_option></user_option>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
