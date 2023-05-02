@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">{{$subscription->id}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/subscriptions')}}">Subscriptions</a>
                                </li>
                                <li class="breadcrumb-item active">{{$subscription->id}}</li>
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

                            <form method="post" action="{{url('admin/subscription/update')}}">
                                @csrf
                                <input type="hidden" name="id" value="{{$subscription->id}}">

                                <div class="form-group">
                                    <label for="user_id">Select Member</label>
                                    @if ($errors->has('user_id'))
                                        <span class="text-danger">{{ $errors->first('user_id') }}</span>
                                    @endif
                                    <select id="user_id" name="user_id" class="form-control">
                                        <option value="0">Select</option>
                                        @foreach(\App\Models\User::active()->select('id','name', 'mobile')->where('permission', \App\Models\User::PERMISSION_MEMBER)->get() as $user)
                                            <option value="{{$user->id}}" @if($subscription->user_id == $user->id) selected @endif>{{$user->name . ' => ' . $user->mobile}}</option>
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
                                            <option value="{{$package->id}}" @if($subscription->package_id == $package->id) selected @endif>{{$package->package_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="start_date">Start Date</label>
                                    <input type="text" id="start_date" name="start_date" class="form-control" value="{{$subscription->start_date}}">
                                </div>

                                <div class="form-group">
                                    <label for="is_expired">Is expired</label>
                                    @if ($errors->has('is_expired'))
                                        <span class="text-danger">{{ $errors->first('is_expired') }}</span>
                                    @endif
                                    <select id="is_expired" name="is_expired" class="form-control">
                                        <option value="1" @if($subscription->is_expired == true) selected @endif>YES</option>
                                        <option value="0" @if($subscription->is_expired == false) selected @endif>NO</option>
                                    </select>
                                </div>

                                <div class="float-right text-danger">
                                    <a href="{{url('admin/subscription/' . $subscription->id . '/delete')}}">Delete Subscription</a>
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
