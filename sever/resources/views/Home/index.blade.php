@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4>Welcome To E-Commerce Laravel</h4>
                <h5>Find Everything What You Want @ ....</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="row">
                    <h6>Browser our top category</h6>
                    {{ $adCategories }}
                </div>
                <div class="row">
                    <div class="card" style="width: 18rem;">
                        <div class="bg-danger" style="height: 100px"></div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">

            </div>
        </div>
    </div>
@endsection
