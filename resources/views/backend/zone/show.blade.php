@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">{{$zone->zone_name}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/zones')}}">Zones</a>
                                </li>
                                <li class="breadcrumb-item active">{{$zone->zone_name}}</li>
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

                            <form method="post" action="{{url('admin/zone/update')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$zone->id}}">

                                <div class="form-group">
                                    <label for="zone_name">Zone Name</label>
                                    @if ($errors->has('zone_name'))
                                        <span class="text-danger">{{ $errors->first('zone_name') }}</span>
                                    @endif
                                    <input type="text" id="zone_name" name="zone_name" class="form-control" placeholder="Enter Zone Name" value="{{$zone->zone_name}}">
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    @if ($errors->has('status'))
                                        <span class="text-danger">{{ $errors->first('status') }}</span>
                                    @endif
                                    <select class="form-control" id="status" name="status">
                                        <option value="1" @if($zone->status == true) selected @endif>Active</option>
                                        <option value="0" @if($zone->status == false) selected @endif>Inactive</option>
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
