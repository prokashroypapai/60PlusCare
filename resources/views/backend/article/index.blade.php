@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Articles</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Articles</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <p>
                                <a href="{{url('admin/article/create')}}" class="btn btnTheme">Add Article</a>
                            </p>

                            <!--<table id="basic-datatable" class="table dt-responsive nowrap">-->
                            <table class="table dt-responsive nowrap">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Picture</th>
                                    <th>Author</th>
                                    <th>Posted At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($articles as $article)
                                    <tr>
                                        <td>{{$article->id}}</td>
                                        <td><img src="{{asset(isset($article->articlePicture->image_small) ? $article->articlePicture->image_small : \App\Models\Picture::getDefaultImage()->image_small)}}"/></td>
                                        <td>{{$article->author}}</td>
                                        <td>{{\Carbon\Carbon::parse($article->posted_at)->format('d M, Y')}}</td>
                                        <td>@if($article->status == true)<span class="badge badge-success">ACTIVE</span> @else <span class="badge badge-danger">INACTIVE</span>@endif</td>
                                        <td><a href="{{url('admin/article/' . $article->id)}}" class="btn btn-success">Action</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="float-right">
                                {{ $articles->withQueryString()->links("pagination::bootstrap-4") }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
