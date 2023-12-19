@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Membership Requests</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Memberships Requests</li>
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

                            <!--<table id="basic-datatable" class="table dt-responsive nowrap">-->
                            <table class="table dt-responsive nowrap">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>City</th>
                                    <th>Status</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($memberships as $membership)
                                    <tr>
                                        <td>{{$membership->id}}</td>
                                        <td>{{$membership->name}}</td>
                                        <td>{{$membership->mobile}}</td>
                                        <td>{{$membership->email}}</td>
                                        <td>{{$membership->city}}</td>
                                        <td>
                                            <!--<button class="btn btn-success" onclick="myFunc({{$membership->id}}, 'accept')">Accept</button>
                                            <button class="btn btn-danger" onclick="myFunc({{$membership->id}}, 'reject')">Reject</button>-->
                                                <a href="{{ url('admin/membership/' . $membership->id) }}" class="btn btn-primary">Action</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="float-right">
                                {{ $memberships->withQueryString()->links("pagination::bootstrap-4") }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function myFunc(id, action){
            window.location.href = "{{url('admin/membership')}}" + '/' + id + '/' + action;
        }
    </script>
@endsection
