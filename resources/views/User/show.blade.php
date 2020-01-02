@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="bg-danger m-5 rounded-circle border border-dark" style="height: 200px;" ></div>
                <div>Name : {{$user->name}}</div>
                <div>Your Id : {{$user->id}}</div>
                <div>Your E-mail : {{$user->email}}</div>
                <p>your account created at {{ $user->created_at }}</p>
                <p>Total num of Advertisement form you : </p>
                <a href="/user/{{$user->id}}" class="btn btn-primary btn-lg btn-block text-white btn-sm">Change Account Setting</a>
            </div>
            <div class="col-8">
                <div class="row ">
                    Total Num Of Ads <span class="text-primary ml-1">{{ $userAds->count() }}</span>
                </div>
                <div class="row ">
                    <div class="col-12 d-flex mt-5">
                        @foreach($userAds as $Ad)
                            <div class="mr-3 " >
                                <a href="/advertisement/{{$Ad->id}} "><div style="height: 150px; width: 150px" class="bg-danger"></div></a>
                                <div><strong><h4>{{$Ad->itemName}}</h4></strong></div>
                                <div class="text-secondary">{{$Ad->description}}</div>
                                <div class="text-secondary">Rs {{$Ad->price}} /=</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </div>
@endsection
