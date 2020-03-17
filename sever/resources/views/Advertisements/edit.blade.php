@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="/advertisements/{{ $advertisement->id }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @include('Advertisements.Form.form');
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection



