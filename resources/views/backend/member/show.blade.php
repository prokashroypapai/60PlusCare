@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">
                            {{$member->member_name}}
                            @if($member->is_deleted == true)
                            <span style="background: #f00; padding: 4px 6px; border-radius: 6px; color: #fff">
                                Deleted Member
                            </span>
                            @endif
                        </h4>

                        @isset($member->memberActiveSubscription)
                            <button class="btn btn-success" onclick='window.location.href="{{ url('admin/member/' . $member->id . '/subscriptions') }}"'>Active Subscription</button>
                        @else
                            <button class="btn btn-danger" onclick='window.location.href="{{ url('admin/member/' . $member->id . '/subscriptions') }}"'>No Active Subscription</button>
                        @endisset

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/members')}}">Members</a>
                                </li>
                                <li class="breadcrumb-item active">{{$member->member_name}}</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-6 float-left">
                    <div class="card">
                        <div class="card-body">

                            <form method="post" action="{{url('admin/member/update')}}">
                                @csrf
                                <input type="hidden" name="id" value="{{$member->id}}">

                                <div class="form-group">
                                    <label for="registration_no">Registration No</label>
                                    @if ($errors->has('registration_no'))
                                        <span class="text-danger">{{ $errors->first('alternate_no') }}</span>
                                    @endif
                                    <input type="text" id="registration_no" name="registration_no" class="form-control" placeholder="" value="{{$member->registration_no}}" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="name">Parent User</label>
                                    @if ($errors->has('user_id'))
                                        <span class="text-danger">{{ $errors->first('user_id') }}</span>
                                    @endif
                                    <select class="form-control" id="user_id" name="user_id">
                                        <option value="0">Select Parent User</option>
                                        @foreach(\App\Models\User::select('id', 'name', 'mobile')->where('permission', \App\Models\User::PERMISSION_MEMBER)->get() as $parentUser)
                                            <option value="{{ $parentUser->id }}" @if($member->user_id == $parentUser->id) selected @endif>{{ $parentUser->name . ' => ' . $parentUser->mobile }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="name">Member Name</label>
                                    @if ($errors->has('member_name'))
                                        <span class="text-danger">{{ $errors->first('member_name') }}</span>
                                    @endif
                                    <input type="text" id="member_name" name="member_name" class="form-control" placeholder="Enter Name" value="{{$member->member_name}}">
                                </div>

                                <div class="form-group">
                                    <label for="member_mobile">Member Mobile</label>
                                    @if ($errors->has('member_mobile'))
                                        <span class="text-danger">{{ $errors->first('member_mobile') }}</span>
                                    @endif
                                    <input type="text" id="member_mobile" name="member_mobile" class="form-control" placeholder="Enter Mobile" value="{{$member->member_mobile}}">
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    @if ($errors->has('status'))
                                        <span class="text-danger">{{ $errors->first('status') }}</span>
                                    @endif
                                    <select name="status" id="status" class="form-control">
                                        <option value="1" @if($member->status == true) selected @endif>ACTIVE</option>
                                        <option value="0" @if($member->status == false) selected @endif>INACTIVE</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                            </form>
                            @if($member->is_deleted == true)
                                <span class="float-right"><a href="{{url('admin/member/' . $member->id . '/restore')}}" class="text-danger" onclick="return confirm('Are you sure?')">Restore Member</a></span>
                            @else
                                <span class="float-right"><a href="{{url('admin/member/' . $member->id . '/delete')}}" class="text-danger" onclick="return confirm('Are you sure?')">Delete Member</a></span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 float-left">
                    <div class="card">
                        <div class="card-body">

                            <form method="post" action="{{url('admin/memberProfile/update')}}">
                                @csrf
                                <input type="hidden" name="member_id" value="{{$member->id}}">

                                <div class="form-group">
                                    <label for="is_policy">Is Policy / Mediclaim Holder</label>
                                    @if ($errors->has('is_policy'))
                                        <span class="text-danger">{{ $errors->first('is_policy') }}</span>
                                    @endif
                                    <select id="is_policy" name="is_policy" class="form-control">
                                        <option value="1" @if($member->is_policy == true) selected @endif>YES</option>
                                        <option value="0" @if($member->is_policy == false) selected @endif>NO</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="policy_number">Policy Number</label>
                                    @if ($errors->has('policy_number'))
                                        <span class="text-danger">{{ $errors->first('policy_number') }}</span>
                                    @endif
                                    <input type="text" id="policy_number" name="policy_number" class="form-control" placeholder="" value="{{$member->policy_number}}">
                                </div>

                                <div class="form-group">
                                    <label for="is_medical_allergy">Have Medical Allergy?</label>
                                    @if ($errors->has('is_medical_allergy'))
                                        <span class="text-danger">{{ $errors->first('is_medical_allergy') }}</span>
                                    @endif
                                    <select id="is_medical_allergy" name="is_medical_allergy" class="form-control">
                                        <option value="1" @if($member->is_medical_allergy == true) selected @endif>YES</option>
                                        <option value="0" @if($member->is_medical_allergy == false) selected @endif>NO</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="id_type">Id Proof</label>
                                    @if ($errors->has('id_type'))
                                        <span class="text-danger">{{ $errors->first('id_type') }}</span>
                                    @endif
                                    <select id="id_type" name="id_type" class="form-control">
                                        <option value="0">Select</option>
                                        <option value="Passport" @if($member->id_type == 'Passport') selected @endif>Passport</option>
                                        <option value="Driving_Licence" @if($member->id_type == 'Driving_Licence') selected @endif>Driving Licence</option>
                                        <option value="Voter_ID" @if($member->id_type == 'Voter_ID') selected @endif>Voter ID</option>
                                        <option value="PAN" @if($member->id_type == 'PAN') selected @endif>PAN</option>
                                        <option value="Other" @if($member->id_type == 'Other') selected @endif>Other</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="id_no">Id No</label>
                                    @if ($errors->has('id_no'))
                                        <span class="text-danger">{{ $errors->first('id_no') }}</span>
                                    @endif
                                    <input type="text" id="id_no" name="id_no" class="form-control" placeholder="" value="{{$member->id_no}}">
                                </div>

                                <div class="form-group">
                                    <label for="dob">Date Of Birth</label>
                                    @if ($errors->has('dob'))
                                        <span class="text-danger">{{ $errors->first('dob') }}</span>
                                    @endif
                                    <input type="text" id="dob" name="dob" class="form-control" data-toggle="input-mask" data-mask-format="00-00-0000" placeholder="DD-MM-YYYY" value="{{$member->dob != null ? \Carbon\Carbon::parse($member->dob)->format('d-m-Y') : null}}" autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    @if ($errors->has('gender'))
                                        <span class="text-danger">{{ $errors->first('gender') }}</span>
                                    @endif
                                    <select type="text" id="gender" name="gender" class="form-control">
                                        <option value="0">Select</option>
                                        <option value="Male" @if($member->gender == 'Male') selected @endif>Male</option>
                                        <option value="Female" @if($member->gender == 'Female') selected @endif>Female</option>
                                        <option value="Other" @if($member->gender == 'Other') selected @endif>Other</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="marital_status">Marital Status</label>
                                    @if ($errors->has('marital_status'))
                                        <span class="text-danger">{{ $errors->first('marital_status') }}</span>
                                    @endif
                                    <select type="text" id="marital_status" name="marital_status" class="form-control">
                                        <option value="0">Select</option>
                                        <option value="Unmarried" @if($member->marital_status == 'Unmarried') selected @endif>Unmarried</option>
                                        <option value="Married" @if($member->marital_status == 'Married') selected @endif>Married</option>
                                        <option value="Divorce" @if($member->marital_status == 'Divorce') selected @endif>Divorce</option>
                                        <option value="Widow" @if($member->marital_status == 'Widow') selected @endif>Widow</option>
                                        <option value="Widower" @if($member->marital_status == 'Widower') selected @endif>Widower</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="spouse_name">Spouse Name</label>
                                    @if ($errors->has('spouse_name'))
                                        <span class="text-danger">{{ $errors->first('spouse_name') }}</span>
                                    @endif
                                    <input type="text" id="spouse_name" name="spouse_name" class="form-control" placeholder="" value="{{$member->spouse_name}}">
                                </div>

                                <div class="form-group">
                                    <label for="spouse_dob">Spouse Date Of Birth</label>
                                    @if ($errors->has('spouse_dob'))
                                        <span class="text-danger">{{ $errors->first('spouse_dob') }}</span>
                                    @endif
                                    <input type="text" id="spouse_dob" name="spouse_dob" class="form-control" data-toggle="input-mask" data-mask-format="00-00-0000" placeholder="DD-MM-YYYY" value="{{$member->spouse_dob != null ? \Carbon\Carbon::parse($member->spouse_dob)->format('d-m-Y') : null}}" autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label for="children_no">Number of Children</label>
                                    @if ($errors->has('children_no'))
                                        <span class="text-danger">{{ $errors->first('children_no') }}</span>
                                    @endif
                                    <input type="text" id="children_no" name="children_no" class="form-control" placeholder="" value="{{$member->children_no}}">
                                </div>

                                <div class="form-group">
                                    <label for="anniversary_date">Anniversary Date</label>
                                    @if ($errors->has('anniversary_date'))
                                        <span class="text-danger">{{ $errors->first('anniversary_date') }}</span>
                                    @endif
                                    <input type="text" id="anniversary_date" name="anniversary_date" class="form-control" data-toggle="input-mask" data-mask-format="00-00-0000" placeholder="DD-MM-YYYY" value="{{$member->anniversary_date != null ? \Carbon\Carbon::parse($member->anniversary_date)->format('d-m-Y') : null}}" autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label for="address">Address</label>
                                    @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif
                                    <textarea id="address" name="address" class="form-control">{{$member->address}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="city">City</label>
                                    @if ($errors->has('city'))
                                        <span class="text-danger">{{ $errors->first('city') }}</span>
                                    @endif
                                    <input type="text" id="city" name="city" class="form-control" placeholder="" value="{{$member->city}}">
                                </div>

                                <div class="form-group">
                                    <label for="pin_code">Pin Code</label>
                                    @if ($errors->has('pin_code'))
                                        <span class="text-danger">{{ $errors->first('pin_code') }}</span>
                                    @endif
                                    <input type="text" id="pin_code" name="pin_code" class="form-control" placeholder="" value="{{$member->pin_code}}">
                                </div>

                                <div class="form-group">
                                    <label for="police_station">Local Police Station</label>
                                    @if ($errors->has('police_station'))
                                        <span class="text-danger">{{ $errors->first('police_station') }}</span>
                                    @endif
                                    <input type="text" id="police_station" name="police_station" class="form-control" placeholder="" value="{{$member->police_station}}">
                                </div>

                                <div class="form-group">
                                    <label for="gmail_id">Gmail Id</label>
                                    @if ($errors->has('gmail_id'))
                                        <span class="text-danger">{{ $errors->first('gmail_id') }}</span>
                                    @endif
                                    <input type="text" id="gmail_id" name="gmail_id" class="form-control" placeholder="" value="{{$member->gmail_id}}">
                                </div>

                                <div class="form-group">
                                    <label for="facebook_id">Facebook Id</label>
                                    @if ($errors->has('facebook_id'))
                                        <span class="text-danger">{{ $errors->first('facebook_id') }}</span>
                                    @endif
                                    <input type="text" id="facebook_id" name="facebook_id" class="form-control" placeholder="" value="{{$member->facebook_id}}">
                                </div>

                                <div class="form-group">
                                    <label for="staying_with">Staying With</label>
                                    @if ($errors->has('staying_with'))
                                        <span class="text-danger">{{ $errors->first('staying_with') }}</span>
                                    @endif
                                    <select id="staying_with" name="staying_with" class="form-control">
                                        <option value="0">Select</option>
                                        <option value="Spouse" @if($member->staying_with == 'Spouse') selected @endif>Spouse</option>
                                        <option value="Son" @if($member->staying_with == 'Son') selected @endif>Son</option>
                                        <option value="Daughter" @if($member->staying_with == 'Daughter') selected @endif>Daughter</option>
                                        <option value="Caretaker" @if($member->staying_with == 'Caretaker') selected @endif>Caretaker</option>
                                        <option value="Others" @if($member->staying_with == 'Others') selected @endif>Others</option>
                                        <option value="Alone" @if($member->staying_with == 'Alone') selected @endif>Alone</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="location_type">Location Type</label>
                                    @if ($errors->has('location_type'))
                                        <span class="text-danger">{{ $errors->first('location_type') }}</span>
                                    @endif
                                    <select id="location_type" name="location_type" class="form-control">
                                        <option value="0">Select</option>
                                        <option value="Stand_Alone_Building_House" @if($member->location_type == 'Stand_Alone_Building_House') selected @endif>Stand Alone Building House</option>
                                        <option value="Flat_In_An_Apartment_Building" @if($member->location_type == 'Flat_In_An_Apartment_Building') selected @endif>Flat in an Apartment Building</option>
                                        <option value="Group_Housing_Complex" @if($member->location_type == 'Group_Housing_Complex') selected @endif>Group Housing Complex</option>
                                        <option value="Independent_Room_Floor" @if($member->location_type == 'Independent_Room_Floor') selected @endif>Independent Room Floor</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="security_available">Security Available</label>
                                    @if ($errors->has('security_available'))
                                        <span class="text-danger">{{ $errors->first('security_available') }}</span>
                                    @endif
                                    <select id="security_available" name="security_available" class="form-control">
                                        <option value="0">Select</option>
                                        <option value="Security_Guard_Desk_is_available" @if($member->security_available == 'Security_Guard_Desk_is_available') selected @endif>Security Guard Desk is available</option>
                                        <option value="Security_Desk_only" @if($member->security_available == 'Security_Desk_only') selected @endif>Security Desk only</option>
                                        <option value="Caretaker_only" @if($member->security_available == 'Caretaker_only') selected @endif>Caretaker only</option>
                                        <option value="No_Security_Guard_or_Caretaker" @if($member->security_available == 'No_Security_Guard_or_Caretaker') selected @endif>No Security Guard or Caretaker</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="blood_group">Blood group</label>
                                    @if ($errors->has('blood_group'))
                                        <span class="text-danger">{{ $errors->first('blood_group') }}</span>
                                    @endif
                                    <input type="text" id="blood_group" name="blood_group" class="form-control" placeholder="" value="{{$member->blood_group}}">
                                </div>

                                <div class="form-group">
                                    <label for="medical_condition">Medical Condition</label>
                                    @if ($errors->has('medical_condition'))
                                        <span class="text-danger">{{ $errors->first('medical_condition') }}</span>
                                    @endif
                                    <textarea id="medical_condition" name="medical_condition" class="form-control">{{$member->medical_condition}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="hospitalization_history">Hospitalization history</label>
                                    @if ($errors->has('hospitalization_history'))
                                        <span class="text-danger">{{ $errors->first('hospitalization_history') }}</span>
                                    @endif
                                    <textarea id="hospitalization_history" name="hospitalization_history" class="form-control">{{$member->hospitalization_history}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="personal_doctor_details">Personal doctor details</label>
                                    @if ($errors->has('personal_doctor_details'))
                                        <span class="text-danger">{{ $errors->first('personal_doctor_details') }}</span>
                                    @endif
                                    <textarea id="personal_doctor_details" name="personal_doctor_details" class="form-control">{{$member->personal_doctor_details}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="sponsored_by">Sponsored by</label>
                                    @if ($errors->has('sponsored_by'))
                                        <span class="text-danger">{{ $errors->first('sponsored_by') }}</span>
                                    @endif
                                    <select id="sponsored_by" name="sponsored_by" class="form-control">
                                        <option value="0">Select</option>
                                        <option value="Self" @if($member->sponsored_by == 'Self') selected @endif>Self</option>
                                        <option value="Others" @if($member->sponsored_by == 'Others') selected @endif>Others</option>
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
    <!-- Mask Js-->
    <script src="{{asset('backend/plugins/jquery-mask/jquery.mask.min.js')}}"></script>
    <!-- Mask Custom Js-->
    <script src="{{asset('backend/pages/mask-demo.js')}}"></script>

    <script>
        $('#mobile').focus(function(){
            if($(this).val().substring(0,3) !== '+91'){
                $(this).val("+91" + $(this).val());
            }
        });
    </script>
@endsection
