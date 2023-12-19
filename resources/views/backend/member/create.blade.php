@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Create Member</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/members')}}">Members</a>
                                </li>
                                <li class="breadcrumb-item active">Create Member</li>
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

                            <form id="memberForm">

                                <div class="form-group" id="defaultParentDiv">
                                    <input type="checkbox" id="is_default_parent" name="is_default_parent" value="1"> <label for="is_default_parent">Make this Default Registered User</label>
                                </div>

                                <script>
                                    $(document).ready(function(){
                                        $('#is_default_parent').click(function(){
                                            if($(this).prop("checked") == true){
                                                $('#memberDataFetchDiv').hide();
                                            }
                                            else if($(this).prop("checked") == false){
                                                $('#memberDataFetchDiv').show();
                                            }
                                        });
                                    });
                                </script>

                                <div id="memberDataFetchDiv">
                                    <div class="form-group">
                                        <label for="registration_no">Parent Registration Number / Mobile</label>
                                        <span class="text-danger" id="userError"></span>
                                        <input type="text" id="registration_no" name="registration_no" class="form-control" placeholder="Parent Registration Number / Mobile" value="{{ app('request')->input('id') }}">

                                        <input type="hidden" id="userId" value="default" readonly>

                                        <div id="loaderDiv" style="display: none"><img src="{{ asset('static/images/loader.gif') }}"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="userName">Parent User Name</label>
                                        <input type="text" id="userName" name="userName" class="form-control" readonly>
                                        <input type="text" id="userMobile" name="userMobile" class="form-control" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Register For : </label>
                                        <span class="text-danger" id="userTypeError"></span>
                                        <input type="radio" name="userType" id="self" value="self"> <label for="self" class="mr-5">Self</label>
                                        <input type="radio" name="userType" id="family_member" value="family_member"> <label for="family_member">Family Member</label>

                                        <button id="getValue" class="btn btn-primary">Get Data</button>
                                    </div>
                                </div>

                                <div>
                                    <span class="text-danger" id="registrationNoError"></span>
                                </div>

                                <div class="form-group">
                                    <label for="name">Member Name</label>
                                    <span class="text-danger" id="nameError"></span>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter Member Name" value="">
                                </div>

                                <div class="form-group">
                                    <label for="mobile">Member Mobile</label>
                                    <span class="text-danger" id="mobileError"></span>
                                    <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Enter Member Mobile" value="">
                                </div>

                                <div class="form-group">
                                    <label for="is_policy">Having any policy?</label>
                                    <select id="is_policy" name="is_policy" class="form-control">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="policy_number">Policy Number</label>
                                    <span class="text-danger" id="policyError"></span>
                                    <input type="text" id="policy_number" name="policy_number" class="form-control" value="">
                                </div>

                                <!--<div class="form-group">
                                    <input type="checkbox" id="no_auto_number" name="no_auto_number" value="1">
                                    <label for="no_auto_number">Do not use Auto Registration Number</label>
                                </div>-->

                                <button id="submitBtn" class="btn btn-primary waves-effect waves-light">Save</button>

                            </form>

                            <span id="errorMsg" class="text-danger"></span>
                            <span id="successMsg" class="text-success"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#mobile').focus(function(){
            if($(this).val().substring(0,3) !== '+91'){
                $(this).val("+91" + $(this).val());
            }
        });

        $(document).ready(function (){
            $('#submitBtn').attr('disabled', false);
            $('#userId').val('default');
            $('#userName').val('');
            $('#userMobile').val('');

            $('#registration_no').blur(function (e){
                e.preventDefault();

                let registration_no = $("#registration_no").val();

                $.ajax({
                    url: "{{url('/api/userDetails')}}",
                    type: "POST",
                    data: {
                        registration_no: $('#registration_no').val(),
                    },
                    beforeSend: function(){
                        $("#loaderDiv").show();
                    },
                    complete: function(){
                        $("#loaderDiv").hide();
                    },
                    success: function (response){
                        if(response.status === 200){
                            //$('#submitBtn').attr('disabled', false);
                            $('#userId').val(response.user.id);
                            $('#userName').val(response.user.name);
                            $('#userMobile').val(response.user.mobile);
                        }
                        if(response.status === 404){
                            //$('#submitBtn').attr('disabled', true);
                            $('#userId').val('default');
                            $('#userName').val('This is Default Parent User');
                            $('#userMobile').val('');
                        }
                        if(response.status === 'failed'){
                            //$('#submitBtn').attr('disabled', true);
                            $('#userId').val('default');
                            $('#userName').val('');
                            $('#userMobile').val('');
                        }
                    },
                    error: function (error){
                        console.log(error);
                    }
                });
            });

            $('#getValue').click(function (e){
               e.preventDefault();

                $('#errorMsg').text('');
                $('#successMsg').text('');

                let userType = $("input[name=userType]:checked").val();

                if(userType === undefined){
                    $('#errorMsg').text('Please select user Type');
                    return false;
                }

                else if(userType === 'self'){
                    $('#name').val($('#userName').val());
                    $('#mobile').val($('#userMobile').val());
                }
                else if(userType === 'family_member') {
                    $('#name').val('');
                    $('#mobile').val('');
                }
                else{
                    $('#errorMsg').text('Not getting any data');
                    $('#successMsg').text();
                }

            });

            /*$('#mobile').blur(function (){
                var mobileVal = $(this).val();
                var nameVal = $('#name').val();

                if($.inArray(mobileVal, ['+91', ""]) && nameVal === ""){
                    $('#submitBtn').attr('disabled', true);
                }
                else{
                    $('#submitBtn').attr('disabled', false);
                }
            });*/

            $('#memberForm').on('submit', function (e){
                e.preventDefault();

                let registration_no = $('#registration_no').val();
                let userId = $('#userId').val();
                let userType = $("input[name=userType]:checked").val();
                let name = $('#name').val();
                let mobile = $('#mobile').val();
                let is_policy = $('#is_policy').val();
                let policy_number = $('#policy_number').val();

                $('#userError').text('');
                $('#registrationNoError').text('');
                $('#userTypeError').text('');
                $('#nameError').text('');
                $('#mobileError').text('');
                $('#policyError').text('');

                $.ajax({
                    url: "{{url('/api/createMember')}}",
                    type: "POST",
                    data: {
                        registration_no: registration_no,
                        is_default_parent: $('input#is_default_parent').prop('checked'),
                        userId: userId,
                        userType: userType,
                        name: name,
                        mobile: mobile,
                        is_policy: is_policy,
                        policy_number: policy_number
                    },
                    beforeSend: function(){
                        $("#loaderDiv").show();
                    },
                    complete: function(){
                        $("#loaderDiv").hide();
                    },
                    success: function (response){
                        if(response.status === 200){
                            $("#memberForm")[0].reset();
                            alert('Saved successfully');
                        }
                        if(response.status === 404){
                            $('#errorDiv').text(response.msg);
                        }
                        if(response.status === 'failed'){
                            $('#userError').text(response.validation_error.userId);
                            $('#registrationNoError').text(response.validation_error.registration_no);
                            $('#userTypeError').text(response.validation_error.userType);
                            $('#nameError').text(response.validation_error.name);
                            $('#mobileError').text(response.validation_error.mobile);
                            $('#policyError').text(response.validation_error.policy_number);
                        }
                    },
                    error: function (error){
                        console.log(error);
                    }
                });
            });
        });
    </script>
@endsection
