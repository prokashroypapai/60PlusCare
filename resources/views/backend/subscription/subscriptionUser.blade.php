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
                                    <a href="{{url('admin/subscriptions')}}">Subscriptions</a>
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
                            <h4>Add Subscription</h4>
                            <form method="post" action="{{url('admin/subscription/store')}}">
                                @csrf
                                <input type="hidden" name="user_id" value="{{$user->id}}">

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


                                <button type="submit" class="btn btn-primary waves-effect waves-light">Add Subscription</button>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4>All Subscriptions</h4>

                            <table class="table dt-responsive nowrap">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Package</th>
                                    <th>Start Date</th>
                                    <th>Num of days</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($user->userSubscriptions as $subscription)
                                    <tr>
                                        <td>{{$subscription->id}}</td>
                                        <td>{{$subscription->subscriptionPackage->package_name}}</td>
                                        <td>{{$subscription->start_date}}</td>
                                        <td>{{$subscription->num_of_days}}</td>
                                        <td>{{$subscription->end_date}}</td>
                                        <td>@if($subscription->is_expired == false)<span class="badge badge-success">ACTIVE</span> @else <span class="badge badge-danger">INACTIVE</span>@endif</td>
                                        <td><a href="{{url('admin/subscription/' . $subscription->id)}}" class="btn btn-success">Action</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
