@extends('frontend.layout.app')
@section('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js" integrity="sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css" integrity="sha512-34s5cpvaNG3BknEWSuOncX28vz97bRI59UnVtEEpFX536A7BtZSJHsDyFoCl8S7Dt2TPzcrCEoHBGeM4SUBDBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--site-main start-->
    <div class="site-main">

        <!--member-info-section-->
        <section class="prt-row team-details-member-info-section bg-base-grey clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="prt-team-member-single-content">
                            <div class="prt-team-member-single-content-area">
                                <div class="prt-bg prt-col-bgcolor-yes bg-base-grey overflow-visible">
                                    <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                                    <div class="layer-content">
                                        <div class="row g-0">
                                            <div class="col-xl-6">
                                                <!-- prt-featured-wrapper -->
                                                <div class="prt-featured-wrapper">
                                                    <div class="featured-thumbnail">
                                                        <img width="672" height="472" class="img-fluid" src="{{asset(isset($training->trainingPicture->image_full) ? $training->trainingPicture->image_full : \App\Models\Picture::getDefaultImage()->image_full)}}" alt="image">
                                                    </div>
                                                </div><!-- prt-featured-wrapper end-->
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="prt-team-member-detail">
                                                    <div class="prt-team-member-single-list">
                                                        <h1 class="prt-team-member-single-title">
                                                            {{$training->training_title}}
                                                        </h1>
                                                        <div class="prt-short-desc">
                                                            {{$training->training_details}}
                                                        </div>
                                                        <h5>Rules</h5>
                                                        <p>
                                                            {{ $training->training_rules }}
                                                        </p>
                                                        <h5>Last Date:</h5>
                                                        <p>
                                                            {{ \Carbon\Carbon::parse($training->date_expiry)->format('d M, Y') }}
                                                        </p>


                                                        <div class="mt-15 mb-15 border-top">
                                                            <div class="conatct-section-item block-01" style="padding-top: 15px;" id="formDiv">

                                                                <form id="participantForm">
                                                                    <input type="hidden" id="trainingId" value="{{ $training->id }}">

                                                                    <h3 class="text-center">Join The Training</h3>
                                                                    <div class="form-group mb-3">
                                                                        <label for="name">Name:</label>
                                                                        <span class="text-danger" id="nameError"></span>
                                                                        <input type="text" id="name" placeholder="Name">
                                                                    </div>
                                                                    <div class="form-group mb-3">
                                                                        <label for="mobile">Mobile:</label>
                                                                        <span class="text-danger" id="mobileError"></span>
                                                                        <input type="text" id="mobile" placeholder="Mobile">
                                                                    </div>
                                                                    <div class="form-group mb-3">
                                                                        <label for="email">Email:</label>
                                                                        <span class="text-danger" id="emailError"></span>
                                                                        <input type="text" id="email" placeholder="Email">
                                                                    </div>
                                                                    <div class="form-group mb-3">
                                                                        <label for="address">Address:</label>
                                                                        <span class="text-danger" id="addressError"></span>
                                                                        <input type="text" id="address" placeholder="Type Address">
                                                                    </div>
                                                                    <div class="form-group mb-3">
                                                                        <label for="city">City:</label>
                                                                        <span class="text-danger" id="cityError"></span>
                                                                        <input type="text" id="city" placeholder="City">
                                                                    </div>
                                                                    <div class="form-group mb-3">
                                                                        <label for="dob">Date of Birth:</label>
                                                                        <span class="text-danger" id="dobError"></span>
                                                                        <input type="text" id="dob" placeholder="dd-mm-YYYY" class="datepicker" readonly>
                                                                    </div>
                                                                    <div class="form-group py-3">
                                                                        @if($training->is_expired == \App\Models\Activity\Training::EXPIRED_YES)
                                                                            <span class="col-12 btn btn-secondary" id="">Expired</span>
                                                                        @else
                                                                            <button class="btn btn-success" id="registerBtn">Join Now</button>
                                                                        @endif
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--member-info-section-end-->

    </div><!--site-main end-->
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
    <script type="text/javascript">
        $(document).ready(function (){

            $('#closeDiv').click(function (){
                $('#formDiv').show();
                $('#successDiv').hide();
            });

            $('#participantForm').on('submit',function(e){
                e.preventDefault();

                $('#successDiv').hide();
                $('#formDiv').show();

                let training_id = $('#trainingId').val();
                let name = $('#name').val();
                let mobile = $('#mobile').val();
                let email = $('#email').val();
                let address = $('#address').val();
                let city = $('#city').val();
                let dob = $('#dob').val();

                $('#nameError').text('');
                $('#emailError').text('');
                $('#mobileError').text('');

                $.ajax({
                    url: "{{url('/api/createParticipant')}}",
                    type:"POST",
                    data:{
                        training_id: training_id,
                        name: name,
                        mobile: mobile,
                        email: email,
                        address: address,
                        city: city,
                        dob: dob
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
                            $("#participantForm")[0].reset();
                            $('#formDiv').hide();
                            $('#successDiv').show();
                        }
                        if (response.status === 'failed') {
                            $('#nameError').text(response.validation_error.name);
                            $('#emailError').text(response.validation_error.email);
                            $('#mobileError').text(response.validation_error.mobile);
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
        #participantForm label{
            font-size: 16px;
            font-weight: 500;
            color: #333333;
            margin-bottom: 8px;
        }
        #participantForm input[type=text], #participantForm textarea{
            color: #000;
            border-radius: 6px;
            border: 1px solid #cccccc;
            font-size: 14px;
            font-weight: 500;
        }
        #participantForm input[type=text]:focus, #participantForm textarea:focus{
            border: 1px solid #d80065;
        }
        #participantForm button{
            width: 100%;
            background-color: #d80065;
            color: #fff;
            border: 0;
            padding: 10px 0;
            font-size: 18px;
            font-weight: 600;
            outline: none;
        }
        #participantForm button:focus{
            outline: none;
        }
    </style>
@endsection
