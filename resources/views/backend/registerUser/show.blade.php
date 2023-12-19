@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">{{$user->name}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/registeredUsers')}}">Registered Users</a>
                                </li>
                                <li class="breadcrumb-item active">{{$user->name}}</li>
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

                            <form method="post" action="{{url('admin/registeredUser/update')}}">
                                @csrf
                                <input type="hidden" name="id" value="{{$user->id}}">

                                <div class="form-group">
                                    <label for="registration_no">Registration No</label>
                                    @if ($errors->has('registration_no'))
                                        <span class="text-danger">{{ $errors->first('registration_no') }}</span>
                                    @endif
                                    <input type="text" id="registration_no" name="registration_no" class="form-control" value="{{$user->registration_no}}" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" value="{{$user->name}}">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" value="{{$user->email}}">
                                </div>

                                <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    @if ($errors->has('mobile'))
                                        <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                    @endif
                                    <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Enter Mobile" value="{{$user->mobile}}">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                    <input type="password" id="password" name="password" class="form-control">
                                    <p>Leave blank if no need to update password</p>
                                </div>

                                <!--<div class="form-group">
                                    <label for="permission">Permission</label>
                                    @if ($errors->has('permission'))
                                        <span class="text-danger">{{ $errors->first('permission') }}</span>
                                    @endif
                                    <select type="text" id="permission" name="permission" class="form-control">
                                        <option value="{{\App\Models\User::PERMISSION_ADMIN}}" @if($user->permission == \App\Models\User::PERMISSION_ADMIN) selected @endif>ADMIN</option>
                                        <option value="{{\App\Models\User::PERMISSION_MANAGER}}" @if($user->permission == \App\Models\User::PERMISSION_MANAGER) selected @endif>MANAGER</option>
                                        <option value="{{\App\Models\User::PERMISSION_MEMBER}}" @if($user->permission == \App\Models\User::PERMISSION_MEMBER) selected @endif>MEMBER</option>
                                    </select>
                                </div>-->

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    @if ($errors->has('status'))
                                        <span class="text-danger">{{ $errors->first('status') }}</span>
                                    @endif
                                    <select type="text" id="status" name="status" class="form-control">
                                        <option value="{{\App\Models\User::STATUS_ACTIVE}}" @if($user->status == \App\Models\User::STATUS_ACTIVE) selected @endif>Active</option>
                                        <option value="{{\App\Models\User::STATUS_INACTIVE}}" @if($user->status == \App\Models\User::STATUS_INACTIVE) selected @endif>Inactive</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary waves-effect waves-light" onclick="return myFunc();">Save</button>

                            </form>
                            <span class="float-right"><a href="{{ url('admin/registeredUser/' . $user->id . '/delete') }}" class="text-danger">Delete</a></span>
                        </div>
                    </div>
                </div>

                <script>
                    function myFunc(){
                        var status = document.getElementById('status').value;
                        if(status === '0'){
                            return confirm('Status inactive leads to inactive all members under this user. Are you sure?');
                        }
                    }
                </script>

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">

                            <div class="col-12 pb-5">
                                <h5>Registered Members ({{count($user->userMembers)}})
                                    <span class="float-right">
                                            <button class="btn btn-primary" onclick='window.location.href="{{ url('admin/member/create?id=' . $user->registration_no) }}"'>Add Member</button>
                                        </span>
                                </h5>
                            </div>
                            <hr/>

                            @if(count($user->userMembers) > 0)

                            @foreach($user->userMembers as $member)
                                <a href="{{ url('admin/member/' . $member->id) }}">
                                    <div class="col-12 d-flex mb-4 border-bottom">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                                            </svg>
                                        </div>
                                        <div class="col-8">
                                            <h5 class="text-success">{{ $member->registration_no }}</h5>
                                            <h6>{{ $member->member_name }}</h6>
                                            <p><strong>{{ $member->member_mobile }}</strong></p>
                                        </div>
                                        <div class="col-4">
                                            <div class="text-right">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="44" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                @endforeach



                                @else
                                <h2>You have no Member</h2>
                            @endif

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Mask Js-->
    <script src="{{asset('backend/plugins/jquery-mask/jquery.mask.min.js')}}"></script>
    <!-- Mask Custom Js-->
    <script src="{{asset('backend/pages/mask-demo.js')}}"></script>

    <script>
        $('#mobile').focus(function(){
            if($(this).val().substring(0,3) !== '+91'){
                $(this).val("+91" + $(this).val());
            }
        });
    </script>
@endsection
