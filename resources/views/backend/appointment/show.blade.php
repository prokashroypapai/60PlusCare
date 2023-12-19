@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">{{$appointment->id}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('appointments')}}">Appointments</a>
                                </li>
                                <li class="breadcrumb-item active">{{$appointment->id}}</li>
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
                                Service Type: <strong>{{$appointment->service_type}}</strong>
                            </div>
                            <div class="form-group">
                                Name: <strong>{{$appointment->name}}</strong>
                            </div>
                            <div class="form-group">
                                Email: <strong>{{$appointment->email}}</strong>
                            </div>
                            <div class="form-group">
                                Mobile: <a href="tel:{{$appointment->mobile}}" class="btn btn-success">{{$appointment->mobile}}</a>
                            </div>
                            <div class="form-group">
                                Message: <strong>{{$appointment->message}}</strong>
                            </div>
                            <div class="form-group">
                                Date: <strong>{{$appointment->created_at->format('d M Y')}}</strong>
                            </div>

                            <button class="btn btn-info waves-effect waves-light" onclick='window.location.href="{{url('admin/appointments')}}"'>Back</button>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
