@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Create Article</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/articles')}}">Articles</a>
                                </li>
                                <li class="breadcrumb-item active">Create Article</li>
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

                            <form method="post" action="{{url('admin/article/store')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="upload">Upload Image</label>
                                    @if ($errors->has('upload'))
                                        <span class="text-danger">{{ $errors->first('upload') }}</span>
                                    @endif
                                    <input type="file" id="upload" name="upload" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="posted_at">Posted Date</label>
                                    @if ($errors->has('posted_at'))
                                        <span class="text-danger">{{ $errors->first('posted_at') }}</span>
                                    @endif
                                    <input type="text" id="posted_at" name="posted_at" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                    <input type="text" id="title" name="title" class="form-control" value="{{old('title')}}">
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                    <textarea id="description" name="description" class="form-control" rows="80">{{old('description')}}</textarea>
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
