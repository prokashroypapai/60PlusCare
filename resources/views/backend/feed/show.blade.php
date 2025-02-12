@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">{{$feed->id}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/feeds')}}">Feeds</a>
                                </li>
                                <li class="breadcrumb-item active">{{$feed->id}}</li>
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

                            <form method="post" action="{{url('admin/feed/update')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$feed->id}}">

                                <div class="form-group">
                                    <label for="">Feed Image</label>
                                    <img src="{{asset($feed->feedPicture->image_thumb)}}" class="img-fluid d-block">
                                </div>

                                <div class="form-group">
                                    <label for="upload">Change Image</label>
                                    @if ($errors->has('upload'))
                                        <span class="text-danger">{{ $errors->first('upload') }}</span>
                                    @endif
                                    <input type="file" id="upload" name="upload" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="url">Url (optional)</label>
                                    @if ($errors->has('url'))
                                        <span class="text-danger">{{ $errors->first('url') }}</span>
                                    @endif
                                    <input type="text" id="url" name="url" class="form-control" value="{{$feed->url}}">
                                </div>

                                <div class="form-group">
                                    <label for="summary">Summary (Optional)</label>
                                    @if ($errors->has('summary'))
                                        <span class="text-danger">{{ $errors->first('summary') }}</span>
                                    @endif
                                    <textarea id="summary" name="summary" class="form-control">{{$feed->summary}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    @if ($errors->has('status'))
                                        <span class="text-danger">{{ $errors->first('status') }}</span>
                                    @endif
                                    <select class="form-control" id="status" name="status">
                                        <option value="{{\App\Models\Feed::STATUS_ACTIVE}}" @if($feed->status == \App\Models\Feed::STATUS_ACTIVE) selected @endif>Active</option>
                                        <option value="{{\App\Models\Feed::STATUS_INACTIVE}}" @if($feed->status == \App\Models\Feed::STATUS_INACTIVE) selected @endif>Inactive</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
