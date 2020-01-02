@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="row">
                <div class="col-12">
                    <form action="/advertisements/{{ $advertisement->id }}" method="post" enctype="multipart/form-data">
                        @method('PATCH')
                        @include('Advertisements.form');
                        @csrf
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



