@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row grey  lighten-4 p-5 rounded ">
            <div class="col-1">

            </div>
            <div class="col-6 border rounded mr-5 p-5 bg-white ">
                <div class="row">
                    <div class="col-12">
                        {{ $MC->description }} / {{ $subCategory->description }}
                    </div>
                </div>
                <div  class="view overlay zoom">
                    <img src="{{ asset('storage/'.$ad->image) }}" class="img-fluid " style=" width: 470px">
                </div>
                <div>
                    <strong><h4>{{$ad->itemName}}</h4></strong>
                    <a href="/advertisement/{{$ad->id}}/approve">
                       @if($ad->state == 1)
                           UnApprove
                       @else
                           Approve
                       @endif
                    </a>
                    @can('isOwner',$ad)
                        <a href="/advertisement/{{$ad->id}}/edit">
                            edit
                        </a>
                    @endcan
                </div>
                <div class="red-text"><h4>{{ $ad->main_name }}</h4></div>
                <div class="text-secondary">{{$ad->description}}</div>
                <div class="text-secondary">Rs {{$ad->price}} /=</div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2  ">
                                <div class="">
                                    <img src="{{ asset('images/phone-call.png') }}" class="" style="height: 40px ; width: 40px" alt="">
                                </div>
                            </div>
                            <div class="col-9 mt-2">{{  $ad->user->email  }}</div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2 ">
                                <div class="">
                                    <img src="{{ asset('images/arroba.png') }}" class="" style="height: 40px ; width: 40px" alt="">
                                </div>
                            </div>
                            <div class="col-9 mt-2">{{  $ad->user->email  }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div><h4>Owner Details</h4></div>
                <hr>
                <div><strong><h4>Owner :{{$ad->user->name}}</h4></strong></div>
                <div class="text-secondary">Contact : {{$ad->user->email}}</div>
            </div>
        </div>
        <div class="row mt-5 ">
            <div class="col-12 grey lighten-4 rounded border border-white p-5">
                <div class="row">
                    <h5>More Ads from <span class="text-primary">{{ $ad->user->name }}</span></h5>
                    <hr>
                </div>
                <div class="row">
                    <div class="d-flex flex-wrap mt-4 ">
                        @foreach($otherAdsFormUser as $ad)
                            <div class="mr-5 border border-warning rounded p-3  bg-light shadow"  style=" width: 185px">
                                <a href="/advertisement/{{$ad->id}}">
                                    <div class="">
                                        <img src="{{ asset('storage/'.$ad->image) }}" style="height: 150px; width: 150px">
                                    </div>
                                </a>
                                <hr>
                                <div><strong><h5>{{$ad->main_name}}</h5></strong></div>
                                <div><p class="">Form : {{$ad->location}}</p></div>
                                <div class="text-success">Rs {{$ad->price}} /=</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
