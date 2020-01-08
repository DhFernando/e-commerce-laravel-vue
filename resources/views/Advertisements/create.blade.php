@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <h4>Hey {{$user->name}}</h4>
                    <h4>Create Your Advertisement here ..... Its free !!!</h4>
                    <button class=" btn btn-sm btn-primary pt-0 pb-0 ml-5">Edit</button>
                </div>

                <div class="row">
                    <div class="col-12">
                        <form action="/advertisements/store" method="post" enctype="multipart/form-data">
                            @include('Advertisements.form');
                            @csrf
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

            {{--.............Edit Model..............--}}
            </div>
        </div>
    </div>
@endsection



