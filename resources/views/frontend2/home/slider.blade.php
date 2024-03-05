<div class="col-12 col-sm-12 col-md-8">
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">

            @foreach(\App\Models\Slider::active()->get() as $slider)
                <div class="carousel-item {{ $loop->first ? 'active' : null }}">
                    <img loading="lazy" src="{{ asset($slider->sliderPicture->image_full) }}" class="d-block w-100" alt="{{ env('APP_NAME') }} elder care service in Kolkata">
                </div>
            @endforeach

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
