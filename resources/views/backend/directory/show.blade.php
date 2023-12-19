@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">{{$directory->directory_name}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/Directories')}}">Directories</a>
                                </li>
                                <li class="breadcrumb-item active">{{$directory->directory_name}}</li>
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

                            <form method="post" action="{{url('admin/directory/update')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$directory->id}}">

                                <div class="form-group">
                                    <label for="category_id">Category</label>
                                    @if ($errors->has('category_id'))
                                        <span class="text-danger">{{ $errors->first('category_id') }}</span>
                                    @endif
                                    <select id="category_id" name="category_id" class="form-control">
                                        <option value="0">All Categories</option>
                                        @foreach(\App\Models\Category::active()->get() as $category)
                                            <option value="{{$category->id}}" @if($directory->category_id == $category->id) selected @endif>{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="zone_id">Zone</label>
                                    @if ($errors->has('zone_id'))
                                        <span class="text-danger">{{ $errors->first('zone_id') }}</span>
                                    @endif
                                    <select id="zone_id" name="zone_id" class="form-control">
                                        <option value="0">All Zones</option>
                                        @foreach(\App\Models\Zone::active()->get() as $zone)
                                            <option value="{{$zone->id}}" @if($directory->zone_id == $zone->id) selected @endif>{{$zone->zone_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="directory_name">Directory Name</label>
                                    @if ($errors->has('directory_name'))
                                        <span class="text-danger">{{ $errors->first('directory_name') }}</span>
                                    @endif
                                    <input type="text" id="directory_name" name="directory_name" class="form-control" placeholder="Enter Directory Name" value="{{$directory->directory_name}}">
                                </div>

                                <div class="form-group">
                                    <label for="directory_value">Directory Value</label>
                                    @if ($errors->has('directory_value'))
                                        <span class="text-danger">{{ $errors->first('directory_value') }}</span>
                                    @endif
                                    <input type="text" id="directory_value" name="directory_value" class="form-control" placeholder="Enter Directory Value" value="{{$directory->directory_value}}">
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    @if ($errors->has('status'))
                                        <span class="text-danger">{{ $errors->first('status') }}</span>
                                    @endif
                                    <select class="form-control" id="status" name="status">
                                        <option value="1" @if($directory->status == true) selected @endif>Active</option>
                                        <option value="0" @if($directory->status == false) selected @endif>Inactive</option>
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
