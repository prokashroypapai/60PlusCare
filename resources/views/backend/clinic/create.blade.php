@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Create Location</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/clinics')}}">Clinics</a>
                                </li>
                                <li class="breadcrumb-item active">Create Clinic</li>
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

                            <form method="post" action="{{url('admin/clinic/store')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="clinic_name">Clinic Name</label>
                                    @if ($errors->has('clinic_name'))
                                        <span class="text-danger">{{ $errors->first('clinic_name') }}</span>
                                    @endif
                                    <input type="text" id="clinic_name" name="clinic_name" class="form-control" placeholder="eg. Behala" value="{{old('clinic_name')}}">
                                </div>

                                <div class="form-group">
                                    <label for="clinic_address">Clinic Address</label>
                                    @if ($errors->has('clinic_address'))
                                        <span class="text-danger">{{ $errors->first('clinic_address') }}</span>
                                    @endif
                                    <textarea class="form-control" id="clinic_address" name="clinic_address" placeholder="Address">{{old('clinic_address')}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="clinic_description">Clinic Description </label>
                                    @if ($errors->has('clinic_description'))
                                        <span class="text-danger">{{ $errors->first('clinic_description') }}</span>
                                    @endif
                                    <textarea class="form-control" id="clinic_description" name="clinic_description" rows="15" placeholder="Clinic Description">{{old('clinic_description')}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="clinic_map">Clinic Map: </label>
                                    @if ($errors->has('clinic_map'))
                                        <span class="text-danger">{{ $errors->first('clinic_map') }}</span>
                                    @endif
                                    <textarea class="form-control" id="clinic_map" name="clinic_map">{{old('clinic_map')}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="upload">Upload Location Image</label>
                                    @if ($errors->has('upload'))
                                        <span class="text-danger">{{ $errors->first('upload') }}</span>
                                    @endif
                                    <input type="file" id="upload" name="upload" class="form-control">
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
