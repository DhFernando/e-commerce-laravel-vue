@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <h4>Hey {{$user->name}}</h4>
                    <h4>Create Your Advertisement here ..... Its free !!!</h4>
                    <a href="/advertisements/formOption" class="btn btn-sm ml-5 btn-primary" data-toggle="modal" data-target="#examp">
                        Edit
                    </a>
                </div>

                <div class="row">
                    <div class="col-12">
                        <form action="/advertisements/store" method="post" enctype="multipart/form-data">
                            @include('Advertisements.form')
                            @csrf
                            <createform_index></createform_index>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



