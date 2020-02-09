@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4>Welcome To E-Commerce Laravel</h4>
                <h5>Find Everything What You Want @ ....</h5>
            </div>
        </div>
        <div class="row mt-5 border-bottom pb-5">
            <div class="col-6 border-right">
                <div class="row">
                    <h6><b>Browser our top category</b></h6>
                </div>
                <div class="row mt-3">
                    <div class="card" >
                        <div class="bg-danger" style="height: 100px"></div>
                        <ol class="card-body d-flex flex-wrap ml-5 ">
                            @foreach($adCategories as $Category)
                                <span>
                                    <div class="bg-danger mb-3" style="width: 50px; height: 50px">

                                    </div>
                                    <li class="mr-5"><a href="/advertisements/{{ $Category->id }}/filter">{{ $Category->description }}</a></li>
                                </span>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <div class="bg-danger" style="height: 300px">

                        </div>
                    </div>
                    <div class="col-6">
                        Districts
                        k
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <div>
                            <h4>All Advertisement</h4>
                        </div>
                        <div class="float-right">
                            Showing Results
                            <span class="text-primary"> [ {{ $allAds->count() }} ]</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex mt-5 ">
                            @foreach($allAds as $ad)
                                <div class="mr-5">
                                    <a href="/advertisement/{{$ad->id}}">
                                        <div class="">
                                            <img src="{{ asset('storage/'.$ad->image) }}" style="height: 150px; width: 150px">
                                        </div>
                                    </a>
                                    <div><strong><h4>{{$ad->main_name}}</h4></strong></div>
                                    <div class="text-secondary">Rs {{$ad->price}} /=</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
