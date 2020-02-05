@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div>Name : {{$user->name}}</div>
                <div>Your Id : {{$user->id}}</div>
                <div>Your E-mail : {{$user->email}}</div>
                <p>your account created at {{ $user->created_at }}</p>
                <p>Total num of Advertisement form you : {{ $user_ads->count() }}</p>
                <ad_display></ad_display>
            </div>
            <div class="col-7">
                <div class="row">
                    <ad_req-and-personal_ads></ad_req-and-personal_ads>
                    <ad_display></ad_display>
                </div>
                <div class="row">
                    <div class="d-flex mt-5 ">
                        @foreach($user_ads as $ad)
                            <div class="mr-5">

                                <a href="/advertisement/{{$ad->id}}">
                                    <div style="height: 150px; width: 150px" class="bg-danger">
                                        @if($ad->state == 1)
                                            Approved
                                        @else
                                            Waiting For Approve
                                        @endif
                                    </div>
                                </a>
                                <div><strong><h4>{{$ad->itemName}}</h4></strong></div>
                                <div class="text-secondary">{{$ad->description}}</div>
                                <div class="text-secondary">Rs {{$ad->price}} /=</div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
