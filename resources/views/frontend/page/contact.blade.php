@extends('frontend.layout.app')
@section('content')

    <!--site-main start-->
    <div class="site-main">

        <!-- contact-section -->
        <section class="prt-row conatct-section bg-layer-equal-height clearfix" style="background-image: linear-gradient(#f9fcf2, #f2f3fc)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="mt-15 mb-15">

                            <div class="conatct-section-item block-01 rounded shadow" style="padding-top: 15px;" id="formDiv">
                                <form id="contactForm">

                                    <!-- section title -->
                                    <div class="section-title title-style-center_text">
                                        <h3>Have any query? <i class="text-base-skin">Contact us!</i></h3>
                                        <p>
                                            Feel free submit the form and connect with us.
                                        </p>
                                    </div><!-- section title end -->

                                    <div class="form-group mb-3">
                                        <span class="text-danger" id="errorName"></span>
                                        <input type="text" id="name" placeholder="Name">
                                    </div>
                                    <div class="form-group mb-3">
                                        <span class="text-danger" id="errorMobile"></span>
                                        <input type="text" id="mobile" placeholder="Mobile">
                                    </div>
                                    <div class="form-group mb-3">
                                        <span class="text-danger" id="errorEmail"></span>
                                        <input type="text" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group mb-3">
                                        <span class="text-danger" id="errorComment"></span>
                                        <textarea id="comment" placeholder="Type your comment"></textarea>
                                    </div>
                                    <div class="form-group py-3">
                                        <button class="btn btn-success" id="registerBtn">Submit</button>
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

                    <div class="col-lg-8">
                        <div class="mt-15 mb-15">




                                        <div class="col-lg-12">
                                            <div class="spacing-26 bg-base-grey">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <h3 class="fs-28 mb-0">Why choose us? every baby!</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="accordion mt-40">
                                                            <!-- toggle -->
                                                            <div class="toggle">
                                                                <div class="toggle-title"><a href="#" class="active"><span class="number"></span> When should I enroll my child ?</a></div>
                                                                <div class="toggle-content show">
                                                                    <p>According to three years old is the ideal age to begin pre-school in India. A new concept has been observed in parents who delay the enrollment of their kids in formal schooling past the prescribed cut-off age. This is called “redshirting” or “academic redshirting</p>
                                                                </div>
                                                            </div><!-- toggle end -->
                                                            <!-- toggle -->
                                                            <div class="toggle">
                                                                <div class="toggle-title"><a href="#"><span class="number"></span> When will I know if my child has a place at Petit Kids ?</a></div>
                                                                <div class="toggle-content">
                                                                    <p>The Kindergarten comprises of Nursery, L.K.G and U.K.G. and admits children aged 2.6 years and above for Nursery as per the directive of the State government as of the 1st of June in the year the child is seeking admission. For grades, LKG and UKG the age criteria is 3.6 years and 4.6 years and above respectively.</p>
                                                                </div>
                                                            </div><!-- toggle end -->
                                                            <!-- toggle -->
                                                            <div class="toggle">
                                                                <div class="toggle-title"><a href="#"><span class="number"></span> What is the timetable for each of the groups ?</a></div>
                                                                <div class="toggle-content">
                                                                    <p>The Kindergarten comprises of Nursery, L.K.G and U.K.G. and admits children aged 2.6 years and above for Nursery as per the directive of the State government as of the 1st of June in the year the child is seeking admission. For grades, LKG and UKG the age criteria is 3.6 years and 4.6 years and above respectively.</p>
                                                                </div>
                                                            </div><!-- toggle end -->
                                                            <!-- toggle -->
                                                            <div class="toggle">
                                                                <div class="toggle-title"><a href="#"><span class="number"></span> How many children are in a group ?</a></div>
                                                                <div class="toggle-content">
                                                                    <p>Around 300 children are divided into two groups.</p>
                                                                </div>
                                                            </div><!-- toggle end -->
                                                            <!-- toggle -->
                                                            <div class="toggle">
                                                                <div class="toggle-title"><a href="#"><span class="number"></span> When will I know if my child has a place at Petit Kids ?</a></div>
                                                                <div class="toggle-content">
                                                                    <p>Younger children often suffer from separation anxiety as it is their first time away from mom or dad. However, if your child is willing and able to spend time away from you it is going to be easier for them to adjust to preschool and not upset the other children.</p>
                                                                </div>
                                                            </div><!-- toggle end -->
                                                        </div>
                                                    </div>
                                                </div><!-- row end -->
                                            </div>
                                        </div>
                            <!-- padding_bottom_zero-section end -->

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- contact-section end-->

    </div><!--site-main end-->
    <script type="text/javascript">
        $(document).ready(function () {

            $('#closeDiv').click(function () {
                $('#formDiv').show();
                $('#successDiv').hide();
            });
            $('#contactForm').on('submit',function(e){
                e.preventDefault();

                $('#successDiv').hide();
                $('#formDiv').show();

                let name = $('#name').val();
                let email = $('#email').val();
                let mobile = $('#mobile').val();
                let comment = $('#comment').val();

                $('#errorName').text('');
                $('#errorMobile').text('');
                $('#errorEmail').text('');
                $('#errorComment').text('');

                $.ajax({
                    url: "{{url('/api/contact')}}",
                    type:"POST",
                    data:{
                        name: name,
                        email: email,
                        mobile: mobile,
                        comment: comment,
                    },
                    beforeSend: function (){
                        $('#registerBtn').attr('disabled', true);
                    },
                    complete: function (){
                        $('#registerBtn').attr('disabled', false);
                    },
                    success:function(response){
                        if (response.status === 200) {
                            $("#contactForm")[0].reset();
                            $('#formDiv').hide();
                            $('#successDiv').show();
                        }
                        if (response.status === 'failed') {
                            $('#errorName').text(response.validation_error.name);
                            $('#errorMobile').text(response.validation_error.mobile);
                            $('#errorEmail').text(response.validation_error.email);
                            $('#errorComment').text(response.validation_error.comment);
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
        #contactForm label{
            font-size: 16px;
            font-weight: 500;
            color: #333333;
            margin-bottom: 8px;
        }
        #contactForm input[type=text], #contactForm textarea{
            color: #000;
            border-radius: 6px;
            border: 1px solid #cccccc;
            font-size: 14px;
            font-weight: 500;
        }
        #contactForm input[type=text]:focus, #contactForm textarea:focus{
            border: 1px solid #d80065;
        }
        #contactForm button{
            width: 100%;
            background-color: #d80065;
            color: #fff;
            border: 0;
            padding: 10px 0;
            font-size: 18px;
            font-weight: 600;
            outline: none;
        }
        #contactForm button:focus{
            outline: none;
        }
    </style>
@endsection
