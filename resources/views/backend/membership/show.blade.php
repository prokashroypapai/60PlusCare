@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">{{$membership->id}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/memberships')}}">Memberships</a>
                                </li>
                                <li class="breadcrumb-item active">{{$membership->name}}</li>
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

                            <form method="post" action="{{url('admin/membership/update')}}">
                                @csrf
                                <input type="hidden" name="id" value="{{$membership->id}}">

                                <div class="form-group">
                                    <label for="package_id">Package Name</label>
                                    @if ($errors->has('package_id'))
                                        <span class="text-danger">{{ $errors->first('package_id') }}</span>
                                    @endif
                                    <select id="package_id" name="package_id" class="form-control">
                                        <option value="0">Select</option>
                                        <option value="1">Name</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="period">No of month / year</label>
                                    @if ($errors->has('period'))
                                        <span class="text-danger">{{ $errors->first('period') }}</span>
                                    @endif
                                    <input type="text" class="form-control" id="period" name="period" value=""/>
                                </div>

                                <div class="form-group">
                                    <label for="start_date">Start Date</label>
                                    @if ($errors->has('start_date'))
                                        <span class="text-danger">{{ $errors->first('start_date') }}</span>
                                    @endif
                                    <input type="text" class="form-control" id="start_date" name="start_date" value=""/>
                                </div>

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                    <input type="text" class="form-control" id="name" name="name" value="{{$membership->name}}"/>
                                </div>

                                <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    @if ($errors->has('mobile'))
                                        <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                    @endif
                                    <input type="text" class="form-control" id="mobile" name="mobile" value="{{$membership->mobile}}"/>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                    <input type="text" class="form-control" id="email" name="email" value="{{$membership->email}}"/>
                                </div>

                                <div class="form-group">
                                    <label for="city">City</label>
                                    @if ($errors->has('city'))
                                        <span class="text-danger">{{ $errors->first('city') }}</span>
                                    @endif
                                    <input type="text" class="form-control" id="city" name="city" value="{{$membership->city}}"/>
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
