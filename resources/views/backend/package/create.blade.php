@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Create Package</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/packages')}}">Packages</a>
                                </li>
                                <li class="breadcrumb-item active">Create Package</li>
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

                            <form method="post" action="{{url('admin/package/store')}}">
                                @csrf

                                <div class="form-group">
                                    <label for="package_name">Package Name</label>
                                    @if ($errors->has('package_name'))
                                        <span class="text-danger">{{ $errors->first('package_name') }}</span>
                                    @endif
                                    <input type="text" id="package_name" name="package_name" class="form-control" placeholder="" value="{{old('package_name')}}">
                                </div>

                                <div class="form-group">
                                    <label for="package_price">Package Price</label>
                                    @if ($errors->has('package_price'))
                                        <span class="text-danger">{{ $errors->first('package_price') }}</span>
                                    @endif
                                    <input type="text" id="package_price" name="package_price" class="form-control" placeholder="" value="{{old('package_price')}}">
                                </div>

                                <div class="form-group">
                                    <label for="package_price_duration">Price Duration</label>
                                    @if ($errors->has('package_price_duration'))
                                        <span class="text-danger">{{ $errors->first('package_price_duration') }}</span>
                                    @endif
                                    <select id="package_price_duration" name="package_price_duration" class="form-control">
                                        <option value="0">Select</option>
                                        <option value="Day" @if(old('package_price_duration') == 'Day') selected @endif>Day</option>
                                        <option value="Week" @if(old('package_price_duration') == 'Week') selected @endif>Week</option>
                                        <option value="Month" @if(old('package_price_duration') == 'Month') selected @endif>Month</option>
                                        <option value="Year" @if(old('package_price_duration') == 'Year') selected @endif>Year</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="package_details">Details</label>
                                    @if ($errors->has('package_details'))
                                        <span class="text-danger">{{ $errors->first('package_details') }}</span>
                                    @endif
                                    <textarea id="package_details" name="package_details" class="form-control" rows="20">{{old('package_details')}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="package_summary">Summary</label>
                                    @if ($errors->has('package_summary'))
                                        <span class="text-danger">{{ $errors->first('package_summary') }}</span>
                                    @endif
                                    <textarea id="package_summary" name="package_summary" class="form-control">{{old('package_summary')}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="num_days">Number of days</label>
                                    @if ($errors->has('num_days'))
                                        <span class="text-danger">{{ $errors->first('num_days') }}</span>
                                    @endif
                                    <input type="text" id="num_days" name="num_days" class="form-control" placeholder="" value="{{old('num_days')}}">
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
