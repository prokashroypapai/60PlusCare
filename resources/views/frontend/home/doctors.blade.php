<section class="prt-row about01-team-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h2>Our Team Of <span>Doctors & Elder care</span> Professionals</h2>
                    </div>
                    <div class="title-desc">
                        <p>
                            Doctors owned and Doctors operated Elder Care Services in Kolkata.
                        </p>
                    </div>
                </div><!-- section title end -->
            </div>
        </div>
        <div class="row slick_slider team-01 mt_15" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows":false, "autoplay":true, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 3}},{"breakpoint":767,"settings":{"slidesToShow": 2}},{"breakpoint":575,"settings":{"slidesToShow": 1}},{"breakpoint":480,"settings":{"slidesToShow": 1}}]}'>

            @foreach(\App\Models\Doctor::active()->where('is_home', true)->get() as $doctor)
                <div class="col-lg-3">
                    <div class="featured-imagebox featured-imagebox-team">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{asset($doctor->doctorPicture->image_thumb)}}" width="277" height="301" alt="image">
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="{{url('doctors/?id=' . $doctor->id)}}">{{$doctor->doctor_name}}</a></h3>
                            </div>
                            <div class="featured-desc">
                                <p>{{$doctor->doctor_designation}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-lg-12 py-5 text-center">
                <button class="btn btn-success" onclick='window.location.href="{{url('doctors')}}"'>See All Our Associate Doctors</button>
            </div>
        </div>
    </div>
</section>
