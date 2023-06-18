@extends('frontend.layout.app')
@section('content')

    <!-- page-title -->
    <div class="prt-page-title-row prt-bg prt-bgimage-yes" style="background-image: url({{asset('static/images/bgimage-8.jpg')}})">
        <div class="prt-page-title-row-inner prt-bg-layer bg-base-bodycolor">
            <div class="prt-page-title-row-wrapper-inner"></div>
        </div>
        <div class="layer-content">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="prt-page-title-row-heading">
                            <div class="page-title-heading">
                                <h2 class="title">Contact us</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                    <span>
                                        <a href="{{url('/')}}">Home</a>
                                    </span>
                                <span>
                                        <a href="#">Contact Us</a>
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title end -->

    <!--site-main start-->
    <div class="site-main">

        <!-- conatct-section -->
        <section class="prt-row conatct-section bg-layer-equal-height clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mt-15 mb-15">
                            <div class="conatct-section-item block-01 ">
                                <img width="164" height="45" class="img-fluid auto_size" src="{{asset('static/images/logo.png')}}" alt="logo-img">
                                <h3>Office Address</h3>
                                <p>
                                    60 Plus Care, Registered Office, Elder Care Center Apollo Diagnostics, P-43/4, Jadunath Mukherjee Road, Jadu Colony, Behala, Kolkata 700034
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mt-15 mb-15">
                            <div class="col-bg-img-eighteen prt-bg prt-col-bgimage-yes bg-base-skin">
                                <div class="prt-col-wrapper-bg-layer prt-bg-layer">
                                    <div class="prt-col-wrapper-bg-layer-inner"></div>
                                </div>
                                <div class="layer-content">
                                    <div class="spacing-34">
                                        <h3 class="fs-30 text-base-white text-center res-991-fs-28">Quick Connect <br>Whatsapp Now!</h3>
                                        <div class="text-center pt-20">
                                            <a class="prt-btn prt-btn-shape-round prt-btn-style-fill prt-btn-color-dark"
                                               href="https://wa.me/918296111777">Chat with Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mt-15 mb-15">
                            <div class="conatct-section-item block-02">
                                <h3 class="pt-0">Other Information</h3>
                                <ul class="prt-contact-details-list clearfix">
                                    <li>
                                        <div class="prt-team-list-title">Email Us: </div>
                                        <div class="prt-team-list-value"><a href="mailto:60pcpl@gmail.com">60pcpl@gmail.com</a></div>
                                    </li>
                                    <li>
                                        <div class="prt-team-list-title">Email: </div>
                                        <div class="prt-team-list-value"> <a href="mailto:info@60plusclinic.com">info@60plusclinic.com</a></div>
                                    </li>
                                </ul>
                                <div class="contact-social-wrapper">
                                    <ul class="social-icons social-circle">
                                        <li class="social-facebook">
                                            <a target="_blank" href="https://www.facebook.com/60PlusClinic"><i class="icon-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="social-twitter">
                                            <a target="_blank" href="https://twitter.com/60PlusClinic"><i class="icon-twitter" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- conatct-section end-->

        <!-- contact-form-section -->
        <section class="prt-row contactus-contact-form-section bg-base-grey clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h2>Have any query? <i class="text-base-skin">Contact us!</i></h2>
                            </div>
                            <div class="title-desc">
                                <p>
                                    Feel free submit the form and connect with us.
                                </p>
                            </div>
                        </div><!-- section title end -->
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-7 pr-50 res-991-pr-0">
                        <div class="col-bg-img-seventeen prt-bg prt-col-bgimage-yes">
                            <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                            <div class="layer-content"></div>
                        </div>
                        <img class="prt-equal-height-image" src="{{asset('static/images/bgimage-21.jpg')}}" alt="col-bgimage-17">
                    </div>
                    <div class="col-lg-5">
                        <div class="bg-base-white spacing-33">
                            <form class="contact_form style2 clearfix" id="contactForm">
                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="text-danger" id="errorName"></span>
                                        <input id="name" type="text" value="" placeholder="Your Name">
                                    </div>

                                    <div class="col-md-12">
                                        <span class="text-danger" id="errorMobile"></span>
                                        <input id="mobile" type="text" value="" placeholder="Your Mobile">
                                    </div>

                                    <div class="col-md-12">
                                        <span class="text-danger" id="errorEmail"></span>
                                        <input id="email" type="text" value="" placeholder="Your Email">
                                    </div>

                                    <div class="col-md-12">
                                        <span class="text-danger" id="errorComment"></span>
                                        <textarea id="comment" rows="4" placeholder="Your comment"></textarea>
                                    </div>

                                    <div class="mt-5">
                                        <button type="submit" value="submit">Submit</button>
                                        <p class="text-success" id="success-message"></p>
                                        <p class="text-danger" id="error-message"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-form-section-end -->

    </div><!--site-main end-->
    <script type="text/javascript">

        $('#contactForm').on('submit',function(e){
            e.preventDefault();

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
                success:function(response){
                    if (response.status === 200) {
                        $('#success-message').text(response.msg);
                        $("#contactForm")[0].reset();
                    }
                    if (response.status === 'failed') {
                        $('#errorName').text(response.validation_error.name);
                        $('#errorMobile').text(response.validation_error.mobile);
                        $('#errorEmail').text(response.validation_error.email);
                        $('#errorComment').text(response.validation_error.comment);
                    }
                    if (response.status === 404) {
                        $('#error-message').text(response.msg);
                    }
                },
                error: function(response) {
                    console.log(response);
                }
            });
        });
    </script>
@endsection
