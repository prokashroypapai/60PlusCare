@extends('frontend.layout.app')
@section('content')

    <!-- page-title -->
    <div class="prt-page-title-row prt-bg prt-bgimage-yes" style="background-image: url({{asset('static/images/bgimage-13.jpg')}})">
        <div class="prt-page-title-row-inner prt-bg-layer bg-base-bodycolor">
            <div class="prt-page-title-row-wrapper-inner"></div>
        </div>
        <div class="layer-content">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="prt-page-title-row-heading">
                            <div class="page-title-heading">
                                <h2 class="title">Diet & Nutrition</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a href="{{url('/')}}">Home</a>
                                </span>
                                <span>
                                    <a href="#">Diet & Nutrition</a>
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

        <!-- about-section -->
        <section class="prt-row about01-about-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="pr-30 res-1199-pr-0">
                            <div class="section-title mb-30">
                                <div class="title-header">
                                    <h2>Diet & Nutrition</h2>
                                </div>
                            </div>
                            <div class="">
                                <h3>Carbohydrates</h3>

                                <p>Carbohydrate consumed in food yields 3.87 kilocalories of energy per gram for simple sugars,[18] and 3.57 to 4.12 kilocalories per gram for complex carbohydrate in most other foods.[19] Relatively high levels of carbohydrate are associated with processed foods or refined foods made from plants, including sweets, cookies and candy, table sugar, honey, soft drinks, breads and crackers, jams and fruit products, pastas and breakfast cereals. Lower amounts of carbohydrate are usually associated with unrefined foods, including beans, tubers, rice, and unrefined fruit[dubious – discuss].[20] Animal-based foods generally have the lowest carbohydrate levels, although milk does contain a high proportion of lactose.</p>

                                <p>Nutritionists often refer to carbohydrates as either simple or complex. However, the exact distinction between these groups can be ambiguous. The term complex carbohydrate was first used in the U.S. Senate Select Committee on Nutrition and Human Needs publication Dietary Goals for the United States (1977) where it was intended to distinguish sugars from other carbohydrates (which were perceived to be nutritionally superior).[25] However, the report put "fruit, vegetables and whole-grains" in the complex carbohydrate column, despite the fact that these may contain sugars as well as polysaccharides. This confusion persists as today some nutritionists use the term complex carbohydrate to refer to any sort of digestible saccharide present in a whole food, where fiber, vitamins and minerals are also found (as opposed to processed carbohydrates, which provide energy but few other nutrients). The standard usage, however, is to classify carbohydrates chemically: simple if they are sugars (monosaccharides and disaccharides) and complex if they are polysaccharides (or oligosaccharides).[26]</p>
                            </div>
                            <div class="row g-0 mt-30 res-991-mt-20">
                                <div class="col-md-6">
                                    <ul class="prt-list style3">
                                        <li>Get services for all Ages Childcare.</li>
                                        <li>Use at Last Minutes Requests.</li>
                                        <li>Your infant is in secure hands.</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 res-767-mt-12">
                                    <ul class="prt-list style3">
                                        <li>Create a dream for the future.</li>
                                        <li>Get a  glowingly brilliant service.</li>
                                        <li>Get the best preschool experts.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 res-1199-mt-30 align-self-center">
                        <div class="prt_single_image-wrapper text-start">
                            <img width="686" height="568" class="img-fluid" src="{{url('static/images/nutrition_carbohydrate.jpg')}}" alt="Diet & Nutrition Service at {{env('APP_NAME')}}">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end-->

    </div><!--site-main end-->
@endsection
