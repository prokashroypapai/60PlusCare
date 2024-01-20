<section class="prt-row about01-team-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h3>
                            <span>Honorary Advisors</span> of {{env('APP_NAME')}}
                        </h3>
                    </div>
                    <div class="title-desc">
                        <p>
                            Respected Doctors who are advisors of 60 Plus Care
                        </p>
                    </div>
                </div><!-- section title end -->
            </div>
        </div>

        <div class="row slick_slider team-01 mt_15" data-slick='{"slidesToShow": 6, "slidesToScroll": 1, "arrows":false, "autoplay":true, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 4}},{"breakpoint":767,"settings":{"slidesToShow": 2}},{"breakpoint":575,"settings":{"slidesToShow": 2}},{"breakpoint":480,"settings":{"slidesToShow": 2}}]}'>

            <div class="col-lg-2">
                <div class="featured-imagebox featured-imagebox-team">
                    <div class="featured-thumbnail">
                        <img loading="lazy" src="{{asset('static/images/prof-dr-sukumar-mukherjee.webp')}}" width="277" height="auto" alt="Prof Dr Sukumar Mukherjee on {{ env('APP_NAME') }}">
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <strong>
                                <a href="#">Prof Dr Sukumar Mukherjee</a>
                            </strong>
                        </div>
                        <div class="featured-desc mt-2">
                            <p>Chief Advisor of Health, West Bengal</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="featured-imagebox featured-imagebox-team">
                    <div class="featured-thumbnail">
                        <img loading="lazy" class="img-fluid" src="{{asset('static/images/prof-suhita-chatterjee.webp')}}" width="277" height="auto" alt="Prof Dr Suhita Chatterjee on {{env('APP_NAME')}}">
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <strong>
                                <a href="#">Prof Dr Suhita Chatterjee</a>
                            </strong>
                        </div>
                        <div class="featured-desc mt-2">
                            <p>Department of Humanities & Social Sciences, IIT Kharagpur</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="featured-imagebox featured-imagebox-team">
                    <div class="featured-thumbnail">
                        <img loading="lazy" class="img-fluid" src="{{asset('static/images/dr-nilanjana-ghosh.webp')}}" width="277" height="auto" alt="Dr Nilanjana Ghosh on {{env('APP_NAME')}}">
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <strong>
                                <a href="#">Dr Nilanjana Ghosh</a>
                            </strong>
                        </div>
                        <div class="featured-desc mt-2">
                            <p>Assistant Professor, Department of Community Medicine, AIIMS Gauhati</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="featured-imagebox featured-imagebox-team">
                    <div class="featured-thumbnail">
                        <img loading="lazy" class="img-fluid" src="{{asset('static/images/koushik-nath.webp')}}" width="277" height="auto" alt="Koushik Nath on {{env('APP_NAME')}}">
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <strong>
                                <a href="#">Koushik Nath</a>
                            </strong>
                        </div>
                        <div class="featured-desc mt-2">
                            <p>Vice President - Information Technology, ITC</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
