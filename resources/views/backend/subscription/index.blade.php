@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Subscriptions</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Subscriptions</li>
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
                                <a href="{{url('admin/subscription/create')}}" class="btn btnTheme">Add Subscription</a>
                            </p>

                            <!--<table id="basic-datatable" class="table dt-responsive nowrap">-->
                            <table class="table dt-responsive nowrap">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Member</th>
                                    <th>Package</th>
                                    <th>No of Month</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($subscriptions as $subscription)
                                    <tr>
                                        <td>{{$subscription->id}}</td>
                                        <td><a href="{{ url('admin/member/' . $subscription->member_id) }}">{{$subscription->subscriptionUser->name}}</a></td>
                                        <td>{{$subscription->subscriptionPackage->package_name}}</td>
                                        <td>{{$subscription->num_months}}</td>
                                        <td>@if($subscription->is_expired == false)<span class="badge badge-success">ACTIVE</span> @else <span class="badge badge-danger">INACTIVE</span>@endif</td>
                                        <td><a href="{{url('admin/subscription/' . $subscription->id)}}" class="btn btn-success">Action</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="float-right">
                                {{ $subscriptions->withQueryString()->links("pagination::bootstrap-4") }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
