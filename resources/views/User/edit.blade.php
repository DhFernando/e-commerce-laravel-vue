@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="row">
                <div class="col-12">
                    <form action="/user/{{ $user->id }}" method="post" enctype="multipart/form-data">
                        @method('PATCH')

                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $user->name }}" placeholder="Item Name">
                        </div>
                        <div class="form-group">
                            <label for="">E-Mail</label>
                            <input type="text" class="form-control" name="email" value="{{ $user->email }}" placeholder="Description">
                        </div>
                        @csrf
                        <button type="submit" class="btn btn-primary btn-sm">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
