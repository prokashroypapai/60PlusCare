@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Site Info</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Site Info</li>
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

                            <form method="post" action="{{url('siteinfo')}}">
                                @csrf

                                <input type="hidden" name="id" value="{{$siteinfo->id}}">

                                <div class="form-group">
                                    <label for="report_email" class="col-sm-3 control-label">Report Email: </label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="report_email" name="report_email" value="{{$siteinfo->report_email}}">
                                    </div>
                                </div>
                                <hr>
                                <h4>Sender Email Setting</h4>

                                <div class="form-group">
                                    <label for="mail_driver" class="col-sm-3 control-label">Mail Driver: </label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="mail_driver" name="mail_driver" value="{{$siteinfo->mail_driver}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="mail_host" class="col-sm-3 control-label">Mail Host: </label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="mail_host" name="mail_host" value="{{$siteinfo->mail_host}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="mail_port" class="col-sm-3 control-label">Mail Port: </label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="mail_port" name="mail_port" value="{{$siteinfo->mail_port}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="mail_username" class="col-sm-3 control-label">Mail Username: </label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="mail_username" name="mail_username" value="{{$siteinfo->mail_username}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="mail_password" class="col-sm-3 control-label">Mail Password: </label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="mail_password" name="mail_password" value="{{$siteinfo->mail_password}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="mail_encryption" class="col-sm-3 control-label">Mail Encryption: </label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="mail_encryption" name="mail_encryption" value="{{$siteinfo->mail_encryption}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="mail_from_address" class="col-sm-3 control-label">Mail From Address: </label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="mail_from_address" name="mail_from_address" value="{{$siteinfo->mail_from_address}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="mail_form_name" class="col-sm-3 control-label">Mail Form Name: </label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="mail_form_name" name="mail_form_name" value="{{$siteinfo->mail_form_name}}">
                                    </div>
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
