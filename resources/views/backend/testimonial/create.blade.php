@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Create Testimonial</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/testimonials')}}">Testimonials</a>
                                </li>
                                <li class="breadcrumb-item active">Create Testimonial</li>
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

                            <form method="post" action="{{url('admin/testimonial/store')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="upload">Upload Image</label>
                                    @if ($errors->has('upload'))
                                        <span class="text-danger">{{ $errors->first('upload') }}</span>
                                    @endif
                                    <input type="file" id="upload" name="upload" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                    <input type="text" id="name" name="name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="designation">Designation</label>
                                    @if ($errors->has('designation'))
                                        <span class="text-danger">{{ $errors->first('designation') }}</span>
                                    @endif
                                    <input type="text" id="designation" name="designation" class="form-control" value="{{old('designation')}}">
                                </div>

                                <div class="form-group">
                                    <label for="comment">Comment</label>
                                    @if ($errors->has('comment'))
                                        <span class="text-danger">{{ $errors->first('comment') }}</span>
                                    @endif
                                    <textarea id="comment" name="comment" class="form-control">{{old('comment')}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="rating">Rating</label>
                                    @if ($errors->has('rating'))
                                        <span class="text-danger">{{ $errors->first('rating') }}</span>
                                    @endif
                                    <select id="rating" name="rating" class="form-control">
                                        <option value="0">Select</option>
                                        <option value="1" @if(old('rating') == 1) selected @endif>1 Star</option>
                                        <option value="2" @if(old('rating') == 2) selected @endif>2 Star</option>
                                        <option value="3" @if(old('rating') == 4) selected @endif>3 Star</option>
                                        <option value="4" @if(old('rating') == 4) selected @endif>4 Star</option>
                                        <option value="5" @if(old('rating') == 5) selected @endif>5 Star</option>
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
