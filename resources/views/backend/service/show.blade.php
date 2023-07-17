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
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">

                            <form method="post" action="{{url('admin/seo/update')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$service->id}}">
                                <input type="hidden" name="type" value="service">

                                <div class="form-group">
                                    <label for="meta_title">Meta Title: </label>
                                    @if ($errors->has('meta_title'))
                                        <span class="text-danger">{{ $errors->first('meta_title') }}</span>
                                    @endif
                                    <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{isset($service->serviceSeo->meta_title) ? $service->serviceSeo->meta_title : null}}">
                                </div>

                                <div class="form-group">
                                    <label for="meta_description">Meta Description: </label>
                                    @if ($errors->has('meta_description'))
                                        <span class="text-danger">{{ $errors->first('meta_description') }}</span>
                                    @endif
                                    <textarea class="form-control" id="meta_description" name="meta_description">{{isset($service->serviceSeo->meta_description) ? $service->serviceSeo->meta_description : null}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="meta_keyword">Meta Keyword: </label>
                                    @if ($errors->has('meta_keyword'))
                                        <span class="text-danger">{{ $errors->first('meta_keyword') }}</span>
                                    @endif
                                    <input type="text" class="form-control" id="meta_keyword" name="meta_keyword" value="{{isset($service->serviceSeo->meta_keyword) ? $service->serviceSeo->meta_keyword : null}}">
                                </div>

                                <div class="form-group">
                                    <label for="og_title">OG Title: </label>
                                    @if ($errors->has('og_title'))
                                        <span class="text-danger">{{ $errors->first('og_title') }}</span>
                                    @endif
                                    <input type="text" class="form-control" id="og_title" name="og_title" value="{{isset($service->serviceSeo->og_title) ? $service->serviceSeo->og_title : null}}">
                                </div>

                                <div class="form-group">
                                    <label for="og_description">OG Description: </label>
                                    @if ($errors->has('og_description'))
                                        <span class="text-danger">{{ $errors->first('og_description') }}</span>
                                    @endif
                                    <textarea class="form-control" id="og_description" name="og_description">{{isset($service->serviceSeo->og_description) ? $service->serviceSeo->og_description : null}}</textarea>
                                </div>

                                @if(isset($service->serviceSeo->og_image))
                                    <div class="form-group">
                                        <label for="og_image">OG Image: </label>
                                        <img src="{{asset($service->serviceSeo->seoPicture->image_thumb)}}" width="75" height="75"/>
                                    </div>
                                @endif

                                <div class="form-group">
                                    <label for="useDefault" data-toggle="tooltip" data-placement="top" title="OG image will be default image">
                                        <input type="checkbox" name="useDefault" id="useDefault" value="1"> Use Default Image
                                    </label>
                                </div>

                                <div class="form-group" id="uploadPic">
                                    <label for="upload">Upload Image: </label>
                                    @if ($errors->has('upload'))
                                        <span class="text-danger">{{ $errors->first('upload') }}</span>
                                    @endif
                                    <input type="file" class="form-control" id="upload" name="upload">
                                </div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        $("#useDefault").click(function() {
            if($(this).is(":checked")) {
                $("#uploadPic").hide(300);
            } else {
                $("#uploadPic").show(200);
            }
        });
    </script>
@endsection
