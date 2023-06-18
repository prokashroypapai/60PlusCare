@extends('frontend.layout.app')
@section('content')

    <!-- page-title -->
    <div class="prt-page-title-row prt-bg prt-bgimage-yes" style="background-image: url({{asset('static/images/bgimage-14.jpg')}})">
        <div class="prt-page-title-row-inner prt-bg-layer bg-base-bodycolor">
            <div class="prt-page-title-row-wrapper-inner"></div>
        </div>
        <div class="layer-content">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="prt-page-title-row-heading">
                            <div class="page-title-heading">
                                <h2 class="title">Physiotherapy</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                    <span>
                                        <a href="{{url('/')}}">Home</a>
                                    </span>
                                <span>
                                        <a href="#">Physiotherapy</a>
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

        <!-- desc-section -->
        <section class="prt-row service-detail06-desc-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="prt_single_image-wrapper text-center">
                            <img class="img-fluid" src="{{asset('static/images/bgimage-15.jpg')}}" alt="image">
                        </div>
                    </div>
                </div>
                <div class="row mt-50 res-991-mt-30">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <div class="title-header">
                                <h2>Physiotherapy</h2>
                            </div>
                            <div class="title-desc">
                                <p>
                                    REVIVE Physiotherapy and advanced Rehabilitation centre is one of the best centre provides OPD services,Research and Innovations in the field of Physiotherapy.
                                </p>
                                <p>
                                    Eqquiped with Latest inventions with High Skilled Committed Physiotherapists are the strength of our success.
                                </p>
                                <p>
                                    Accurate Diagnosis and perfect Evidence Based Physiotherapy is our Success Mantra. We commit ourselves to care you and to cure your Ailments with Evidence Based treatment procedures.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="prt_single_image-wrapper">
                            <img class="img-fluid" src="{{asset('static/images/bgimage-16.jpg')}}" alt="image">
                        </div>
                    </div>
                    <div class="col-md-8 res-767-mt-15">
                        <div class="prt_single_image-wrapper">
                            <img class="img-fluid" src="{{asset('static/images/bgimage-17.jpg')}}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- desc-section-end -->

        <!-- service-section -->
        <section class="prt-row service-detail06-service-section clearfix">
            <div class="container">
                <div class="row g-0 row-equal-height overflow-hidden">
                    <h2>Best Medical Care from 60 Plus Care</h2>
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-icon-box icon-align-before-title style12">
                            <div class="featured-icon">
                                <img src="{{asset('static/images/neurology.png')}}" width="55" height="55">
                            </div>
                            <div class="featured-title">
                                <h3>Neurology Physiotherapy</h3>
                            </div>
                            <div class="featured-content">
                                <div class="featured-desc">
                                    <p>
                                        Neurological Physiotherapy encompasses specialized comprehensive evaluation
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-icon-box icon-align-before-title style12">
                            <div class="featured-icon">
                                <img src="{{asset('static/images/Orthopaedic.png')}}" width="55" height="55">
                            </div>
                            <div class="featured-title">
                                <h3>Orthopaedic Physiotherapy</h3>
                            </div>
                            <div class="featured-content">
                                <div class="featured-desc">
                                    <p>
                                        Orthopaedic Physiotherapy focus on treatment of orthopaedic problems involving joints
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-icon-box icon-align-before-title style12">
                            <div class="featured-icon">
                                <img src="{{asset('static/images/pediatrics.png')}}" width="55" height="55">
                            </div>
                            <div class="featured-title">
                                <h3>
                                    Pediatrics Physiotherapy
                                </h3>
                            </div>
                            <div class="featured-content">
                                <div class="featured-desc">
                                    <p>
                                        Pediatrics Physiotherapy isn't physical therapy just for athletes and adults in recovery?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-icon-box icon-align-before-title style12">
                            <div class="featured-icon">
                                <img src="{{asset('static/images/Geriatric.png')}}" width="55" height="55"/>
                            </div>
                            <div class="featured-title">
                                <h3>
                                    Geriatric Physiotherapy
                                </h3>
                            </div>
                            <div class="featured-content">
                                <div class="featured-desc">
                                    <p>
                                        People in old age may lose strength, mobility, and flexibility due to aging process. Our Geriatric
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-icon-box icon-align-before-title style12">
                            <div class="featured-icon">
                                <img src="{{asset('static/images/pelvis.png')}}" width="55" height="55">
                            </div>
                            <div class="featured-title">
                                <h3>
                                    Pelvic Health Physiotherapy
                                </h3>
                            </div>
                            <div class="featured-content">
                                <div class="featured-desc">
                                    <p>
                                        Pelvic Floor Physiotherapy treats pain, weakness and dysfunction in the pelvic floor muscles. The
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-icon-box icon-align-before-title style12">
                            <div class="featured-icon">
                                <img src="{{asset('static/images/surgical-instrument.png')}}" width="55" height="55">
                            </div>
                            <div class="featured-title">
                                <h3>
                                    Post Surgical Rehab
                                </h3>
                            </div>
                            <div class="featured-content">
                                <div class="featured-desc">
                                    <p>
                                        Post surgical rehabilitation may be necessary for a variety of surgical procedures including orthopaedic,
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section end-->

        <!-- list-section -->
        <section class="prt-row service-detail06-list-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="prt_single_image-wrapper">
                            <img class="img-fluid" src="{{asset('static/images/bgimage-18.jpg')}}" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="res-991-mt-30">
                            <div class="mb-25">
                                <h3 class="fs-24">What We Do!</h3>
                                <p class="fs-15 mb-0">
                                    60 Plus Care is a leading senior support provider in Kolkata. We care with Best Doctors & best support systems.
                                </p>
                            </div>
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <ul class="prt-list style8">
                                        <li>Orthopaedic Physiotherapy</li>
                                        <li>Neurological Physiotherapy</li>
                                        <li>Geriatric Physiotherapy</li>
                                        <li>Pediatric Physiotherapy</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 res-767-mt-12">
                                    <ul class="prt-list style8">
                                        <li>Women's health Physiotherapy</li>
                                        <li>Pelvic Health physiotherapy</li>
                                        <li>Balance Rehab</li>
                                        <li>Post surgical Rehab</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- list-section-end -->

        <!-- service-section -->
        <section class="prt-row service-detail02-service-section clearfix" style="background-color: #f8f8f8">
            <div class="container">
                <div class="row">
                    <h2>Facilities Of Our Clinic</h2>
                    <p>
                        Highly Coordinated, Connected, Compassionate, Caring, Committed & Cohesive Team of Elder Care Professionals – 6S Team of Doctors and Elder Care Professionals are our backbone for providing 360-degree care and All Types of Medical & Non-medical services.
                    </p>
                    <div class="col-lg-4">
                        <div class="featured-imagebox featured-imagebox-services style3">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('static/images/Laser-therapy.jpg')}}" width="447" height="191" alt="service-01">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Class IV Laser therapy</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="featured-imagebox featured-imagebox-services style3">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('static/images/Electrotherapy.jpg')}}" width="447" height="191" alt="service-02">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Advanced Electrotherapy</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="featured-imagebox featured-imagebox-services style3">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('static/images/Exercise-therapy.jpg')}}" width="447" height="191" alt="service-03">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Innovative Exercise therapy</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section-end -->

        <!-- pricing-plan-section -->
        <section class="prt-row service-detail03-pricing-plan-section bg-white clearfix">
            <div class="container">
                <div class="row mt_15">
                    <div class="mb-20">
                        <h2>
                            Speciality Treatments
                        </h2>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <!--prt-pricing-plan-->
                        <div class="prt-pricing-plan">
                            <div class="prt-p_table-image">
                                <img class="img-fluid" width="448" height="217" src="{{asset('static/images/class14_laser.jpg')}}" alt="image">
                            </div>
                            <div class="prt-p_table-body" style="padding-top: 10px;">
                                <div class="prt-p_table-title">
                                    <h3>Class 4 Laser Therapy</h3>
                                </div>
                                <p class="px-3">
                                    Class 4 Laser Therapy stimulates the production of ATP(adenosine triphosphate) which drives many of the processes within our cells. This increased production of ATP helps speed up the healing process within cells. Class 4 Laser Therapy may sound futuristic but it has become a standard of care for many musculoskeletal injuries. Laser therapy uses specific wavelength of light to create therapeutic effects. The light that is transmitted via the laser helps stimulate certain processes within the body that help provide relief to symptoms including pain, swelling and limited range of motion of joints. Our trained physiotherapist will execute laser session after diagnosing the underlying pathology with proper care. Indications of advanced class 4 Laser therapy are as follows-
                                </p>
                                <ul class="prt-p_table-features">
                                    <li>A. Arthritic pain of any joint</li>
                                    <li>B. Tendinitis pain</li>
                                    <li>C . Bursitis pain</li>
                                    <li>D . Heel pain of calcaneal bone</li>
                                    <li>E. Finger pain of trigger finger</li>
                                    <li>F. Soft tissue swelling</li>
                                    <li>G. Acute inflammatory pain etc..</li>
                                </ul>
                            </div>
                        </div><!--prt-pricing-plan-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <!--prt-pricing-plan-->
                        <div class="prt-pricing-plan">
                            <div class="prt-p_table-image">
                                <img class="img-fluid" width="448" height="217" src="{{asset('static/images/dry_needling.jpg')}}" alt="image">
                            </div>
                            <div class="prt-p_table-body" style="padding-top: 10px;">
                                <div class="prt-p_table-title">
                                    <h3>Dry Needling</h3>
                                </div>
                                <p class="px-3">
                                    Dry Needling is one of the recent invention and one of the alternative and very effective treatment option for pain relief.
                                </p>
                                <p class="px-3">
                                    We can see magical effects of Dry Needling in
                                </p>
                                <ul class="prt-p_table-features">
                                    <li>A. Pain reduction</li>
                                    <li>B. Joint range of motion improvement</li>
                                    <li>C. Promotes faster healing</li>
                                    <li>D. Improve blood circulation through the affected area</li>
                                    <li>E. Resetting myo-fascial system.</li>
                                    <li>Patients who recieves Dry Needling treatment often report immediate pain relief and feels an improvement with movement. Our professional who use Dry Needling is specially trained and certified to give this this treatment.</li>
                                </ul>
                            </div>
                        </div><!--prt-pricing-plan-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <!--prt-pricing-plan-->
                        <div class="prt-pricing-plan">
                            <div class="prt-p_table-image">
                                <img class="img-fluid" width="448" height="217" src="{{asset('static/images/myofasial.jpg')}}" alt="image">
                            </div>
                            <div class="prt-p_table-body" style="padding-top: 10px;">
                                <div class="prt-p_table-title">
                                    <h3>Myo Fascial Release Technique</h3>
                                </div>
                                <p class="px-3">
                                    This technique is a wonderful method to treat muscle injury , muscle spasm, artritis, tendinitis etc. This is a kind of hands-on manual technique which is useful for dealing with different kind of muscle injury.
                                    Benefits of Myo Fascial Release----
                                    This technique is an outstanding solution for treating different kind of myofascial pain syndrome, in which disorder and muscle pain occurs frequently particularly in Neck, Back, Hip and shoulder. Moreover it is quite helpful in improving movement and flexibility, restoring normal muscle function, reducing pain instantly. Physiotherapist in our clinic specialized in this technique provides you with an exclusive range of treatments from beginning to recovery.
                                </p>
                            </div>
                        </div><!--prt-pricing-plan-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <!--prt-pricing-plan-->
                        <div class="prt-pricing-plan">
                            <div class="prt-p_table-image">
                                <img class="img-fluid" width="448" height="217" src="{{asset('static/images/blood_flow.jpg')}}" alt="image">
                            </div>
                            <div class="prt-p_table-body" style="padding-top: 10px;">
                                <div class="prt-p_table-title">
                                    <h3>Blood Flow Restriction Therapy</h3>
                                </div>
                                <p class="px-3">
                                    his newly invented therapy is used to help patients gain strength in weak muscles without any high intensity exercises. In this treatment, our trained physiotherapist uses a surgical grade torniquet to apply a precise pressure to the affected muscle of arm or leg during strengthening ecercises. The aim is to maintain blood flow into the muscle and preventing outflow, thus maximizing strength gain with minimum stress on muscle and joints.
                                    It is used for fast recovering from
                                    - sports injury
                                    - joint pain
                                    - post surgical muscle weakness after hip, knee, foot, ankle or shiulder surgery.
                                    - muscle atrophy and weakness specially in elderly patients who are not willing to do hard exercises.
                                </p>
                            </div>
                        </div><!--prt-pricing-plan-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <!--prt-pricing-plan-->
                        <div class="prt-pricing-plan">
                            <div class="prt-p_table-image">
                                <img class="img-fluid" width="448" height="217" src="{{asset('static/images/cupping.jpg')}}" alt="image">
                            </div>
                            <div class="prt-p_table-body" style="padding-top: 10px;">
                                <div class="prt-p_table-title">
                                    <h3>Cupping therapy</h3>
                                </div>
                                <p class="px-3">
                                    Cupping therapy is a form of alternative medicine and one of the oldest and effective method of releasing toxins from body tissues. It is traditionally used in chinese medicine to remove stagnation and stimulate the flow of vital energy circulating through the body. Cupping therapy increases blood flow, loosens the fascia or connective tissues and stimulate healing of effecred body part.
                                </p>
                                <p class="px-3">
                                    This treatment involves placing glass cups on the skin to create suction. Our trained physiotherapist will execute this technique with extreme care..
                                </p>
                            </div>
                        </div><!--prt-pricing-plan-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <!--prt-pricing-plan-->
                        <div class="prt-pricing-plan">
                            <div class="prt-p_table-image">
                                <img class="img-fluid" width="448" height="217" src="{{asset('static/images/therabond.jpg')}}" alt="image">
                            </div>
                            <div class="prt-p_table-body" style="padding-top: 10px;">
                                <div class="prt-p_table-title">
                                    <h3>Theraband training</h3>
                                </div>
                                <p class="px-3">
                                    Theraband loops are thick elastic band that provides a easier way to strengthen muscles. By using theraband resistance exercises, muscles can be strengthened in very scientific way. If you have an injury or illness that results in problems with functional mobility , our physiotherapist liikely prescribe specific exercises for you to do and will train you in proper way.
                                </p>
                            </div>
                        </div><!--prt-pricing-plan-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <!--prt-pricing-plan-->
                        <div class="prt-pricing-plan">
                            <div class="prt-p_table-image">
                                <img class="img-fluid" width="448" height="217" src="{{asset('static/images/kinesio.jpg')}}" alt="image">
                            </div>
                            <div class="prt-p_table-body" style="padding-top: 10px;">
                                <div class="prt-p_table-title">
                                    <h3>Kinesio taping</h3>
                                </div>
                                <p class="px-3">
                                    Kinesio taping is used to help in increasing muscle movements of effected area by releaving pain, reducing swelling and inflammation and provide support to joints and muscles of that area. This tape when applied on the skin, it recruits blood vessels in a way that helps place blood flow, thus increasing oxygen supply to the damaged tissues and decreasing inflammation and swelling.Our specially trained physiotherapist will diagnos and decides in which part it will be applied.
                                </p>
                            </div>
                        </div><!--prt-pricing-plan-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <!--prt-pricing-plan-->
                        <div class="prt-pricing-plan">
                            <div class="prt-p_table-image">
                                <img class="img-fluid" width="448" height="217" src="{{asset('static/images/physio_ball.jpg')}}" alt="image">
                            </div>
                            <div class="prt-p_table-body" style="padding-top: 10px;">
                                <div class="prt-p_table-title">
                                    <h3>Physio Balls training</h3>
                                </div>
                                <p class="px-3">
                                    Physio Balls are a popular piece of exercise equipment that are used in therapy sessions to improve balance, flexibility, Stability of weak muscles and core strengthening.
                                </p>
                            </div>
                        </div><!--prt-pricing-plan-->
                    </div>
                </div>
            </div>
        </section>
        <!-- pricing-plan-section -->

        <!-- service-section -->
        <section class="prt-row service-detail02-service-section clearfix" style="background-color: #f8f8f8">
            <div class="container">
                <div class="row">
                    <h2>Conditions We Treat</h2>
                    <div class="col-lg-3">
                        <div class="featured-imagebox featured-imagebox-services style3">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('static/images/Neck-pain.jpg')}}" width="447" height="191" alt="service-01">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">Neck Pain</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="featured-imagebox featured-imagebox-services style3">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('static/images/Shoulder-pain.jpg')}}" width="447" height="191" alt="service-02">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">Shoulder Pain</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="featured-imagebox featured-imagebox-services style3">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('static/images/Hand-pain.jpg')}}" width="447" height="191" alt="service-03">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">Hand Pain</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="featured-imagebox featured-imagebox-services style3">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('static/images/footPain-heelpain.jpg')}}" width="447" height="191" alt="service-03">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">Foot & Heel Pain</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="featured-imagebox featured-imagebox-services style3">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('static/images/Back-pain.jpg')}}" width="447" height="191" alt="service-03">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">Back Pain</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="featured-imagebox featured-imagebox-services style3">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('static/images/Hip-pain.jpg')}}" width="447" height="191" alt="service-03">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">Hip Pain</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="featured-imagebox featured-imagebox-services style3">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('static/images/Leg-pain.jpg')}}" width="447" height="191" alt="service-03">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">Knee Pain</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="featured-imagebox featured-imagebox-services style3">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('static/images/Ankle-pain.jpg')}}" width="447" height="191" alt="service-03">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">Ankle Pain</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="featured-imagebox featured-imagebox-services style3">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('static/images/fracture.jpg')}}" width="447" height="191" alt="service-03">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">Post Fracture Cases</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="featured-imagebox featured-imagebox-services style3">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('static/images/Neuropathic.jpg')}}" width="447" height="191" alt="service-03">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">Neuropathic Pain</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="featured-imagebox featured-imagebox-services style3">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('static/images/Spinal-problem.jpg')}}" width="447" height="191" alt="service-03">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">Spinal Problem</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="featured-imagebox featured-imagebox-services style3">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('static/images/stroke-paralysis.jpg')}}" width="447" height="191" alt="service-03">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">Rehabilitation in neurological cases like Parkinsons, Cerebral palsy, stroke paralysis.</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section-end -->

        <!-- testimonial-section -->
        <section class="prt-row home02-testimonial-section bg-img3 prt-bg prt-bgimage-yes bg-layer-equal-height bg-base-dark clearfix">
            <div class="prt-row-wrapper-bg-layer prt-bg-layer"></div>
            <div class="container" data-aos="fade-up">
                <div class="row position-relative z-index-2">
                    <div class="col-lg-6">
                        <div class="col-bg-img-twenty-two prt-bg prt-col-bgimage-yes">
                            <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                            <div class="layer-content"></div>
                        </div>
                        <img class="prt-equal-height-image img-fluid w-100" src="{{asset('static/images/bgimage-22.jpg')}}" alt="bg-image">
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="pl-15 mt-30 res-991-pl-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="slick_slider testimonial-02" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows":false, "autoplay":true, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 1}},{"breakpoint":840,"settings":{"slidesToShow": 1}}]}'>
                                    @foreach(\App\Models\Testimonial::active()->skip(0)->limit(3)->get() as $testimonial)
                                        <!-- testimonials -->
                                        <div class="testimonials style2">
                                            <div class="testimonial-content">
                                                <div class="testimonial-avatar">
                                                    <div class="testimonial-img">
                                                        <img width="90" height="90" class="img-fluid" src="{{asset($testimonial->testimonialPicture->image_thumb)}}" alt="testimonial-img">
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
                                        </div><!-- testimonials end -->
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="pl-15 pr-15">
                                <div class="prt-horizontal_sep"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="home02-fid">
                                        <div class="row g-0">
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="prt-fid inside prt-fid-with-icon style4">
                                                    <div class="prt-fid-icon-wrapper">
                                                        <i class="flaticon-couple"></i>
                                                    </div>
                                                    <div class="prt-fid-contents">
                                                        <h4 class="prt-fid-inner">
                                                            <span data-appear-animation="animateDigits" data-from="0" data-to="580" data-interval="25" data-before="" data-before-style="sup" data-after="+" data-after-style="sub" class="numinate">580</span>
                                                            <span class="fid-sup">k</span>
                                                        </h4>
                                                    </div>
                                                    <h3 class="prt-fid-title">Happy Patients</h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="prt-fid inside prt-fid-with-icon style4">
                                                    <div class="prt-fid-icon-wrapper">
                                                        <i class="flaticon-family"></i>
                                                    </div>
                                                    <div class="prt-fid-contents">
                                                        <h4 class="prt-fid-inner">
                                                            <span data-appear-animation="animateDigits" data-from="0" data-to="650" data-interval="25" data-before="" data-before-style="sup" data-after="+" data-after-style="sub" class="numinate">650</span>
                                                            <span class="fid-sup">+</span>
                                                        </h4>
                                                    </div>
                                                    <h3 class="prt-fid-title">Agency follower</h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="prt-fid inside prt-fid-with-icon style4">
                                                    <div class="prt-fid-icon-wrapper">
                                                        <i class="flaticon-nursing-home"></i>
                                                    </div>
                                                    <div class="prt-fid-contents">
                                                        <h4 class="prt-fid-inner">
                                                            <span data-appear-animation="animateDigits" data-from="0" data-to="30" data-interval="5" data-before="" data-before-style="sup" data-after="+" data-after-style="sub" class="numinate">30</span>
                                                            <span class="fid-sup">+</span>
                                                        </h4>
                                                    </div>
                                                    <h3 class="prt-fid-title">Worldwide Partners</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section -->

    </div><!--site-main end-->
@endsection
