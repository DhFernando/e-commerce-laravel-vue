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
                        <a href="/user/{{$user->id}}/edit" class="btn btn-primary btn-lg btn-block text-white btn-sm">Change Account Setting</a>
                    </div>
                    <div class="col-8 ">
                        <section id="tabs" class="project-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <nav>
                                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">My Advertisements [ {{ $user->advertisements()->get()->count() }} ]</a>
                                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Current Requests [ {{$request_ads->count()}} ]</a>
                                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">All Users</a>
                                                <a class="nav-item nav-link" id="nav-createAdManagePanel-tab" data-toggle="tab" href="#nav-createAdManagePanel" role="tab" aria-controls="nav-createAdManagePanel" aria-selected="false">Create Ad Manage Panel</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="d-flex mt-5 ">
                                                            @foreach($user->advertisements()->get() as $ad)
                                                                <div class="mr-5">
                                                                    <a href="/advertisement/{{$ad->id}}"><div style="height: 150px; width: 150px" class="bg-danger"></div></a>
                                                                    <div><strong><h4>{{$ad->brand}}</h4></strong></div>
                                                                    <div class="text-secondary">{{$ad->description}}</div>
                                                                    <div class="text-secondary">Rs {{$ad->price}} /=</div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="d-flex mt-5 ">
                                                            @foreach($request_ads as $ad)
                                                                <div class="mr-5">
                                                                    <a href="/advertisement/{{$ad->id}}"><div style="height: 150px; width: 150px" class="bg-danger"></div></a>
                                                                    <div><strong><h4>{{$ad->brand}}</h4></strong></div>
                                                                    <div class="text-secondary">{{$ad->description}}</div>
                                                                    <div class="text-secondary">Rs {{$ad->price}} /=</div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                <user_index></user_index>
                                            </div>
                                            <div class="tab-pane fade" id="nav-createAdManagePanel" role="tabpanel" aria-labelledby="nav-createAdManagePanel-tab">
                                                <div class="mt-3">
                                                    <create_ad_managing_panel></create_ad_managing_panel>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->

@endsection
