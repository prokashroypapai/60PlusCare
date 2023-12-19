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
                        <h4 class="mb-0 font-size-18">Create Subscription</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/subscriptions')}}">Subscriptions</a>
                                </li>
                                <li class="breadcrumb-item active">Create Subscription</li>
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

                            <form method="post" action="{{url('admin/subscription/store')}}">
                                @csrf

                                <div class="form-group">
                                    <label for="member_id">Select Member</label>
                                    @if ($errors->has('member_id'))
                                        <span class="text-danger">{{ $errors->first('member_id') }}</span>
                                    @endif
                                    <select id="member_id" name="member_id" class="form-control">
                                        <option value="0">Select</option>
                                        @foreach(\App\Models\Member::active()->select('id', 'member_name', 'member_mobile')->get() as $member)
                                            <option value="{{$member->id}}" @if(old('member_id') == $member->id) selected @endif>{{$member->member_name . ' => ' . $member->member_mobile}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="registrationNo">Select Registration No:</label>
                                    <input type="text" id="registrationNo" name="registrationNo" class="form-control" value="{{ old('registrationNo') }}">
                                </div>

                                <div class="form-group">
                                    <label for="package_id">Select Package</label>
                                    @if ($errors->has('package_id'))
                                        <span class="text-danger">{{ $errors->first('package_id') }}</span>
                                    @endif
                                    <select id="package_id" name="package_id" class="form-control">
                                        <option value="0">Select</option>
                                        @foreach(\App\Models\Package::active()->select('id','package_name')->get() as $package)
                                            <option value="{{$package->id}}" @if($package->id == old('package_id')) selected @endif>{{$package->package_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="num_months">Months</label>
                                    @if ($errors->has('num_months'))
                                        <span class="text-danger">{{ $errors->first('num_months') }}</span>
                                    @endif
                                    <input type="text" id="num_months" name="num_months" class="form-control" placeholder="" value="{{old('num_months')}}">
                                </div>

                                <div class="form-group">
                                    <label for="start_date">Start Date</label>
                                    @if ($errors->has('start_date'))
                                        <span class="text-danger">{{ $errors->first('start_date') }}</span>
                                    @endif
                                    <input type="text" id="start_date" name="start_date" class="form-control datepicker" placeholder="" value="{{old('start_date')}}">
                                </div>

                                <div class="form-group">
                                    <label for="end_date">End Date (Optional)</label>
                                    @if ($errors->has('end_date'))
                                        <span class="text-danger">{{ $errors->first('end_date') }}</span>
                                    @endif
                                    <input type="text" id="end_date" name="end_date" class="form-control datepicker" placeholder="" value="{{old('end_date')}}">
                                </div>

                                <script>
                                    $('.datepicker').datepicker({
                                        format: 'dd-mm-yyyy',
                                        startDate: '-200d'
                                    });
                                </script>

                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function (){
            $('#member_id').change(function (){
                $('#registrationNo').val('');

                $.ajax({
                    url: "{{ url('api/memberDetails') }}",
                    type: "post",
                    data: {
                        memberId: $('#member_id').val(),
                        action: 'memberId'
                    },
                    success: function (response){
                        //console.log(response)
                        $('#registrationNo').val(response.member.registration_no);
                    },
                    error: function (error) {
                        //console.log(error)
                        $('#registrationNo').val('');
                    }
                })
            });

            $('#registrationNo').change(function (){
                $('#member_id').val('');

                $.ajax({
                    url: "{{ url('api/memberDetails') }}",
                    type: "post",
                    data: {
                        registrationNo: $('#registrationNo').val(),
                        action: 'registrationNo'
                    },
                    success: function (response){
                        if(response.status === 200) {
                            $('#member_id').val(response.member.id);
                        }
                        if(response.status === 404){
                            $('#member_id').val(0);
                        }
                    },
                    error: function (error) {
                        //console.log(error)
                        $('#member_id').val('');
                    }
                })
            });
        });
    </script>
@endsection
