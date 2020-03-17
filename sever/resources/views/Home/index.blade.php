@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <h4 class="font-weight-bold">Welcome To E-Commerce <Laravel></Laravel></h4>
                <h5 class="font-weight-bold">Find Everything What You Want @ ....</h5>
            </div>
        </div>
        <div class="row mt-5 border-bottom pb-5">
            <div class="col-6 ">
                <div class="row">
                    <h6><b>Browser our top category</b></h6>
                </div>
                <div class="row mt-3">
                    <div class="col-11">
                        <div class="card" >
                            <div class="bg-danger" style="height: 100px"></div>
                            <ol class="card-body d-flex flex-wrap ml-5 ">
                                @foreach($adCategories as $Category)
                                    <span>
                                    <div class="bg-danger shadow mb-3" style="width: 50px; height: 50px">

                                    </div>
                                    <li class="mr-5"><a href="/advertisements/{{ $Category->id }}/filter">{{ $Category->description }}</a></li>
                                </span>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <!--Carousel Wrapper-->
                    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->
                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="view">
                                    <img class="d-block w-100" src="{{ asset('images/home/slides/computers.jpg') }}"
                                         alt="First slide">
                                    <div class="mask rgba-black-light"></div>
                                </div>
                                <div class="carousel-caption">
                                    <h3 class="h3-responsive">Electronics</h3>
                                    <p>All Electronics available here </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <!--Mask color-->
                                <div class="view">
                                    <img class="d-block w-100" src="{{ asset('images/home/slides/properties.jpg') }}"
                                         alt="Second slide">
                                    <div class="mask rgba-black-strong"></div>
                                </div>
                                <div class="carousel-caption">
                                    <h3 class="h3-responsive">Properties</h3>
                                    <p>All properties that you want</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <!--Mask color-->
                                <div class="view">
                                    <img class="d-block w-100" src="{{ asset('images/home/slides/Animals.jpg') }}"
                                         alt="Third slide">
                                    <div class="mask rgba-black-slight"></div>
                                </div>
                                <div class="carousel-caption">
                                    <h3 class="h3-responsive">Animals</h3>
                                    <p>All pets available here</p>
                                </div>
                            </div>
                        </div>
                        <!--/.Slides-->
                        <!--Controls-->
                        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                    </div>
                    <!--/.Carousel Wrapper-->
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
    </div>
@endsection
