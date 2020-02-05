@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-6">
                <div style="height: 250px; width: 250px" class="bg-danger"></div>
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

    </div>
@endsection
