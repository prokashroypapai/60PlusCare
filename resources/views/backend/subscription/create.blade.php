@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Create Subscription</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/subscriptions')}}">Subscriptions</a>
                                </li>
                                <li class="breadcrumb-item active">Create Subscription</li>
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

                            <form method="post" action="{{url('admin/subscription/store')}}">
                                @csrf

                                <div class="form-group">
                                    <label for="user_id">Select Member</label>
                                    @if ($errors->has('user_id'))
                                        <span class="text-danger">{{ $errors->first('user_id') }}</span>
                                    @endif
                                    <select id="user_id" name="user_id" class="form-control">
                                        <option value="0">Select</option>
                                        @foreach(\App\Models\User::active()->select('id','name', 'mobile')->where('permission', \App\Models\User::PERMISSION_MEMBER)->get() as $user)
                                            <option value="{{$user->id}}">{{$user->name . ' => ' . $user->mobile}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="package_id">Select Package</label>
                                    @if ($errors->has('package_id'))
                                        <span class="text-danger">{{ $errors->first('package_id') }}</span>
                                    @endif
                                    <select id="package_id" name="package_id" class="form-control">
                                        <option value="0">Select</option>
                                        @foreach(\App\Models\Package::active()->select('id','package_name')->get() as $package)
                                            <option value="{{$package->id}}">{{$package->package_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!--<div class="form-group">
                                    <label for="start_date">Start Date</label>
                                    @if ($errors->has('start_date'))
                                        <span class="text-danger">{{ $errors->first('start_date') }}</span>
                                    @endif
                                    <input type="text" id="start_date" name="start_date" class="form-control" placeholder="" value="{{old('start_date')}}">
                                </div>-->

                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
