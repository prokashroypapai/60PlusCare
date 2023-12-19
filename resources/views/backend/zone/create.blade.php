@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Create Zone</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/zones')}}">Zones</a>
                                </li>
                                <li class="breadcrumb-item active">Create Zone</li>
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

                            <form method="post" action="{{url('admin/zone/store')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="zone_name">Zone Name</label>
                                    @if ($errors->has('zone_name'))
                                        <span class="text-danger">{{ $errors->first('zone_name') }}</span>
                                    @endif
                                    <input type="text" id="zone_name" name="zone_name" class="form-control" placeholder="Enter Zone Name" value="{{old('zone_name')}}">
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
