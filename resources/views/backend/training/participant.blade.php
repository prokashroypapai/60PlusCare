@extends('backend.layout.app')
@section('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js" integrity="sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css" integrity="sha512-34s5cpvaNG3BknEWSuOncX28vz97bRI59UnVtEEpFX536A7BtZSJHsDyFoCl8S7Dt2TPzcrCEoHBGeM4SUBDBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Participant Details</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/trainings')}}">Trainings</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/training/' . $participant->training_id)}}">{{ $participant->participantTraining->training_title }}</a>
                                </li>
                                <li class="breadcrumb-item active">Participant Details</li>
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

                            <form method="post" action="{{url('admin/participantUpdate')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$participant->id}}">

                                <div class="form-group">
                                    <label for="upload">Upload/Change Certificate</label>
                                    @if ($errors->has('upload'))
                                        <span class="text-danger">{{ $errors->first('upload') }}</span>
                                    @endif
                                    <input type="file" id="upload" name="upload" class="form-control" placeholder="Enter upload" value="">
                                </div>

                                <div class="form-group">
                                    <label for="">Certificate</label>
                                    <img src="{{ asset(isset($participant->participantPicture->image_thumb) ? $participant->participantPicture->image_thumb : \App\Models\Picture::getDefaultImage()->image_thumb) }}" width="150" height="150"/>
                                </div>

                                <div class="form-group">
                                    <label for="certificate_no">Certificate no</label>
                                    @if ($errors->has('certificate_no'))
                                        <span class="text-danger">{{ $errors->first('certificate_no') }}</span>
                                    @endif
                                    <input type="text" id="certificate_no" name="certificate_no" class="form-control" placeholder="Enter Certificate no" value="{{$participant->certificate_no}}">
                                </div>

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" value="{{$participant->name}}"/>
                                </div>

                                <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    @if ($errors->has('mobile'))
                                        <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                    @endif
                                    <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Enter Mobile" value="{{$participant->mobile}}"/>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Enter Email" value="{{$participant->email}}"/>
                                </div>

                                <div class="form-group">
                                    <label for="address">Address</label>
                                    @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif
                                    <input type="text" id="address" name="address" class="form-control" placeholder="Enter address" value="{{$participant->address}}"/>
                                </div>

                                <div class="form-group">
                                    <label for="city">City</label>
                                    @if ($errors->has('city'))
                                        <span class="text-danger">{{ $errors->first('city') }}</span>
                                    @endif
                                    <input type="text" id="city" name="city" class="form-control" placeholder="Enter city" value="{{$participant->city}}"/>
                                </div>

                                <div class="form-group">
                                    <label for="dob">Date of Birth</label>
                                    @if ($errors->has('date_expiry'))
                                        <span class="text-danger">{{ $errors->first('date_expiry') }}</span>
                                    @endif
                                    <input type="text" id="dob" name="dob" class="form-control datepicker" placeholder="Enter dob" value="{{ \Carbon\Carbon::parse($participant->dob)->format('d-m-Y')  }}">
                                </div>

                                <div class="form-group">
                                    <label for="is_eligible">Is Eligible?</label>
                                    @if ($errors->has('is_eligible'))
                                        <span class="text-danger">{{ $errors->first('is_eligible') }}</span>
                                    @endif
                                    <select id="is_eligible" name="is_eligible" class="form-control">
                                        <option value="1" @if($participant->is_eligible == \App\Models\Activity\Participant::ELIGIBLE_YES) selected @endif>YES</option>
                                        <option value="0" @if($participant->is_eligible == \App\Models\Activity\Participant::ELIGIBLE_NO) selected @endif>NO</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>

                                <div style="position: absolute; float: right; right: 0; top: 0">
                                    <button class="btn btn-primary">Send Certificate</button>
                                    <span class="btn btn-success waves-effect waves-light" onclick='window.location.href="{{ url('/admin/training/' . $participant->training_id) }}"'>Back to Training</span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.datepicker').datepicker({
            format: 'dd-mm-yyyy',
            startDate: '-200d'
        });
        $('#mobile').focus(function(){
            if($(this).val().substring(0,3) !== '+91'){
                $(this).val("+91" + $(this).val());
            }
        });
    </script>
@endsection
