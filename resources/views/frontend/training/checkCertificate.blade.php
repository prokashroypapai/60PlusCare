@extends('frontend.layout.app')
@section('content')

    <!--site-main start-->
    <div class="site-main">
        <!-- contact-form-section -->
        <section class="prt-row conatct-section bg-layer-equal-height clearfix" style="background-image: linear-gradient(#f9fcf2, #f2f3fc)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4">

                        <div class="mt-15 mb-15">
                            <div class="conatct-section-item block-01 rounded shadow" style="padding-top: 15px;" id="formDiv">
                                <h3 class="py-3 text-center">Check Certificate</h3>

                                <div class="form-group mb-3">
                                    <span class="text-danger" id="certificateNoError"></span>
                                    <input type="text" id="certificateNo" name="certificateNo" placeholder="Enter Certificate No" value="">
                                </div>

                                <div class="form-group py-3">
                                    <button type="submit" class="registerBtn" id="proceedBtn">
                                        Proceed
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                        </svg>
                                    </button>
                                    <span class="text-danger" id="errorDiv"></span>
                                </div>
                            </div>
                        </div>


                        <div class="mt-15 mb-15">
                            <div class="conatct-section-item block-01 rounded shadow position-relative" style="padding-top: 15px;" id="downloadDiv">
                                <span class="position-absolute float-end" style="right: 10px;top: 10px" id="closeDiv">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
                                    </svg>
                                </span>
                                <h3 class="py-3 text-center">Check Certificate</h3>

                                <div class="form-group mb-3">
                                    <table class="table table-bordered" id="certificateTable">
                                        <tr>
                                            <th>Certificate Status</th>
                                            <th><span id="certificateStatus">Unknown</span></th>
                                        </tr>
                                    </table>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- contact-form-section-end -->

    </div><!--site-main end-->

    <script type="text/javascript">
        $(document).ready(function (){

            $('#downloadDiv').hide();

            $('#closeDiv').click(function (){
                $('#formDiv').show();
                $('#downloadDiv').hide();
            });

            $('#proceedBtn').on('click',function(e){
                e.preventDefault();

                $('#downloadDiv').hide();
                $('#formDiv').show();

                let certificateNo = $('#certificateNo').val();

                $('#certificateNoError').text('');

                $.ajax({
                    url: "{{url('/api/checkCertificateNo')}}",
                    type:"POST",
                    data:{
                        certificate_no: certificateNo
                    },
                    beforeSend: function (){
                        $('#proceedBtn').attr('disabled', true);
                    },
                    complete: function (){
                        $('#proceedBtn').attr('disabled', false);
                    },
                    success:function(response){
                        if (response.status === 200) {
                            $('#formDiv').hide();
                            $('#downloadDiv').show();

                            $('#certificateNo').val('');

                            $('#certificateStatus').text('Success').addClass('text-success');
                            $('#certificateTable').append('<tr><th>Certificate No</th><th>' + response.participant.certificate_no + '</th></tr>' +
                                '<tr><td>Name</td><td>' + response.participant.name + '</td></tr>' +
                                '<tr><td>Training</td><td>' + response.participant.training_title + '</td></tr>' +
                                '<tr><td>Date</td><td>' + response.participant.training_date + '</td></tr>' +
                                '<tr><td>Place</td><td>' + response.participant.training_location + '</td></tr>');
                        }
                        if (response.status === 'failed') {
                            $('#certificateNoError').text(response.validation_error.certificate_no);
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

@endsection
