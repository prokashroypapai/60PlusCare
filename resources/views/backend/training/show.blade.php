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
                        <h4 class="mb-0 font-size-18">{{$training->id}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/trainings')}}">Trainings</a>
                                </li>
                                <li class="breadcrumb-item active">{{$training->id}}</li>
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

                            <form method="post" action="{{url('admin/training/update')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$training->id}}">

                                <div class="form-group">
                                    <label for="">Training Picture</label>
                                    <img src="{{asset(isset($training->trainingPicture->image_small) ? $training->trainingPicture->image_small : \App\Models\Picture::getDefaultImage()->image_small)}}" width="75" height="auto" class="img-fluid d-block"/>
                                </div>

                                <div class="form-group">
                                    <label for="upload">Change Picture</label>
                                    @if ($errors->has('upload'))
                                        <span class="text-danger">{{ $errors->first('upload') }}</span>
                                    @endif
                                    <input type="file" id="upload" name="upload" class="form-control" accept="images/*">
                                </div>

                                <div class="form-group">
                                    <label for="training_title">Title</label>
                                    @if ($errors->has('training_title'))
                                        <span class="text-danger">{{ $errors->first('training_title') }}</span>
                                    @endif
                                    <input type="text" id="training_title" name="training_title" class="form-control" placeholder="Enter Title" value="{{$training->training_title}}">
                                </div>

                                <div class="form-group">
                                    <label for="training_details">Details</label>
                                    @if ($errors->has('training_details'))
                                        <span class="text-danger">{{ $errors->first('training_details') }}</span>
                                    @endif
                                    <textarea id="training_details" name="training_details" class="form-control" placeholder="Enter Details">{{$training->training_details}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="training_rules">Rules (Optional)</label>
                                    @if ($errors->has('training_rules'))
                                        <span class="text-danger">{{ $errors->first('training_rules') }}</span>
                                    @endif
                                    <textarea id="training_rules" name="training_rules" class="form-control" placeholder="Enter Rules">{{$training->training_rules}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="training_location">Training Location</label>
                                    @if ($errors->has('training_location'))
                                        <span class="text-danger">{{ $errors->first('training_location') }}</span>
                                    @endif
                                    <input type="text" id="training_location" name="training_location" class="form-control" placeholder="Enter Training Location" value="{{$training->training_location}}">
                                </div>

                                <div class="form-group">
                                    <label for="training_date">Training Date (Date of Training)</label>
                                    @if ($errors->has('training_date'))
                                        <span class="text-danger">{{ $errors->first('training_date') }}</span>
                                    @endif
                                    <input type="text" id="training_date" name="training_date" class="form-control datepicker" placeholder="Enter Date" value="{{\Carbon\Carbon::parse($training->training_date)->format('d-m-Y')}}"/>
                                </div>

                                <div class="form-group">
                                    <label for="date_expiry">Date Expiry</label>
                                    @if ($errors->has('date_expiry'))
                                        <span class="text-danger">{{ $errors->first('date_expiry') }}</span>
                                    @endif
                                    <input type="text" id="date_expiry" name="date_expiry" class="form-control datepicker" placeholder="Enter Date" value="{{\Carbon\Carbon::parse($training->date_expiry)->format('d-m-Y')}}">
                                </div>

                                <div class="form-group">
                                    <label for="is_expired">is Expired</label>
                                    @if ($errors->has('is_expired'))
                                        <span class="text-danger">{{ $errors->first('is_expired') }}</span>
                                    @endif
                                    <select class="form-control" id="is_expired" name="is_expired">
                                        <option value="1" @if($training->is_expired == true) selected @endif>Yes</option>
                                        <option value="0" @if($training->is_expired == false) selected @endif>No</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    @if ($errors->has('status'))
                                        <span class="text-danger">{{ $errors->first('status') }}</span>
                                    @endif
                                    <select class="form-control" id="status" name="status">
                                        <option value="1" @if($training->status == true) selected @endif>Active</option>
                                        <option value="0" @if($training->status == false) selected @endif>Inactive</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">

                            <h3 class="mb-3">Participants</h3>

                            <div style="position: absolute; float: right; top: 10px; right: 10px;">
                                <button class="btn btn-primary" onclick='window.location.href="{{ url('/admin/participant/create?trainingId=' . $training->id) }}"'>Create Participant</button>
                            </div>

                            <div class="form-group">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Certificate No</td>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Eligible</th>
                                        <th>Action</th>
                                    </tr>

                                    @foreach($training->trainingParticipants as $participant)
                                        <tr>
                                            <td>{{ $participant->certificate_no }}</td>
                                            <td><img src="{{asset(isset($training->trainingPicture->image_small) ? $training->trainingPicture->image_small : \App\Models\Picture::getDefaultImage()->image_small)}}" width="55" height="auto" class="img-fluid d-block"/></td>
                                            <td>{{ $participant->name }}</td>
                                            <td>{{ $participant->mobile }}</td>
                                            <td>@if($participant->is_eligible == \App\Models\Activity\Participant::ELIGIBLE_YES)<span class="badge badge-success">YES</span> @else <span class="badge badge-danger">NO</span>@endif</td>
                                            <td><a href="{{ url('/admin/participant/' . $participant->id) }}"><span class="badge badge-primary">View</span></a></td>
                                        </tr>
                                    @endforeach

                                </table>
                            </div>

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
    </script>
@endsection
