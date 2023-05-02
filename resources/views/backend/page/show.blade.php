@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">{{$page->page_title}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('pages')}}">Pages</a>
                                </li>
                                <li class="breadcrumb-item active">{{$page->page_title}}</li>
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

                            <form method="post" action="{{url('admin/page/update')}}">
                                @csrf
                                <input type="hidden" name="id" value="{{$page->id}}">
                                <input type="hidden" name="is_writable" value="{{$page->is_writable}}">

                                <div class="form-group">
                                    <label for="page_title">Page Title: </label>
                                    @if ($errors->has('page_title'))
                                        <span class="text-danger">{{ $errors->first('page_title') }}</span>
                                    @endif
                                    <input type="text" class="form-control" id="page_title" name="page_title" value="{{$page->page_title}}">
                                </div>

                                <div class="form-group">
                                    <label for="page_slug">Page Slug: </label>
                                    @if ($errors->has('page_slug'))
                                        <span class="text-danger">{{ $errors->first('page_slug') }}</span>
                                    @endif
                                    <input type="text" class="form-control" id="page_slug" name="page_slug" value="{{$page->page_slug}}">
                                </div>
                                @if($page->is_writable == true)
                                <div class="form-group">
                                    <label for="description">Description: </label>
                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                    <textarea class="form-control" id="description" name="description" rows="30" cols="30">{{$page->description}}</textarea>
                                </div>
                                @endif

                                <div class="form-group">
                                    <label for="status">Status: </label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="1" @if($page->status == true) selected @endif>ACTIVE</option>
                                        <option value="0" @if($page->status == false) selected @endif>INACTIVE</option>
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
                                <input type="hidden" name="id" value="{{$page->id}}">
                                <input type="hidden" name="type" value="page">

                                <div class="form-group">
                                    <label for="meta_title">Meta Title: </label>
                                    @if ($errors->has('meta_title'))
                                        <span class="text-danger">{{ $errors->first('meta_title') }}</span>
                                    @endif
                                    <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{isset($page->pageSeo->meta_title) ? $page->pageSeo->meta_title : null}}">
                                </div>

                                <div class="form-group">
                                    <label for="meta_description">Meta Description: </label>
                                    @if ($errors->has('meta_description'))
                                        <span class="text-danger">{{ $errors->first('meta_description') }}</span>
                                    @endif
                                    <textarea class="form-control" id="meta_description" name="meta_description">{{isset($page->pageSeo->meta_description) ? $page->pageSeo->meta_description : null}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="meta_keyword">Meta Keyword: </label>
                                    @if ($errors->has('meta_keyword'))
                                        <span class="text-danger">{{ $errors->first('meta_keyword') }}</span>
                                    @endif
                                    <input type="text" class="form-control" id="meta_keyword" name="meta_keyword" value="{{isset($page->pageSeo->meta_keyword) ? $page->pageSeo->meta_keyword : null}}">
                                </div>

                                <div class="form-group">
                                    <label for="og_title">OG Title: </label>
                                    @if ($errors->has('og_title'))
                                        <span class="text-danger">{{ $errors->first('og_title') }}</span>
                                    @endif
                                    <input type="text" class="form-control" id="og_title" name="og_title" value="{{isset($page->pageSeo->og_title) ? $page->pageSeo->og_title : null}}">
                                </div>

                                <div class="form-group">
                                    <label for="og_description">OG Description: </label>
                                    @if ($errors->has('og_description'))
                                        <span class="text-danger">{{ $errors->first('og_description') }}</span>
                                    @endif
                                    <textarea class="form-control" id="og_description" name="og_description">{{isset($page->pageSeo->og_description) ? $page->pageSeo->og_description : null}}</textarea>
                                </div>

                                @if(isset($page->pageSeo->og_image))
                                    <div class="form-group">
                                        <label for="og_image">OG Image: </label>
                                        <img src="{{asset($page->pageSeo->seoPicture->image_thumb)}}" width="75" height="75"/>
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
