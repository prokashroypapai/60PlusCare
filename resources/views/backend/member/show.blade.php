@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">{{$user->name}}</h4>

                        @if(count($user->userActiveSubscriptions) > 0)
                            <button class="btn btnSuccess" onclick="myFunc({{$user->id}})">Subscription Active</button>
                        @else
                            <button class="btn btnDanger" onclick="myFunc({{$user->id}})">No Current Subscription</button>
                        @endif

                        <script>
                            function myFunc(userId){
                                window.location.href = "{{url('admin/subscription/user')}}" + "/" + userId;
                            }
                        </script>

                        <style>.btnDanger{color: #fff;font-weight: 600;background-color: #ff1c2b;}  .btnSuccess{color: #fff;font-weight: 600;background-color: #077a14;}  .btnDanger:hover, .btnSuccess:hover{color: #fff;}</style>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/members')}}">Staffs</a>
                                </li>
                                <li class="breadcrumb-item active">{{$user->name}}</li>
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

                            <form method="post" action="{{url('admin/staff/update')}}">
                                @csrf
                                <input type="hidden" name="id" value="{{$user->id}}">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" value="{{$user->name}}">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" value="{{$user->email}}">
                                </div>

                                <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    @if ($errors->has('mobile'))
                                        <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                    @endif
                                    <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Enter Mobile" value="{{$user->mobile}}">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                    <input type="password" id="password" name="password" class="form-control">
                                    <p>Leave blank if no need to update password</p>
                                </div>

                                <div class="form-group">
                                    <label for="permission">Permission</label>
                                    @if ($errors->has('permission'))
                                        <span class="text-danger">{{ $errors->first('permission') }}</span>
                                    @endif
                                    <select type="text" id="permission" name="permission" class="form-control">
                                        <option value="{{\App\Models\User::PERMISSION_ADMIN}}" @if($user->permission == \App\Models\User::PERMISSION_ADMIN) selected @endif>ADMIN</option>
                                        <option value="{{\App\Models\User::PERMISSION_MANAGER}}" @if($user->permission == \App\Models\User::PERMISSION_MANAGER) selected @endif>MANAGER</option>
                                        <option value="{{\App\Models\User::PERMISSION_MEMBER}}" @if($user->permission == \App\Models\User::PERMISSION_MEMBER) selected @endif>MEMBER</option>
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

                            <form method="post" action="{{url('admin/memberProfile/update')}}">
                                @csrf
                                <input type="hidden" name="user_id" value="{{$user->id}}">

                                <div class="form-group">
                                    <label for="alternate_no">Alternate No</label>
                                    @if ($errors->has('alternate_no'))
                                        <span class="text-danger">{{ $errors->first('alternate_no') }}</span>
                                    @endif
                                    <input type="text" id="alternate_no" name="alternate_no" class="form-control" placeholder="" value="{{$user->userProfile->alternate_no}}">
                                </div>

                                <div class="form-group">
                                    <label for="id_type">Id Proof</label>
                                    @if ($errors->has('id_type'))
                                        <span class="text-danger">{{ $errors->first('id_type') }}</span>
                                    @endif
                                    <select id="id_type" name="id_type" class="form-control">
                                        <option value="0">Select</option>
                                        <option value="Passport" @if($user->userProfile->id_type == 'Passport') selected @endif>Passport</option>
                                        <option value="Driving_Licence" @if($user->userProfile->id_type == 'Driving_Licence') selected @endif>Driving Licence</option>
                                        <option value="Voter_ID" @if($user->userProfile->id_type == 'Voter_ID') selected @endif>Voter ID</option>
                                        <option value="PAN" @if($user->userProfile->id_type == 'PAN') selected @endif>PAN</option>
                                        <option value="Other" @if($user->userProfile->id_type == 'Other') selected @endif>Other</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="id_no">Id No</label>
                                    @if ($errors->has('id_no'))
                                        <span class="text-danger">{{ $errors->first('id_no') }}</span>
                                    @endif
                                    <input type="text" id="id_no" name="id_no" class="form-control" placeholder="" value="{{$user->userProfile->id_no}}">
                                </div>

                                <div class="form-group">
                                    <label for="dob">Date Of Birth</label>
                                    @if ($errors->has('dob'))
                                        <span class="text-danger">{{ $errors->first('dob') }}</span>
                                    @endif
                                    <input type="text" id="dob" name="dob" class="form-control" placeholder="27-02-1975" value="{{$user->userProfile->dob}}">
                                </div>

                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    @if ($errors->has('gender'))
                                        <span class="text-danger">{{ $errors->first('gender') }}</span>
                                    @endif
                                    <select type="text" id="gender" name="gender" class="form-control">
                                        <option value="0">Select</option>
                                        <option value="Male" @if($user->userProfile->gender == 'Male') selected @endif>Male</option>
                                        <option value="Female" @if($user->userProfile->gender == 'Female') selected @endif>Female</option>
                                        <option value="Other" @if($user->userProfile->gender == 'Other') selected @endif>Other</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="marital_status">Marital Status</label>
                                    @if ($errors->has('marital_status'))
                                        <span class="text-danger">{{ $errors->first('marital_status') }}</span>
                                    @endif
                                    <select type="text" id="marital_status" name="marital_status" class="form-control">
                                        <option value="0">Select</option>
                                        <option value="Unmarried" @if($user->userProfile->marital_status == 'Unmarried') selected @endif>Unmarried</option>
                                        <option value="Married" @if($user->userProfile->marital_status == 'Married') selected @endif>Married</option>
                                        <option value="Divorce" @if($user->userProfile->marital_status == 'Divorce') selected @endif>Divorce</option>
                                        <option value="Widow" @if($user->userProfile->marital_status == 'Widow') selected @endif>Widow</option>
                                        <option value="Widower" @if($user->userProfile->marital_status == 'Widower') selected @endif>Widower</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="spouse_name">Spouse Name</label>
                                    @if ($errors->has('spouse_name'))
                                        <span class="text-danger">{{ $errors->first('spouse_name') }}</span>
                                    @endif
                                    <input type="text" id="spouse_name" name="spouse_name" class="form-control" placeholder="" value="{{$user->userProfile->spouse_name}}">
                                </div>

                                <div class="form-group">
                                    <label for="spouse_dob">Spouse Date Of Birth</label>
                                    @if ($errors->has('spouse_dob'))
                                        <span class="text-danger">{{ $errors->first('spouse_dob') }}</span>
                                    @endif
                                    <input type="text" id="spouse_dob" name="spouse_dob" class="form-control" placeholder="27-02-1975" value="{{$user->userProfile->spouse_dob}}">
                                </div>

                                <div class="form-group">
                                    <label for="children_no">Number of Children</label>
                                    @if ($errors->has('children_no'))
                                        <span class="text-danger">{{ $errors->first('children_no') }}</span>
                                    @endif
                                    <input type="text" id="children_no" name="children_no" class="form-control" placeholder="" value="{{$user->userProfile->children_no}}">
                                </div>

                                <div class="form-group">
                                    <label for="anniversary_date">Anniversary Date</label>
                                    @if ($errors->has('anniversary_date'))
                                        <span class="text-danger">{{ $errors->first('anniversary_date') }}</span>
                                    @endif
                                    <input type="text" id="anniversary_date" name="anniversary_date" class="form-control" placeholder="27-02-1975" value="{{$user->userProfile->anniversary_date}}">
                                </div>

                                <div class="form-group">
                                    <label for="address">Address</label>
                                    @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif
                                    <textarea id="address" name="address" class="form-control">{{$user->userProfile->address}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="city">City</label>
                                    @if ($errors->has('city'))
                                        <span class="text-danger">{{ $errors->first('city') }}</span>
                                    @endif
                                    <input type="text" id="city" name="city" class="form-control" placeholder="" value="{{$user->userProfile->city}}">
                                </div>

                                <div class="form-group">
                                    <label for="pin_code">Pin Code</label>
                                    @if ($errors->has('pin_code'))
                                        <span class="text-danger">{{ $errors->first('pin_code') }}</span>
                                    @endif
                                    <input type="text" id="pin_code" name="pin_code" class="form-control" placeholder="" value="{{$user->userProfile->pin_code}}">
                                </div>

                                <div class="form-group">
                                    <label for="police_station">Local Police Station</label>
                                    @if ($errors->has('police_station'))
                                        <span class="text-danger">{{ $errors->first('police_station') }}</span>
                                    @endif
                                    <input type="text" id="police_station" name="police_station" class="form-control" placeholder="" value="{{$user->userProfile->police_station}}">
                                </div>

                                <div class="form-group">
                                    <label for="gmail_id">Gmail Id</label>
                                    @if ($errors->has('gmail_id'))
                                        <span class="text-danger">{{ $errors->first('gmail_id') }}</span>
                                    @endif
                                    <input type="text" id="gmail_id" name="gmail_id" class="form-control" placeholder="" value="{{$user->userProfile->gmail_id}}">
                                </div>

                                <div class="form-group">
                                    <label for="facebook_id">Facebook Id</label>
                                    @if ($errors->has('facebook_id'))
                                        <span class="text-danger">{{ $errors->first('facebook_id') }}</span>
                                    @endif
                                    <input type="text" id="facebook_id" name="facebook_id" class="form-control" placeholder="" value="{{$user->userProfile->facebook_id}}">
                                </div>

                                <div class="form-group">
                                    <label for="staying_with">Staying With</label>
                                    @if ($errors->has('staying_with'))
                                        <span class="text-danger">{{ $errors->first('staying_with') }}</span>
                                    @endif
                                    <select id="staying_with" name="staying_with" class="form-control">
                                        <option value="0">Select</option>
                                        <option value="Spouse" @if($user->userProfile->staying_with == 'Spouse') selected @endif>Spouse</option>
                                        <option value="Son" @if($user->userProfile->staying_with == 'Son') selected @endif>Son</option>
                                        <option value="Daughter" @if($user->userProfile->staying_with == 'Daughter') selected @endif>Daughter</option>
                                        <option value="Caretaker" @if($user->userProfile->staying_with == 'Caretaker') selected @endif>Caretaker</option>
                                        <option value="Others" @if($user->userProfile->staying_with == 'Others') selected @endif>Others</option>
                                        <option value="Alone" @if($user->userProfile->staying_with == 'Alone') selected @endif>Alone</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="location_type">Location Type</label>
                                    @if ($errors->has('location_type'))
                                        <span class="text-danger">{{ $errors->first('location_type') }}</span>
                                    @endif
                                    <select id="location_type" name="location_type" class="form-control">
                                        <option value="0">Select</option>
                                        <option value="Stand_Alone_Building_House" @if($user->userProfile->location_type == 'Stand_Alone_Building_House') selected @endif>Stand Alone Building House</option>
                                        <option value="Flat_In_An_Apartment_Building" @if($user->userProfile->location_type == 'Flat_In_An_Apartment_Building') selected @endif>Flat in an Apartment Building</option>
                                        <option value="Group_Housing_Complex" @if($user->userProfile->location_type == 'Group_Housing_Complex') selected @endif>Group Housing Complex</option>
                                        <option value="Independent_Room_Floor" @if($user->userProfile->location_type == 'Independent_Room_Floor') selected @endif>Independent Room Floor</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="security_available">Security Available</label>
                                    @if ($errors->has('security_available'))
                                        <span class="text-danger">{{ $errors->first('security_available') }}</span>
                                    @endif
                                    <select id="security_available" name="security_available" class="form-control">
                                        <option value="0">Select</option>
                                        <option value="Security_Guard_Desk_is_available" @if($user->userProfile->security_available == 'Security_Guard_Desk_is_available') selected @endif>Security Guard Desk is available</option>
                                        <option value="Security_Desk_only" @if($user->userProfile->security_available == 'Security_Desk_only') selected @endif>Security Desk only</option>
                                        <option value="Caretaker_only" @if($user->userProfile->security_available == 'Caretaker_only') selected @endif>Caretaker only</option>
                                        <option value="No_Security_Guard_or_Caretaker" @if($user->userProfile->security_available == 'No_Security_Guard_or_Caretaker') selected @endif>No Security Guard or Caretaker</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="blood_group">Blood group</label>
                                    @if ($errors->has('blood_group'))
                                        <span class="text-danger">{{ $errors->first('blood_group') }}</span>
                                    @endif
                                    <input type="text" id="blood_group" name="blood_group" class="form-control" placeholder="" value="{{$user->userProfile->blood_group}}">
                                </div>

                                <div class="form-group">
                                    <label for="medical_condition">Medical Condition</label>
                                    @if ($errors->has('medical_condition'))
                                        <span class="text-danger">{{ $errors->first('medical_condition') }}</span>
                                    @endif
                                    <textarea id="medical_condition" name="medical_condition" class="form-control">{{$user->userProfile->medical_condition}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="hospitalization_history">Hospitalization history</label>
                                    @if ($errors->has('hospitalization_history'))
                                        <span class="text-danger">{{ $errors->first('hospitalization_history') }}</span>
                                    @endif
                                    <textarea id="hospitalization_history" name="hospitalization_history" class="form-control">{{$user->userProfile->hospitalization_history}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="personal_doctor_details">Personal doctor details</label>
                                    @if ($errors->has('personal_doctor_details'))
                                        <span class="text-danger">{{ $errors->first('personal_doctor_details') }}</span>
                                    @endif
                                    <textarea id="personal_doctor_details" name="personal_doctor_details" class="form-control">{{$user->userProfile->personal_doctor_details}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="sponsored_by">Sponsored by</label>
                                    @if ($errors->has('sponsored_by'))
                                        <span class="text-danger">{{ $errors->first('sponsored_by') }}</span>
                                    @endif
                                    <select id="sponsored_by" name="sponsored_by" class="form-control">
                                        <option value="0">Select</option>
                                        <option value="Self" @if($user->userProfile->sponsored_by == 'Self') selected @endif>Self</option>
                                        <option value="Others" @if($user->userProfile->sponsored_by == 'Others') selected @endif>Others</option>
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
