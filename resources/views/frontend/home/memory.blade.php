<!-- about-section -->
<section class="prt-row about01-about-section bg-dark clearfix pb-0" id="aboutSection">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="pr-30 res-1199-pr-0">
                    <div class="section-title mb-30">
                        <div class="title-header">
                            <h2 class="text-white"><span>In memory of</span> - Late Manabendra Nath Dey</h2>
                        </div>
                        <div class="title-desc">
                            <p class="pr-50 text-white-50">
                                With deepest sympathy for the loss of you sir, We pray to god may you rest in peace.
                            </p>
                            <p class="pr-50 text-white-50">
                                We will always remember the time we have spent and shared a lots of memory.
                            </p>
                        </div>
                    </div>
                    <div class="d-sm-flex">
                        <div class="d-flex res-575-mt-20">
                            <div class="bg-base-grey spacing-36">
                                <h3 class="fs-20 mb-0">
                                    There are no goodbyes for us. Wherever you are, you will be in our hearts.
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 res-1199-mt-30 align-self-center position-relative">
                <div class="frame">
                    <img src="{{ asset('static/images/rip_manabendra_nath_dey.webp') }}" alt="RIP Manabendra Nath Dey" />
                </div>
                <div style="position: absolute; z-index: 99; height: 55vh; bottom: 0; left: 45%;">
                    <div class="candle">
                        <div class="flame">
                            <div class="shadows"></div>
                            <div class="top"></div>
                            <div class="middle"></div>
                            <div class="bottom"></div>
                        </div>
                        <div class="wick"></div>
                        <div class="wax"></div>
                    </div>
                </div>
                <style>
                    .frame img {
                        border: solid 2px;
                        border-bottom-color: #ffe;
                        border-left-color: #eed;
                        border-right-color: #eed;
                        border-top-color: #ccb;
                        max-height: 100%;
                        max-width: 100%;
                    }
                    .frame {
                        background-color: #ddc;
                        border: solid 5vmin #eee;
                        border-bottom-color: #fff;
                        border-left-color: #eee;
                        border-radius: 2px;
                        border-right-color: #eee;
                        border-top-color: #ddd;
                        box-shadow: 0 0 5px 0 rgba(0, 0, 0, .25) inset, 0 5px 10px 5px rgba(0, 0, 0, .25);
                        box-sizing: border-box;
                        display: inline-block;
                        margin: 5vh 5vw;
                        padding: 1vmin;
                        position: relative;
                        text-align: center;
                    }
                    .frame:before {
                        border-radius: 2px;
                        bottom: -2vmin;
                        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .25) inset;
                        content: "";
                        left: -2vmin;
                        position: absolute;
                        right: -2vmin;
                        top: -2vmin;
                    }
                    .frame:after {
                        border-radius: 2px;
                        bottom: -2.5vmin;
                        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .25);
                        content: "";
                        left: -2.5vmin;
                        position: absolute;
                        right: -2.5vmin;
                        top: -2.5vmin;
                    }
                    .candle {
                        width: 34px;
                        margin: 30px auto 0 auto;
                        position: relative;
                        height: 50%;
                        align-self: flex-end;
                        animation: blink 0.1s infinite;
                    }
                    .wick {
                        position: absolute;
                        width: 6px;
                        height: 50px;
                        background: #23161a;
                        top: 110px;
                        left: 50%;
                        transform: translateX(-50%) skewX(2deg);
                        border-radius: 10%;
                        box-shadow: 0 0 2px 0px black;
                    }
                    .wick:before {
                        content: '';
                        position: absolute;
                        width: 0;
                        left: 50%;
                        height: 10px;
                        box-shadow: 0 -14px 10px 8px white, 0 -10px 10px 8px rgba(255, 215, 0, 0.7), 0 -3px 10px 8px rgba(255, 106, 0, 0.7), 0 6px 3px 4px black;
                    }
                    .wick:after {
                        content: '';
                        position: absolute;
                        left: 50%;
                        bottom: 0;
                        width: 0px;
                        height: 0px;
                        box-shadow: 0 5px 2px 3px gold, 0 20px 2px 14px gold, 0 -6px 4px 5px rgba(98, 33, 27, 0.8), 0 0px 1px 4px rgba(255, 106, 0, 0.7), 0 0px 3px 4px #ff6a00, 0 5px 3px 4px gold;
                    }
                    .flame {
                        width: 20px;
                        height: 150px;
                        margin: 0px auto;
                        position: relative;
                        animation: move 3s infinite, move-left 3s infinite;
                        transform-origin: 50% 90%;
                    }
                    .flame .top {
                        width: 20px;
                        height: 100%;
                        position: absolute;
                        top: 0;
                        left: 0;
                        background: white;
                        border-top-left-radius: 500%;
                        border-bottom-left-radius: 50px;
                        border-top-right-radius: 500%;
                        border-bottom-right-radius: 50px;
                        transform: skewY(-10deg);
                        box-shadow: 0 0px 0px 3px white, 0 -20px 1px 4px white, 0 -25px 2px 3px gold, 0 -30px 5px 4px #ff6a00, 0 0px 150px 10px #ff6a00, 0 -10px 2px 4px white, 0 -5px 3px 3px white;
                        animation: flame-up 4s infinite;
                    }
                    .flame .shadows {
                        position: absolute;
                        left: 50%;
                        top: 0;
                        width: 1px;
                        height: 60px;
                        border-radius: 50%;
                        box-shadow: 0 5px 20px 15px gold, 0 0px 100px 20px #ff6a00, 0 15px 50px 15px #ff6a00, 5px 30px 5px 13px #ff6a00, 5px 50px 5px 13px #ff6a00, 0 75px 50px 30px black;
                    }
                    .flame .bottom {
                        transform: scale(0.9);
                        position: absolute;
                        bottom: 6px;
                        left: 9px;
                        width: 1px;
                        height: 8px;
                        border-radius: 1%;
                        background: #2c2b39;
                        box-shadow: 0 6px 10px 12px rgba(60, 76, 125, 0.3), 0 0px 4px 8px #2c2b39, 0 -12px 10px 8px rgba(255, 106, 0, 0.5), 0 5px 7px 12px #2c2b39, 0 -3px 10px 12px #2c2b39, 5px -10px 10px 5px red, 0 -15px 10px 10px gold, 5px -25px 10px 5px gold, 0 2px 5px 10px #30537d, 0 -2px 2px 14px #76daff, 0 2px 10px 12px #76daff;
                    }
                    .wax {
                        position: relative;
                        top: 15px;
                        width: 100%;
                        height: 100%;
                        background: #ff9224;
                        background: -moz-linear-gradient(top, #ff9224 0px, #ff9224 20px, #58523a 50px);
                        /* FF3.6-15 */
                        background: -webkit-linear-gradient(top, #ff9224 0px, #ff9224 20px, #58523a 50px);
                        /* Chrome10-25,Safari5.1-6 */
                        background: linear-gradient(to bottom, #ff9224 0px, #ff9224 20px, #58523a 50px);
                        /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff9224', endColorstr='#58523a',GradientType=0);
                        /* IE6-9 */
                        border-top-left-radius: 10px;
                        border-top-right-radius: 10px;
                        box-shadow: inset 0 7px 12px -2px #fbf348, inset 0 9px 57px -3px rgba(255, 0, 0, 0.4), inset 0 -5px 8px 2px black, 0 0 3px 0px #ff6a00;
                    }
                    @keyframes move {
                        0% {
                            transform: skewX(2deg) skewY(5deg);
                        }
                        50% {
                            transform: skewX(-2deg) skewY(0deg);
                        }
                        100% {
                            transform: skewX(2deg) skewY(5deg);
                        }
                    }
                    @keyframes move-left {
                        50% {
                            transform: skewX(3deg);
                        }
                    }
                    @keyframes flame-up {
                        50% {
                            box-shadow: 0 0px 0px 3px white, 0 -38px 1px 2px white, 0 -41px 2px 3px gold, 0 -50px 5px 4px #ff6a00, 0 0px 150px 10px #ff6a00, 0 -10px 2px 4px white, 0 -5px 3px 3px white;
                        }
                    }
                    @keyframes blink {
                        50% {
                            opacity: 0.95;
                        }
                    }

                </style>

            </div>
        </div>
    </div>
</section>
<!-- about-section end-->
