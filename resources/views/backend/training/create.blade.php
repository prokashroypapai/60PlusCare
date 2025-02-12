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
                        <h4 class="mb-0 font-size-18">Create Training</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/trainings')}}">Trainings</a>
                                </li>
                                <li class="breadcrumb-item active">Create Training</li>
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

                            <form method="post" action="{{url('admin/training/store')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="training_title">Title</label>
                                    @if ($errors->has('training_title'))
                                        <span class="text-danger">{{ $errors->first('training_title') }}</span>
                                    @endif
                                    <input type="text" id="training_title" name="training_title" class="form-control" placeholder="Enter Title" value="{{old('training_title')}}">
                                </div>

                                <div class="form-group">
                                    <label for="training_details">Details</label>
                                    @if ($errors->has('training_details'))
                                        <span class="text-danger">{{ $errors->first('training_details') }}</span>
                                    @endif
                                    <textarea id="training_details" name="training_details" class="form-control" placeholder="Enter Details">{{old('training_details')}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="training_rules">Rules (Optional)</label>
                                    @if ($errors->has('training_rules'))
                                        <span class="text-danger">{{ $errors->first('training_rules') }}</span>
                                    @endif
                                    <textarea id="training_rules" name="training_rules" class="form-control" placeholder="Enter Rules">{{old('training_rules')}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="training_location">Training Location</label>
                                    @if ($errors->has('training_location'))
                                        <span class="text-danger">{{ $errors->first('training_location') }}</span>
                                    @endif
                                    <input type="text" id="training_location" name="training_location" class="form-control" placeholder="Enter Training Location" value="{{old('training_location')}}">
                                </div>

                                <div class="form-group">
                                    <label for="training_date">Training Date (Date of Training)</label>
                                    @if ($errors->has('training_date'))
                                        <span class="text-danger">{{ $errors->first('training_date') }}</span>
                                    @endif
                                    <input type="text" id="training_date" name="training_date" class="form-control datepicker" placeholder="Enter Date">{{old('training_date')}}</input>
                                </div>

                                <div class="form-group">
                                    <label for="date_expiry">Date Expiry (Registration expiry Date)</label>
                                    @if ($errors->has('date_expiry'))
                                        <span class="text-danger">{{ $errors->first('date_expiry') }}</span>
                                    @endif
                                    <input type="text" id="date_expiry" name="date_expiry" class="form-control datepicker" placeholder="Enter Date" value="{{old('date_expiry')}}">
                                </div>

                                <div class="form-group">
                                    <label for="upload">Upload Picture</label>
                                    @if ($errors->has('upload'))
                                        <span class="text-danger">{{ $errors->first('upload') }}</span>
                                    @endif
                                    <input type="file" id="upload" name="upload" class="form-control" accept="images/*">
                                </div>

                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>

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
    </script>
@endsection
