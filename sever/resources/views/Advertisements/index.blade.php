@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <h4>Welcome To E-Commerce Laravel</h4>
                        <h5>Find Everything What You Want @ ....</h5>
                        <span class="float-left ">
                            <nav class="navbar navbar-light bg-light justify-content-between">
                              <form class="form-inline" action="/advertisements/NA/filter" method="post">
                                <select class="form-control mr-sm-2" name="subCategoryId">
                                  @foreach($subCategories as $subCategory)
                                    <option value="{{$subCategory->id}}" >{{ $subCategory->description }}</option>
                                  @endforeach
                                </select>
                                <select class="form-control mr-sm-2" name="location">
                                    <option>Colombo</option>
                                    <option>Gampaha</option>
                                </select>
                                  @csrf
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
                              </form>
                            </nav>
                        </span>
                        <span class="float-right ">
                            Showing Results
                            <span class="text-primary"> [ {{ $ads->count() }} ]</span>
                        </span>
                    </div>
                </div>
                <div class="row border rounded">
                    <div class="col-12 ">
                       <div class="d-flex mt-5 mb-5">
                           @foreach($ads as $ad)
                               <div class="mr-5 border rounded p-3">
                                   <a href="/advertisement/{{$ad->id}}">
                                       <div class="">
                                           <img src="{{ asset('storage/'.$ad->image) }}" style="height: 150px; width: 150px">
                                       </div>
                                   </a>
                                   <div class="mt-3">
                                       <div><strong><h4>{{$ad->main_name}}</h4></strong></div>
                                       <div class="text-secondary">Rs {{$ad->price}} /=</div>
                                   </div>
                               </div>
                           @endforeach
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

    </script>
@endsection

