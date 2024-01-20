@extends('frontend.layout.app')
@section('content')

    <!--site-main start-->
    <div class="site-main">

        <!-- conatct-section -->
        <section class="prt-row conatct-section bg-layer-equal-height clearfix" style="background-image: linear-gradient(#f9fcf2, #f2f3fc)">
            <div class="container">
                <div class="row justify-content-center">
                    <!--<div class="col-lg-4">
                        <img src="https://pbs.twimg.com/media/FDZuWk_VgAgKWZ9?format=jpg&name=medium" class="img-fluid">
                    </div>-->
                    <div class="col-lg-4">
                        <div class="mt-15 mb-15">
                            <div class="conatct-section-item block-01 rounded shadow" style="padding-top: 15px;" id="formDiv">
                                <form id="registerForm">
                                    <div class="form-group mb-3 text-center">
                                        <img src="{{ asset('static/images/logo.png') }}" class="img-fluid" style="max-width: 200px; height: auto"/>
                                    </div>
                                    <h5 class="text-center">Register</h5>
                                    <div class="form-group mb-3">
                                        <span class="text-danger" id="nameError"></span>
                                        <input type="text" id="name" placeholder="Name">
                                    </div>
                                    <div class="form-group mb-3">
                                        <span class="text-danger" id="emailError"></span>
                                        <input type="text" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group mb-3">
                                        <span class="text-danger" id="mobileError"></span>
                                        <input type="text" id="mobile" placeholder="Mobile">
                                    </div>
                                    <div class="form-group mb-3">
                                        <span class="text-danger" id="cityError"></span>
                                        <input type="text" id="city" placeholder="City">
                                    </div>
                                    <div class="form-group py-3">
                                        <button class="btn btn-success" id="registerBtn">Register</button>
                                    </div>
                                    <div id="errorDiv"></div>
                                </form>
                            </div>

                            <div class="conatct-section-item block-01 position-relative" style="padding-top: 15px;background-color: #8a8d1b; display: none" id="successDiv">
                                <span style="position: absolute; right: -15px; top: -15px" id="closeDiv">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000" class="bi bi-x-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </span>
                                <h1 class="text-white">
                                    Thank you for your interest towards {{env('APP_NAME')}}
                                </h1>

                                <p class="text-white">
                                    Our representative will contact you soon
                                </p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- conatct-section end-->

    </div><!--site-main end-->
    <script type="text/javascript">
        $(document).ready(function (){

            $('#closeDiv').click(function (){
                $('#formDiv').show();
                $('#successDiv').hide();
            });

            $('#registerForm').on('submit',function(e){
                e.preventDefault();

                $('#successDiv').hide();
                $('#formDiv').show();

                let package_id = null;
                let name = $('#name').val();
                let email = $('#email').val();
                let mobile = $('#mobile').val();
                let city = $('#city').val();

                $('#nameError').text('');
                $('#emailError').text('');
                $('#mobileError').text('');
                $('#cityError').text('');

                $.ajax({
                    url: "{{url('/api/registerMember')}}",
                    type:"POST",
                    data:{
                        package_id:package_id,
                        name:name,
                        email:email,
                        mobile:mobile,
                        city:city,
                    },
                    beforeSend: function (){
                        $('#registerBtn').attr('disabled', true);
                    },
                    complete: function (){
                        $('#registerBtn').attr('disabled', false);
                    },
                    success:function(response){
                        //console.log(response);
                        if (response.status === 200) {
                            $("#registerForm")[0].reset();
                            $('#formDiv').hide();
                            $('#successDiv').show();
                        }
                        if (response.status === 'failed') {
                            $('#nameError').text(response.validation_error.name);
                            $('#emailError').text(response.validation_error.email);
                            $('#mobileError').text(response.validation_error.mobile);
                            $('#cityError').text(response.validation_error.city);
                        }
                        if (response.status === 404) {
                            $('#errorDiv').text(response.msg);
                        }
                    },
                    error: function(response) {
                        console.log(response);
                    }
                });
            });
        });
    </script>
    <style>
        #registerForm label{
            font-size: 16px;
            font-weight: 500;
            color: #333333;
            margin-bottom: 8px;
        }
        #registerForm input[type=text]{
            color: #000;
            border-radius: 6px;
            border: 1px solid #cccccc;
            font-size: 14px;
            font-weight: 500;
        }
        #registerForm input[type=text]:focus{
            border: 1px solid #d80065;
        }
        #registerForm button{
            width: 100%;
            background-color: #d80065;
            color: #fff;
            border: 0;
            padding: 10px 0;
            font-size: 18px;
            font-weight: 600;
            outline: none;
        }
        #registerForm button:focus{
            outline: none;
        }
    </style>
@endsection
