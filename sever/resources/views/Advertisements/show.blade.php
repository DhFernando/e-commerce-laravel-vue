@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-6">
                <div  class="">
                    <img src="{{ asset('storage/'.$ad->image) }}" style=" width: 350px">
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
                <div class=""><h4>{{ $ad->main_name }}</h4></div>
                <div class="text-secondary">Rs {{$ad->price}} /=</div>
                <div class="text-secondary">{{$ad->description}}</div>
            </div>
            <div class="col-3">
                <div><h4>Owner Details</h4></div>
                <hr>
                <div><strong><h4>Owner :{{$ad->user->name}}</h4></strong></div>
                <div class="text-secondary">Contact : {{$ad->user->email}}</div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-3">

            </div>
            <div class="col-9 rounded border p-5">
                <div class="row">
                    <h5>More Ads from <span class="text-primary">{{ $ad->user->name }}</span></h5>
                    <hr>
                </div>
                <div class="row">
                    <div class="d-flex flex-wrap mt-4 ">
                        @foreach($otherAdsFormUser as $ad)
                            <div class="mr-5">
                                <a href="/advertisement/{{$ad->id}}">
                                    <div class="">
                                        <img src="{{ asset('storage/'.$ad->image) }}" style="height: 150px; width: 150px">
                                    </div>
                                </a>
                                <div><strong><h4>{{$ad->main_name}}</h4></strong></div>
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
