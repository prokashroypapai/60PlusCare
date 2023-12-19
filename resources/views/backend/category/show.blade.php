@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">{{$category->category_name}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/categories')}}">Categories</a>
                                </li>
                                <li class="breadcrumb-item active">{{$category->category_name}}</li>
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

                            <form method="post" action="{{url('admin/category/update')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$category->id}}">

                                <div class="form-group">
                                    <label for="category_name">Category Name</label>
                                    @if ($errors->has('category_name'))
                                        <span class="text-danger">{{ $errors->first('category_name') }}</span>
                                    @endif
                                    <input type="text" id="category_name" name="category_name" class="form-control" placeholder="Enter Category Name" value="{{$category->category_name}}">
                                </div>

                                <div class="form-group">
                                    <label for="">Doctor Picture</label>
                                    <img src="{{asset(isset($category->categoryPicture->image_small) ? $category->categoryPicture->image_small : \App\Models\Picture::getDefaultImage()->image_small)}}" width="75" height="auto" class="img-fluid d-block"/>
                                </div>

                                <div class="form-group">
                                    <label for="upload">Change Picture (Optional)</label>
                                    @if ($errors->has('upload'))
                                        <span class="text-danger">{{ $errors->first('upload') }}</span>
                                    @endif
                                    <input type="file" id="upload" name="upload" class="form-control" accept="images/*">
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    @if ($errors->has('status'))
                                        <span class="text-danger">{{ $errors->first('status') }}</span>
                                    @endif
                                    <select class="form-control" id="status" name="status">
                                        <option value="1" @if($category->status == true) selected @endif>Active</option>
                                        <option value="0" @if($category->status == false) selected @endif>Inactive</option>
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
