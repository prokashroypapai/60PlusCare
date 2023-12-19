<section class="prt-row about01-team-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h3>Our Team Of <span>Doctors & Elder care</span> Professionals</h3>
                    </div>
                    <div class="title-desc">
                        <p>
                            Doctors owned and Doctors operated Elder Care Services in Kolkata.
                        </p>
                    </div>
                </div><!-- section title end -->
            </div>
        </div>
        <div class="row slick_slider team-01 mt_15" data-slick='{"slidesToShow": 6, "slidesToScroll": 1, "arrows":false, "autoplay":true, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 3}},{"breakpoint":767,"settings":{"slidesToShow": 2}},{"breakpoint":575,"settings":{"slidesToShow": 1}},{"breakpoint":480,"settings":{"slidesToShow": 1}}]}'>

            @foreach(\App\Models\Doctor::active()->where('is_home', true)->get() as $doctor)
                <div class="col-lg-2">
                    <div class="featured-imagebox featured-imagebox-team">
                        <div class="featured-thumbnail">
                            <img loading='lazy' class="img-fluid" src="{{asset($doctor->doctorPicture->image_thumb)}}" width="277" height="301" alt="{{$doctor->doctor_name}} on {{env('APP_NAME')}}">
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <strong><a href="{{url('doctors/?id=' . $doctor->id)}}">{{$doctor->doctor_name}}</a></strong>
                            </div>
                            <div class="featured-desc mt-2">
                                <p>{{$doctor->doctor_designation}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-lg-12 py-5 text-center">
                <button class="registerBtn shadow" onclick='window.location.href="{{url('doctors')}}"'>See All Our Associate Doctors</button>
            </div>
        </div>
    </div>
</section>
