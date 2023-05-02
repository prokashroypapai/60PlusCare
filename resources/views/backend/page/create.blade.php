@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Create Page</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/pages')}}">Pages</a>
                                </li>
                                <li class="breadcrumb-item active">Create Page</li>
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

                            <form method="post" action="{{url('admin/page/store')}}">
                                @csrf

                                <div class="form-group">
                                    <label for="page_title">Page Title</label>
                                    @if ($errors->has('page_title'))
                                        <span class="text-danger">{{ $errors->first('page_title') }}</span>
                                    @endif
                                    <input type="text" id="page_title" name="page_title" class="form-control" placeholder="Enter Page Title" value="{{old('page_title')}}">
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                    <textarea class="form-control" id="description" name="description" rows="30" cols="30">{{old('description')}}</textarea>
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
