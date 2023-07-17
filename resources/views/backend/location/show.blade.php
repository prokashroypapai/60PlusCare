@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">{{$location->location_name}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/locations')}}">Locations</a>
                                </li>
                                <li class="breadcrumb-item active">{{$location->location_name}}</li>
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

                            <form method="post" action="{{url('admin/location/update')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$location->id}}">

                                <div class="form-group">
                                    <label for="location_name">Location Name</label>
                                    @if ($errors->has('location_name'))
                                        <span class="text-danger">{{ $errors->first('location_name') }}</span>
                                    @endif
                                    <input type="text" id="location_name" name="location_name" class="form-control" placeholder="eg. Behala" value="{{$location->location_name}}">
                                </div>

                                <div class="form-group">
                                    <label for="location_address">Location Address</label>
                                    @if ($errors->has('location_address'))
                                        <span class="text-danger">{{ $errors->first('location_address') }}</span>
                                    @endif
                                    <textarea class="form-control" id="location_address" name="location_address" placeholder="Location Address">{{$location->location_address}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="location_description">Location Description</label>
                                    @if ($errors->has('location_description'))
                                        <span class="text-danger">{{ $errors->first('location_description') }}</span>
                                    @endif
                                    <textarea class="form-control" id="location_description" name="location_description" rows="15" placeholder="Location Description">{{$location->location_description}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="location_map">Location Map</label>
                                    @if ($errors->has('location_map'))
                                        <span class="text-danger">{{ $errors->first('location_map') }}</span>
                                    @endif
                                    <textarea class="form-control" id="location_map" name="location_map">{{$location->location_map}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Location Image</label>
                                    <img src="{{asset(isset($location->locationPicture->image_thumb) ? $location->locationPicture->image_thumb : \App\Models\Picture::getDefaultImage()->image_thumb)}}" width="75px" height="75px">
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
                                        <option value="1" @if($location->status == true) selected @endif>Active</option>
                                        <option value="0" @if($location->status == false) selected @endif>Inactive</option>
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
                                <input type="hidden" name="id" value="{{$location->id}}">
                                <input type="hidden" name="type" value="location">

                                <div class="form-group">
                                    <label for="meta_title">Meta Title: </label>
                                    @if ($errors->has('meta_title'))
                                        <span class="text-danger">{{ $errors->first('meta_title') }}</span>
                                    @endif
                                    <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{isset($location->locationSeo->meta_title) ? $location->locationSeo->meta_title : null}}">
                                </div>

                                <div class="form-group">
                                    <label for="meta_description">Meta Description: </label>
                                    @if ($errors->has('meta_description'))
                                        <span class="text-danger">{{ $errors->first('meta_description') }}</span>
                                    @endif
                                    <textarea class="form-control" id="meta_description" name="meta_description">{{isset($location->locationSeo->meta_description) ? $location->locationSeo->meta_description : null}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="meta_keyword">Meta Keyword: </label>
                                    @if ($errors->has('meta_keyword'))
                                        <span class="text-danger">{{ $errors->first('meta_keyword') }}</span>
                                    @endif
                                    <input type="text" class="form-control" id="meta_keyword" name="meta_keyword" value="{{isset($location->locationSeo->meta_keyword) ? $location->locationSeo->meta_keyword : null}}">
                                </div>

                                <div class="form-group">
                                    <label for="og_title">OG Title: </label>
                                    @if ($errors->has('og_title'))
                                        <span class="text-danger">{{ $errors->first('og_title') }}</span>
                                    @endif
                                    <input type="text" class="form-control" id="og_title" name="og_title" value="{{isset($location->locationSeo->og_title) ? $location->locationSeo->og_title : null}}">
                                </div>

                                <div class="form-group">
                                    <label for="og_description">OG Description: </label>
                                    @if ($errors->has('og_description'))
                                        <span class="text-danger">{{ $errors->first('og_description') }}</span>
                                    @endif
                                    <textarea class="form-control" id="og_description" name="og_description">{{isset($location->locationSeo->og_description) ? $location->locationSeo->og_description : null}}</textarea>
                                </div>

                                @if(isset($location->locationSeo->og_image))
                                    <div class="form-group">
                                        <label for="og_image">OG Image: </label>
                                        <img src="{{asset($location->locationSeo->seoPicture->image_thumb)}}" width="75" height="75"/>
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
@endsection
