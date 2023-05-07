@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Doctors</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Doctors</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <p>
                                <a href="{{url('admin/doctor/create')}}" class="btn btnTheme">Add Doctor</a>
                            </p>

                            <!--<table id="basic-datatable" class="table dt-responsive nowrap">-->
                            <table class="table dt-responsive nowrap">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Picture</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Shown on Homepage</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($doctors as $doctor)
                                    <tr>
                                        <td>{{$doctor->id}}</td>
                                        <td><img src="{{asset(isset($doctor->doctorPicture->image_small) ? $doctor->doctorPicture->image_small : \App\Models\Picture::getDefaultImage()->image_small)}}"</td>
                                        <td>{{$doctor->doctor_name}}</td>
                                        <td>{{$doctor->doctor_designation}}</td>
                                        <td>@if($doctor->is_home == true)<span class="badge badge-success">YES</span> @else <span class="badge badge-danger">NO</span>@endif</td>
                                        <td>@if($doctor->status == true)<span class="badge badge-success">ACTIVE</span> @else <span class="badge badge-danger">INACTIVE</span>@endif</td>
                                        <td><a href="{{url('admin/doctor/' . $doctor->id)}}" class="btn btn-success">Action</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="float-right">
                                {{ $doctors->withQueryString()->links("pagination::bootstrap-4") }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
