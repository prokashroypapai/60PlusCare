@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Create Category</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/categories')}}">Categories</a>
                                </li>
                                <li class="breadcrumb-item active">Create Category</li>
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

                            <form method="post" action="{{url('admin/category/store')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="category_name">Category Name</label>
                                    @if ($errors->has('category_name'))
                                        <span class="text-danger">{{ $errors->first('category_name') }}</span>
                                    @endif
                                    <input type="text" id="category_name" name="category_name" class="form-control" placeholder="Enter Category Name" value="{{old('category_name')}}">
                                </div>

                                <div class="form-group">
                                    <label for="upload">Upload Picture (Optional)</label>
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
