@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">{{$clinic->clinic_name}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/clinics')}}">Clinics</a>
                                </li>
                                <li class="breadcrumb-item active">{{$clinic->clinic_name}}</li>
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

                            <form method="post" action="{{url('admin/clinic/update')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$clinic->id}}">

                                <div class="form-group">
                                    <label for="clinic_name">Clinic Name</label>
                                    @if ($errors->has('clinic_name'))
                                        <span class="text-danger">{{ $errors->first('clinic_name') }}</span>
                                    @endif
                                    <input type="text" id="clinic_name" name="clinic_name" class="form-control" placeholder="eg. Behala" value="{{$clinic->clinic_name}}">
                                </div>

                                <div class="form-group">
                                    <label for="clinic_address">Clinic Address</label>
                                    @if ($errors->has('clinic_address'))
                                        <span class="text-danger">{{ $errors->first('clinic_address') }}</span>
                                    @endif
                                    <textarea class="form-control" id="clinic_address" name="clinic_address" placeholder="Clinic Address">{{$clinic->clinic_address}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="clinic_description">Clinic Description</label>
                                    @if ($errors->has('clinic_description'))
                                        <span class="text-danger">{{ $errors->first('clinic_description') }}</span>
                                    @endif
                                    <textarea class="form-control" id="clinic_description" name="clinic_description" rows="15" placeholder="Clinic Description">{{$clinic->clinic_description}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="clinic_map">Clinic Map</label>
                                    @if ($errors->has('clinic_map'))
                                        <span class="text-danger">{{ $errors->first('clinic_map') }}</span>
                                    @endif
                                    <textarea class="form-control" id="clinic_map" name="clinic_map">{{$clinic->clinic_map}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Clinic Image</label>
                                    <img src="{{asset(isset($clinic->clinicPicture->image_thumb) ? $clinic->clinicPicture->image_thumb : \App\Models\Picture::getDefaultImage()->image_thumb)}}" width="75px" height="75px">
                                </div>

                                <div class="form-group">
                                    <label for="upload">Change Clinic Image</label>
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
                                        <option value="1" @if($clinic->status == true) selected @endif>Active</option>
                                        <option value="0" @if($clinic->status == false) selected @endif>Inactive</option>
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
                                <input type="hidden" name="id" value="{{$clinic->id}}">
                                <input type="hidden" name="type" value="location">

                                <div class="form-group">
                                    <label for="meta_title">Meta Title: </label>
                                    @if ($errors->has('meta_title'))
                                        <span class="text-danger">{{ $errors->first('meta_title') }}</span>
                                    @endif
                                    <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{isset($clinic->clinicSeo->meta_title) ? $clinic->clinicSeo->meta_title : null}}">
                                </div>

                                <div class="form-group">
                                    <label for="meta_description">Meta Description: </label>
                                    @if ($errors->has('meta_description'))
                                        <span class="text-danger">{{ $errors->first('meta_description') }}</span>
                                    @endif
                                    <textarea class="form-control" id="meta_description" name="meta_description">{{isset($clinic->clinicSeo->meta_description) ? $clinic->clinicSeo->meta_description : null}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="meta_keyword">Meta Keyword: </label>
                                    @if ($errors->has('meta_keyword'))
                                        <span class="text-danger">{{ $errors->first('meta_keyword') }}</span>
                                    @endif
                                    <input type="text" class="form-control" id="meta_keyword" name="meta_keyword" value="{{isset($clinic->clinicSeo->meta_keyword) ? $clinic->clinicSeo->meta_keyword : null}}">
                                </div>

                                <div class="form-group">
                                    <label for="og_title">OG Title: </label>
                                    @if ($errors->has('og_title'))
                                        <span class="text-danger">{{ $errors->first('og_title') }}</span>
                                    @endif
                                    <input type="text" class="form-control" id="og_title" name="og_title" value="{{isset($clinic->clinicSeo->og_title) ? $clinic->clinicSeo->og_title : null}}">
                                </div>

                                <div class="form-group">
                                    <label for="og_description">OG Description: </label>
                                    @if ($errors->has('og_description'))
                                        <span class="text-danger">{{ $errors->first('og_description') }}</span>
                                    @endif
                                    <textarea class="form-control" id="og_description" name="og_description">{{isset($clinic->clinicSeo->og_description) ? $clinic->clinicSeo->og_description : null}}</textarea>
                                </div>

                                @if(isset($clinic->clinicSeo->og_image))
                                    <div class="form-group">
                                        <label for="og_image">OG Image: </label>
                                        <img src="{{asset($clinic->clinicSeo->seoPicture->image_thumb)}}" width="75" height="75"/>
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
