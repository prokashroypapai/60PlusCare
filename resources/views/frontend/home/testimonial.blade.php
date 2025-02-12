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
                                                        <img loading='lazy' width="90" height="90" class="img-fluid" src="{{ asset($testimonial->testimonialPicture->image_thumb) }}" alt="Feedback for {{env('APP_NAME')}} from {{$testimonial->name}}">
                                                    </div>
                                                </div>
                                                <div class="testimonial-caption">
                                                    <strong>{{$testimonial->name}}</strong>
                                                    <label> - {{$testimonial->designation}}</label>
                                                </div>
                                                <div class="star-ratings">
                                                    <ul class="rating">
                                                        @for($i=0; $i < 5; $i++)
                                                            @if($i <= $testimonial->rating)
                                                                <li>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                    </svg>
                                                                </li>
                                                            @else
                                                                <li>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                                    </svg>
                                                                </li>
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
                <img loading='lazy' class="prt-equal-height-image img-fluid w-100" src="{{asset('static/images/bgimage-2.webp')}}" alt="Testimonial background image for {{env('APP_NAME')}}">
            </div>
        </div>
    </div>
</section>
