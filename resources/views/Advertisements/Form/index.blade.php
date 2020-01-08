@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">


                    <button type="button" class="btn btn-sm ml-5 btn-primary" data-toggle="modal" data-target="#examp">
                        Edit
                    </button>
                </div>

                <div class="row">
                    <div class="col-12">
                        <form action="/advertisements/store" method="post" enctype="multipart/form-data">

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
