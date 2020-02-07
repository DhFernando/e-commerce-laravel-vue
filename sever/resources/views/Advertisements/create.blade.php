@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <h4>Hey {{$user->name}} Create Your Advertisement here ..... Its free !!!</h4>
                    <button type="button" class=" ml-3 btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Edit
                    </button>
                </div>

                <div class="row">
                    <div class="col-12">
                        <form action="/advertisements/store" method="post" enctype="multipart/form-data">
                            @include('Advertisements.Form.form')
                            @csrf

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Form Customize</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form_customize></form_customize>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



