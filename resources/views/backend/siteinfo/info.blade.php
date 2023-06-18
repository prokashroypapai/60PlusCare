@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Software Info</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Software Info</li>
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
                            <div class="form-group">
                                <label for="report_email">Software Version: </label>
                                <span class="text-success">1.01</span>
                            </div>

                            <div class="form-group">
                                <label for="report_email">Status: </label>
                                <span class="text-success">ACTIVE</span>
                            </div>

                            <div class="form-group">
                                <label for="report_email">Technology Used: </label>
                                <span class="text-info">Laravel Framework, Jquery</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
