@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Create Doctor</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/doctors')}}">Doctors</a>
                                </li>
                                <li class="breadcrumb-item active">Create Doctor</li>
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

                            <form method="post" action="{{url('admin/doctor/store')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="doctor_name">Doctor Name</label>
                                    @if ($errors->has('doctor_name'))
                                        <span class="text-danger">{{ $errors->first('doctor_name') }}</span>
                                    @endif
                                    <input type="text" id="doctor_name" name="doctor_name" class="form-control" placeholder="Enter Name" value="{{old('doctor_name')}}">
                                </div>

                                <div class="form-group">
                                    <label for="doctor_designation">Doctor Designation</label>
                                    @if ($errors->has('doctor_designation'))
                                        <span class="text-danger">{{ $errors->first('doctor_designation') }}</span>
                                    @endif
                                    <input type="text" id="doctor_designation" name="doctor_designation" class="form-control" placeholder="Enter Designation" value="{{old('doctor_designation')}}">
                                </div>

                                <div class="form-group">
                                    <label for="doctor_association">Doctor Association</label>
                                    @if ($errors->has('doctor_association'))
                                        <span class="text-danger">{{ $errors->first('doctor_association') }}</span>
                                    @endif
                                    <input type="text" id="doctor_association" name="doctor_association" class="form-control" placeholder="Enter Association" value="{{old('doctor_association')}}">
                                </div>

                                <div class="form-group">
                                    <label for="doctor_experience">Doctor Experience</label>
                                    @if ($errors->has('doctor_experience'))
                                        <span class="text-danger">{{ $errors->first('doctor_experience') }}</span>
                                    @endif
                                    <textarea id="doctor_experience" name="doctor_experience" class="form-control" placeholder="Enter Experience">{{old('doctor_experience')}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="is_home">Shown on Homepage</label>
                                    @if ($errors->has('is_home'))
                                        <span class="text-danger">{{ $errors->first('is_home') }}</span>
                                    @endif
                                    <select id="is_home" name="is_home" class="form-control">
                                        <option value="1" @if(old('is_home') == true) selected @endif>YES</option>
                                        <option value="0" @if(old('is_home') == false) selected @endif>NO</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="upload">Upload Picture</label>
                                    @if ($errors->has('upload'))
                                        <span class="text-danger">{{ $errors->first('upload') }}</span>
                                    @endif
                                    <input type="file" id="upload" name="upload" class="form-control" accept="images/*">
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
