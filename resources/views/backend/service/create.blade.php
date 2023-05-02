@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Create Service</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/services')}}">Services</a>
                                </li>
                                <li class="breadcrumb-item active">Create Service</li>
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

                            <form method="post" action="{{url('admin/service/store')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="service_name">Service Name</label>
                                    @if ($errors->has('service_name'))
                                        <span class="text-danger">{{ $errors->first('service_name') }}</span>
                                    @endif
                                    <input type="text" id="service_name" name="service_name" class="form-control" placeholder="Service Name" value="{{old('service_name')}}">
                                </div>

                                <div class="form-group">
                                    <label for="description">Description </label>
                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                    <textarea class="form-control" id="description" name="description" rows="15" placeholder="Description">{{old('description')}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="upload">Upload Image</label>
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
