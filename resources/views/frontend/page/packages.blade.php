@extends('frontend.layout.app')
@section('content')

    <!-- page-title -->
    <div class="prt-page-title-row prt-bg prt-bgimage-yes">
        <div class="prt-page-title-row-inner prt-bg-layer bg-base-bodycolor">
            <div class="prt-page-title-row-wrapper-inner"></div>
        </div>
        <div class="layer-content">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="prt-page-title-row-heading">
                            <div class="page-title-heading">
                                <h2 class="title">Packages</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a href="{{url('/')}}">Home</a>
                                </span>
                                <span>
                                    <a href="#">
                                        Packages
                                    </a>
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

        <!-- team-section -->
        <section class="prt-row team-section bg-base-grey clearfix">
            <div class="container">
                <div class="row mt_15 justify-content-center">

                    <div class="col-8" style="background-color: #faebff; font-size: 14px; padding: 6px 10px; border-radius: 8px;color: #000">
                        Kolkata's first Geriatrician & Specialised Doctors initiated Proactive Elder Care & Home Care Service
                    </div>

                    <div class="col-10 py-3 mt-4 bg-white">
                        <Style>
                            .bg1{
                                background-color: #c9d1ff;
                            }
                            .bg2{
                                background-color: #ffd0e0;
                            }
                            .bg3{
                                background-color: #d6ddff;
                            }
                            .priceSec{
                                background-color: #c61a52;
                                color: yellow;
                            }
                            .priceSec span{
                                color: #fff;
                                font-weight: 600;
                            }
                            .myTable th{
                                font-size: 18px;
                            }
                            .myTable td{
                                font-size: 15px;
                                font-weight: 600;
                            }
                            .myTable td p{
                                font-size: 14px;
                                font-weight: 500;
                                font-style: italic;
                            }
                            .conditionApply{
                                font-style: 12px;
                                font-weight: 600;
                                color: #333333;
                            }
                        </Style>
                        <table class="table table-bordered myTable" border="1">
                            <tr class="bg1">
                                <th class="col-4">ELDER CARE SERVICE</th>
                                <th>Elite</th>
                                <th>Premium</th>
                                <th>Economy</th>
                                <th>Basic</th>
                            </tr>
                            <tr>
                                <td style="background-color: #f1ffc5"><span class="text-danger">24 x 7 Emergency Assistance Service</span></td>
                                <td><span class="text-danger">YES</span></td>
                                <td><span class="text-danger">YES</span></td>
                                <td><span class="text-danger">YES</span></td>
                                <td><span class="text-danger">YES</span></td>
                            </tr>
                            <tr>
                                <td style="background-color: #f1ffc5">Prioritised Hospitalization</td>
                                <td>YES</td>
                                <td>YES</td>
                                <td>YES</td>
                                <td>YES</td>
                            </tr>
                            <tr>
                                <td style="background-color: #f1ffc5">Ambulance *</td>
                                <td>YES</td>
                                <td>YES</td>
                                <td>YES</td>
                                <td>YES</td>
                            </tr>
                            <tr class="bg3">
                                <th colspan="5" style="text-align: center">DOCTOR's VISIT</th>
                            </tr>
                            <tr>
                                <td style="background-color: #f1ffc5">Scheduled Visit of GP</td>
                                <td>4 per Year</td>
                                <td>3 per Year</td>
                                <td>2 per Year</td>
                                <td>NIL</td>
                            </tr>
                            <tr>
                                <td style="background-color: #f1ffc5">Doctor Visit Starting from ₹1500 + CC *</td>
                                <td>YES</td>
                                <td>YES</td>
                                <td>YES</td>
                                <td>YES</td>
                            </tr>
                            <tr>
                                <td style="background-color: #f1ffc5">
                                    Specialist Doctor Visit
                                    <p>(Subject to Availability & Fees as per Actual)</p>
                                </td>
                                <td>YES</td>
                                <td>YES</td>
                                <td>YES</td>
                                <td>YES</td>
                            </tr>
                            <tr>
                                <td style="background-color: #f1ffc5">Prioritised Appointment with Doctors</td>
                                <td>YES</td>
                                <td>YES</td>
                                <td>YES</td>
                                <td>YES</td>
                            </tr>
                            <tr>
                                <td style="background-color: #f1ffc5">
                                    TELECONSULTATION with Doctors
                                    <p>Starting from ₹700 per consultation</p>
                                </td>
                                <td>YES</td>
                                <td>YES</td>
                                <td>YES</td>
                                <td>YES</td>
                            </tr>
                            <tr class="bg3">
                                <th colspan="5" style="text-align: center">GERIATRIC / ELDER CARE MANAGER VISIT</th>
                            </tr>
                            <tr>
                                <td style="background-color: #f1ffc5">Care Manager Schedule visit (9AM-6PM)</td>
                                <td>8 per Month</td>
                                <td>4 per Month</td>
                                <td>2 per Month</td>
                                <td>1 per Month</td>
                            </tr>
                            <tr>
                                <td style="background-color: #f1ffc5">Add On Care Manager Visit</td>
                                <td colspan="4" align="center">
                                    ₹500 for initial 1.5 Hours then ₹200 per Additional Hours
                                </td>
                            </tr>
                            <tr>
                                <td style="background-color: #f1ffc5">Communication Call via Phone</td>
                                <td>6 per Week</td>
                                <td>3 per Week</td>
                                <td>2 per Week</td>
                                <td>1 per Week</td>
                            </tr>
                            <tr>
                                <td style="background-color: #f1ffc5">Reimbursements for Transport *</td>
                                <td>As per actual</td>
                                <td>As per actual</td>
                                <td>As per actual</td>
                                <td>As per actual</td>
                            </tr>
                            <tr class="bg3">
                                <th colspan="5" style="text-align: center">OTHER SERVICES</th>
                            </tr>
                            <tr class="bg2">
                                <td>Medical Records Maintenance</td>
                                <td>YES</td>
                                <td>YES</td>
                                <td>YES</td>
                                <td>YES</td>
                            </tr>
                            <tr>
                                <td style="background-color: #f1ffc5">Comprehensive Blood Test ₹3900</td>
                                <td>
                                    4 per Year
                                    <p>Can avail after 3 months of service</p>
                                </td>
                                <td>
                                    2 per Year
                                    <p>Can avail after 3 months of service</p>
                                </td>
                                <td>
                                    1 per Year
                                    <p>Can avail after 6 months of service</p>
                                </td>
                                <td>
                                    1 per Year
                                    <p>Can avail after 12 months of service</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background-color: #f1ffc5">
                                    Pathology Test Discount off upto 20%
                                    <p>(from our Associated NABL certified Laboratory)</p>
                                </td>
                                <td>YES</td>
                                <td>YES</td>
                                <td>YES</td>
                                <td>YES</td>
                            </tr>
                            <tr>
                                <td style="background-color: #f1ffc5">Medical Devices</td>
                                <td colspan="4" align="center">
                                    As Per Actual for Purchase / Rent
                                </td>
                            </tr>
                            <tr class="priceSec">
                                <td>
                                    ONE TIME REGISTRATION CHARGES
                                    <p>For Each Members Only <span>NO YEARLY RENEWAL CHARGES</span></p>
                                </td>
                                <td>₹4500</td>
                                <td>₹4500</td>
                                <td>₹4500</td>
                                <td>₹4500</td>
                            </tr>
                            <tr class="bg2">
                                <td style="background-color: #b2ffae">
                                    Monthly Charges for Individual / Couple
                                </td>
                                <td>₹7200</td>
                                <td>₹3600</td>
                                <td>₹1800</td>
                                <td>₹1100</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><button class="btn btn-primary">Avail Package</button></td>
                                <td><button class="btn btn-primary">Avail Package</button></td>
                                <td><button class="btn btn-primary">Avail Package</button></td>
                                <td><button class="btn btn-primary">Avail Package</button></td>
                            </tr>
                            <tr>
                                <td style="background-color: #b2ffae">Payment Mode</td>
                                <td colspan="4" align="center" style="background-color: #b2ffae">
                                    To be done Half Yearly / Annually by Cheque / Electronic Transfer only
                                </td>
                            </tr>
                            <tr>
                                <td style="background-color: #f1ffc5">ECG/EEG/Holter/NCV/Xray at Home</td>
                                <td colspan="4">
                                    As Per rate
                                </td>
                            </tr>
                            <tr>
                                <td style="background-color: #f1ffc5">Physiotherapist at Home</td>
                                <td colspan="4">
                                    Starts from ₹600
                                </td>
                            </tr>
                            <tr>
                                <td style="background-color: #f1ffc5">Dietician Teleconsultation</td>
                                <td colspan="4">
                                    Starting from ₹600 per Consultation
                                </td>
                            </tr>
                            <tr>
                                <td style="background-color: #f1ffc5">Psychologist Teleconsultation</td>
                                <td colspan="4">
                                    Starting from ₹600 per Consultation
                                </td>
                            </tr>
                            <tr>
                                <td style="background-color: #f1ffc5">Nurses / Sisters</td>
                                <td colspan="4">
                                    Starting from Regular ₹800 ICU / Premium ₹900 per 12 Hours *
                                </td>
                            </tr>
                        </table>
                        <p class="conditionApply">
                            * Conditions Apply. Some rates may vary depending on area.<br>
                            ** All charges are Exclusive of GST
                        </p>
                    </div>

                </div>
            </div>
        </section>
        <!-- team-section -->

    </div><!--site-main end-->
@endsection
