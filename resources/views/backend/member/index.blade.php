@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Members</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Members</li>
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

                            <div class="mb-3">
                                <a href="{{url('admin/member/create')}}" class="btn btnTheme">Add Member</a>
                            </div>

                            <div class="bg-transparent py-2" id="filterIcon">
                                <div class="col-12 text-right">
                                    <h6 class="filterBtn">
                                        Filter
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
                                            <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z"/>
                                        </svg>
                                    </h6>
                                </div>
                            </div>

                            <div class="bg-secondary py-2" id="filterMenu" style="display: none">
                                <form action="" method="get" class="d-flex">
                                    <div class="col-md-8">
                                        <label for="mName" class="text-white">Type Name / Registration No:</label>
                                        <input type="text" name="mName" id="mName" class="form-control" value="{{ app('request')->input('mName') }}" placeholder="Type Member name, Registration No">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="submit" class="btn btn-success" value="View Members">
                                    </div>
                                    <div class="col-1" id="closeMenu">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                                        </svg>
                                    </div>
                                </form>
                            </div>

                            <script>
                                $(document).ready(function (){
                                    $('#filterIcon').show();
                                    $('#filterMenu').hide();

                                    $('.filterBtn').click(function (){
                                        $('#filterMenu').show();
                                        $('#filterIcon').hide();
                                    });

                                    var pI = "{{app('request')->input('mName')}}";

                                    if(pI !== ""){
                                        $('#filterIcon').hide();
                                        $('#filterMenu').show();
                                    }

                                    $('#closeMenu').click(function (){
                                        if(pI === ""){
                                            $('#filterMenu').hide();
                                            $('#filterIcon').show();
                                        }
                                        else {
                                            window.location = '/admin/members';
                                        }
                                    });
                                });
                            </script>

                            <!--<table id="basic-datatable" class="table dt-responsive nowrap">-->
                            <table class="table dt-responsive nowrap">
                                <thead>
                                <tr>
                                    <th>Registration No</th>
                                    <th>Name</th>
                                    <th>Parent User</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($members as $member)
                                    <tr>
                                        <td>{{$member->registration_no}}</td>
                                        <td>{{$member->member_name}}</td>
                                        <td>@isset($member->memberParentUser->name)<a href="{{ url('admin/registeredUser/' . $member->user_id) }}">{{ $member->memberParentUser->name }}</a>@endisset</td>
                                        <td>@if($member->status == true)<span class="badge badge-success">ACTIVE</span> @else <span class="badge badge-danger">INACTIVE</span>@endif</td>
                                        <td><a href="{{url('admin/member/' . $member->id)}}" class="btn btn-success">Action</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="float-right">
                                {{ $members->withQueryString()->links("pagination::bootstrap-4") }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
