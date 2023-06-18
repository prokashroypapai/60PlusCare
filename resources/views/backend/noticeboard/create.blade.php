@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Create Notice Board</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/noticeboards')}}">Notice boards</a>
                                </li>
                                <li class="breadcrumb-item active">Create Notice Board</li>
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

                            <form method="post" action="{{url('admin/noticeboard/store')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="notice_title">Title</label>
                                    @if ($errors->has('notice_title'))
                                        <span class="text-danger">{{ $errors->first('notice_title') }}</span>
                                    @endif
                                    <textarea id="notice_title" name="notice_title" class="form-control" placeholder="Enter Title">{{old('notice_title')}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="upload">Upload File (doc, docx, pdf)</label>
                                    @if ($errors->has('upload'))
                                        <span class="text-danger">{{ $errors->first('upload') }}</span>
                                    @endif
                                    <input type="file" id="upload" name="upload" class="form-control">
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
