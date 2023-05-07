@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">{{$package->package_name}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/packages')}}">Packages</a>
                                </li>
                                <li class="breadcrumb-item active">{{$package->package_name}}</li>
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

                            <form method="post" action="{{url('admin/package/update')}}">
                                @csrf
                                <input type="hidden" name="id" value="{{$package->id}}">

                                <div class="form-group">
                                    <label for="package_name">Package Name</label>
                                    @if ($errors->has('package_name'))
                                        <span class="text-danger">{{ $errors->first('package_name') }}</span>
                                    @endif
                                    <input type="text" id="package_name" name="package_name" class="form-control" placeholder="" value="{{$package->package_name}}">
                                </div>

                                <div class="form-group">
                                    <label for="package_price">Package Price</label>
                                    @if ($errors->has('package_price'))
                                        <span class="text-danger">{{ $errors->first('package_price') }}</span>
                                    @endif
                                    <input type="text" id="package_price" name="package_price" class="form-control" placeholder="" value="{{$package->package_price}}">
                                </div>

                                <div class="form-group">
                                    <label for="package_price_duration">Price Duration</label>
                                    @if ($errors->has('package_price_duration'))
                                        <span class="text-danger">{{ $errors->first('package_price_duration') }}</span>
                                    @endif
                                    <select id="package_price_duration" name="package_price_duration" class="form-control">
                                        <option value="0">Select</option>
                                        <option value="Day" @if($package->package_price_duration == 'Day') selected @endif>Day</option>
                                        <option value="Week" @if($package->package_price_duration == 'Week') selected @endif>Week</option>
                                        <option value="Month" @if($package->package_price_duration == 'Month') selected @endif>Month</option>
                                        <option value="Year" @if($package->package_price_duration == 'Year') selected @endif>Year</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="package_details">Details</label>
                                    @if ($errors->has('package_details'))
                                        <span class="text-danger">{{ $errors->first('package_details') }}</span>
                                    @endif
                                    <textarea id="package_details" name="package_details" class="form-control" rows="20">{{$package->package_details}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="package_summary">Summary</label>
                                    @if ($errors->has('package_summary'))
                                        <span class="text-danger">{{ $errors->first('package_summary') }}</span>
                                    @endif
                                    <textarea id="package_summary" name="package_summary" class="form-control" rows="20">{{$package->package_summary}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="num_days">Number of days</label>
                                    @if ($errors->has('num_days'))
                                        <span class="text-danger">{{ $errors->first('num_days') }}</span>
                                    @endif
                                    <input type="text" id="num_days" name="num_days" class="form-control" placeholder="" value="{{$package->num_days}}">
                                </div>

                                <div class="form-group">
                                    <label for="">Services (Select services associate with this package)</label>
                                    <div class="my-2">
                                        @foreach(\App\Models\Service::active()->select('id', 'service_name')->get() as $service)
                                            <input type="checkbox" name="services[]" id="{{$service->id}}" value="{{$service->id}}"> <label for="{{$service->id}}">{{$service->service_name}}</label>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    @if ($errors->has('status'))
                                        <span class="text-danger">{{ $errors->first('status') }}</span>
                                    @endif
                                    <select type="text" id="status" name="status" class="form-control">
                                        <option value="1" @if($package->status == true) selected @endif>Active</option>
                                        <option value="0" @if($package->status == false) selected @endif>Inactive</option>
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
