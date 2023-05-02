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
                                    <a href="{{url('admin/staffs')}}">Staffs</a>
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

                            <form method="post" action="{{url('admin/staff/update')}}">
                                @csrf
                                <input type="hidden" name="id" value="{{$user->id}}">

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

                                <div class="form-group">
                                    <label for="permission">Permission</label>
                                    @if ($errors->has('permission'))
                                        <span class="text-danger">{{ $errors->first('permission') }}</span>
                                    @endif
                                    <select type="text" id="permission" name="permission" class="form-control">
                                        <option value="{{\App\Models\User::PERMISSION_ADMIN}}" @if($user->permission == \App\Models\User::PERMISSION_ADMIN) selected @endif>ADMIN</option>
                                        <option value="{{\App\Models\User::PERMISSION_MANAGER}}" @if($user->permission == \App\Models\User::PERMISSION_MANAGER) selected @endif>MANAGER</option>
                                        <option value="{{\App\Models\User::PERMISSION_MEMBER}}" @if($user->permission == \App\Models\User::PERMISSION_MEMBER) selected @endif>MEMBER</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
