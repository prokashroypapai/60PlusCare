@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Trainings</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Trainings</li>
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
                                <a href="{{url('admin/training/create')}}" class="btn btnTheme">Add Training</a>
                            </p>

                            <!--<table id="basic-datatable" class="table dt-responsive nowrap">-->
                            <table class="table dt-responsive nowrap">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Picture</th>
                                    <th>Title</th>
                                    <th>Is Expired</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($trainings as $training)
                                    <tr>
                                        <td>{{$training->id}}</td>
                                        <td><img src="{{asset(isset($training->trainingPicture->image_small) ? $training->trainingPicture->image_small : \App\Models\Picture::getDefaultImage()->image_small)}}"/></td>
                                        <td>{{ $training->training_title }}</td>
                                        <td>@if($training->is_expired == true)<span class="badge badge-danger">YES</span> @else <span class="badge badge-success">NO</span>@endif</td>
                                        <td>@if($training->status == true)<span class="badge badge-success">ACTIVE</span> @else <span class="badge badge-danger">INACTIVE</span>@endif</td>
                                        <td><a href="{{url('admin/training/' . $training->id)}}" class="btn btn-success">Action</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="float-right">
                                {{ $trainings->withQueryString()->links("pagination::bootstrap-4") }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
