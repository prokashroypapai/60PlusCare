@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">{{$service->service_name}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/services')}}">Services</a>
                                </li>
                                <li class="breadcrumb-item active">{{$service->service_name}}</li>
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

                            <form method="post" action="{{url('admin/service/update')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$service->id}}">

                                <div class="form-group">
                                    <label for="service_name">Service Name</label>
                                    @if ($errors->has('service_name'))
                                        <span class="text-danger">{{ $errors->first('service_name') }}</span>
                                    @endif
                                    <input type="text" id="service_name" name="service_name" class="form-control" placeholder="" value="{{$service->service_name}}">
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                    <textarea class="form-control" id="description" name="description" rows="15" placeholder="Description">{{$service->description}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Image</label>
                                    <img src="{{asset($service->servicePicture->image_thumb)}}" width="75px" height="75px">
                                </div>

                                <div class="form-group">
                                    <label for="upload">Change Location Image</label>
                                    @if ($errors->has('upload'))
                                        <span class="text-danger">{{ $errors->first('upload') }}</span>
                                    @endif
                                    <input type="file" id="upload" name="upload" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    @if ($errors->has('status'))
                                        <span class="text-danger">{{ $errors->first('status') }}</span>
                                    @endif
                                    <select class="form-control" id="status" name="status">
                                        <option value="1" @if($service->status == true) selected @endif>Active</option>
                                        <option value="0" @if($service->status == false) selected @endif>Inactive</option>
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
