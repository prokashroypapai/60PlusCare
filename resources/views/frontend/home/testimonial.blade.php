<section class="prt-row service01-testimonial-section bg-layer-equal-height clearfix">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6">
                <div class="col-bg-img-eleven prt-bg prt-col-bgimage-yes prt-left-span bg-base-dark spacing-19 z-index-2">
                    <div class="prt-col-wrapper-bg-layer prt-bg-layer">
                        <div class="prt-col-wrapper-bg-layer-inner"></div>
                    </div>
                    <div class="layer-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="slick_slider testimonial-02" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows":false, "autoplay":true, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 1}},{"breakpoint":840,"settings":{"slidesToShow": 1}}]}'>
                                    @foreach(\App\Models\Testimonial::active()->skip(0)->limit(3)->get() as $testimonial)
                                        <div class="testimonials style2">
                                            <div class="testimonial-content">
                                                <div class="testimonial-avatar">
                                                    <div class="testimonial-img">
                                                        <img width="90" height="90" class="img-fluid" src="{{ asset($testimonial->testimonialPicture->image_thumb) }}" alt="testimonial-img">
                                                    </div>
                                                </div>
                                                <div class="testimonial-caption">
                                                    <h3>{{$testimonial->name}}</h3>
                                                    <label> - {{$testimonial->designation}}</label>
                                                </div>
                                                <div class="star-ratings">
                                                    <ul class="rating">
                                                        @for($i=0; $i<=5; $i++)
                                                            @if($i <= $testimonial->rating)
                                                                <li><i class="fa fa-star"></i></li>
                                                            @else
                                                                <li><i class="fa fa-star-o"></i></li>
                                                            @endif
                                                        @endfor
                                                    </ul>
                                                </div>
                                                <blockquote>
                                                    {{$testimonial->comment}}
                                                </blockquote>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-bg-img-two prt-bg prt-col-bgimage-yes prt-right-span">
                    <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                    <div class="layer-content"></div>
                </div>
                <img class="prt-equal-height-image img-fluid w-100" src="{{asset('static/images/bgimage-2.jpg')}}" alt="bg-image">
            </div>
        </div>
    </div>
</section>
