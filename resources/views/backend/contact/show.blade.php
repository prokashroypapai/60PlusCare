@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">{{$contact->name}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('contacts')}}">Contacts</a>
                                </li>
                                <li class="breadcrumb-item active">{{$contact->name}}</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                Name: <strong>{{$contact->name}}</strong>
                            </div>
                            <div class="form-group">
                                Email: <strong>{{$contact->email}}</strong>
                            </div>
                            <div class="form-group">
                                Mobile: <a href="tel:{{$contact->mobile}}" class="btn btn-success">{{$contact->mobile}}</a>
                            </div>
                            <div class="form-group">
                                Description: <strong>{{$contact->description}}</strong>
                            </div>
                            <div class="form-group">
                                Date: <strong>{{$contact->created_at->format('d M Y')}}</strong>
                            </div>

                            <button class="btn btn-info waves-effect waves-light" onclick='window.location.href="{{url('admin/contacts')}}"'>Back</button>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
