@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <h4>Welcome To E-Commerce Laravel</h4>
                        <h5>Find Everything What You Want @ ....</h5>
                            <span class="float-right ">
                            Showing Results
                                <span class="text-primary"> [ {{ $ads->count() }} ]</span>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                       <div class="d-flex mt-5 ">
                           @foreach($ads as $ad)
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
        </div>
    </div>
    <script>

    </script>
@endsection

