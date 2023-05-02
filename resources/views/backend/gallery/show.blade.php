@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">{{$gallery->gallery_name}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/galleries')}}">Galleries</a>
                                </li>
                                <li class="breadcrumb-item active">{{$gallery->gallery_name}}</li>
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

                            <form method="post" action="{{url('admin/gallery/update')}}">
                                @csrf
                                <input type="hidden" name="id" value="{{$gallery->id}}">

                                <div class="form-group">
                                    <label for="gallery_name">Gallery Name</label>
                                    @if ($errors->has('gallery_name'))
                                        <span class="text-danger">{{ $errors->first('gallery_name') }}</span>
                                    @endif
                                    <input type="text" id="gallery_name" name="gallery_name" class="form-control" value="{{$gallery->gallery_name}}">
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    @if ($errors->has('status'))
                                        <span class="text-danger">{{ $errors->first('status') }}</span>
                                    @endif
                                    <select class="form-control" id="status" name="status">
                                        <option value="1" @if($gallery->status == true) selected @endif>Active</option>
                                        <option value="0" @if($gallery->status == false) selected @endif>Inactive</option>
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
                            <h4>Upload Picture</h4>
                            <form method="post" action="{{url('admin/gallery/upload')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$gallery->id}}">

                                <div class="form-group">
                                    <label for="upload">Upload Picture</label>
                                    @if ($errors->has('upload'))
                                        <span class="text-danger">{{ $errors->first('upload') }}</span>
                                    @endif
                                    <input type="file" id="upload" name="upload" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>

                            </form>
                        </div>
                        <div class="card-body">
                            <h4>Gallery Images</h4>
                            <div class="col-12">
                                @if(count($gallery->galleryImages) > 0)
                                    @foreach($gallery->galleryImages as $galleryPicture)
                                        <div class="col-3 float-left">
                                            <img src="{{asset($galleryPicture->GalleryPicture->image_thumb)}}" class="img-fluid">
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
