@if(count(\App\Models\Feed::active()->get()) > 0)
    <!-- team-section -->
    <section class="prt-row about01-team-section clearfix">
        <div class="container">
            <div class="row slick_slider team-01 mt_15" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows":false, "autoplay":true, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 3}},{"breakpoint":767,"settings":{"slidesToShow": 2}},{"breakpoint":575,"settings":{"slidesToShow": 2}},{"breakpoint":480,"settings":{"slidesToShow": 2}}]}'>

                @foreach(\App\Models\Feed::active()->get() as $feed)
                    <div class="col-6 col-lg-3">
                        <div class="featured-imagebox featured-imagebox-team">
                            <div class="featured-thumbnail">
                                <img class="img-fluid"
                                     loading="lazy"
                                     src="{{ isset($feed->feedPicture->image_thumb) ? asset($feed->feedPicture->image_thumb) : asset(\App\Models\Picture::getDefaultImage()->image_thumb) }}"
                                     width="277"
                                     height="301"
                                     alt="{{ env('APP_NAME') }} banner"
                                     @if($feed->url != null)onclick='window.open("{{$feed->url}}", "_blank")' rel="nofollow" @endif>
                            </div>
                            @isset($feed->summary)
                                <div class="featured-content d-none d-md-block">
                                    <div class="featured-desc">
                                        <p>{{$feed->summary}}</p>
                                    </div>
                                </div>
                            @endisset
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- team-section -->
@endif
