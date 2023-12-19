<!--desktop version-->
<div class="desktopNotice d-none d-sm-none d-md-block">
    @if(count(\App\Models\Noticeboard::active()->get()) > 0)
        <div class="noticeBoard">
            <h5>Important Infos</h5>
            <div class="col-12 noticeboardItems">
                @foreach(\App\Models\Noticeboard::active()->get() as $noticeboard)
                    <div class="noticeboardItem">
                        <div class="col-2 text-center">
                            <p>{{\Carbon\Carbon::parse($noticeboard->created_at)->format('F')}}
                                <span>{{$noticeboard->created_at->format('d')}}</span>
                                {{$noticeboard->created_at->format('Y')}}
                            </p>
                        </div>
                        <div class="col-10 px-2">
                            <p class="noticeItem">
                                {{$noticeboard->notice_title}}
                                <a href="{{url($noticeboard->notice_file)}}" target="_blank" rel="nofollow">
                                    Click Here
                                </a>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>
<!--desktop version-->
<style>
    .noticeBoard{background-color: #fff;position: absolute; top: 16%; z-index: 1;border: 2px solid #455c17;}
    .noticeBoard h5{background-color: #455c17;color: #fff;padding: 10px 5px;}
    .noticeBoard .noticeboardItems{height: 30vh;overflow: scroll;}
    .noticeBoard .noticeboardItem {border-bottom: 1px solid #cccccc;padding-top: 10px;display: flex;}
    .noticeboardItem p{font-size: 13px;font-weight: 500;color: #191579;}
    .noticeboardItem p span{font-size: 20px;display: block;}
    .noticeboardItem p.noticeItem{font-size: 12px;font-weight: 600;color: #111111;text-transform: none;line-height: 20px;}
    @media only screen and (min-width: 1601px){.noticeBoard{width: 25%;right: 3.5%;}.noticeBoard .noticeboardItems{height: 30vh}}
    @media only screen and (max-width: 1601px){.noticeBoard{width: 25%;right: 4%;top: 11%;}.noticeBoard .noticeboardItems{height: 25vh}}
    @media only screen and (max-width: 1201px){.noticeBoard{width: 30%;top: 10%;right: 1.3%;}.noticeBoard .noticeboardItems{height: 20vh}}
    @media only screen and (min-width: 991px) {.noticeSideMain { background-color: var(--secondaryColor)}}
    @media (max-width: 991px) {.noticeBoard{width: 30%;top: 14%;right: 1.3%;}.noticeBoard .noticeboardItems{height: 15vh}}
    @media (max-width: 767px) {.noticeBoard{width: 30%;top: 6%;right: 1.3%;}.noticeBoard .noticeboardItems{height: 20vh}.noticeboardItem strong{font-size: 10px;}.noticeboardItem strong span{font-size: 13px;}.noticeboardItem a p{font-size: 12px;}}
    @media (max-width: 680px) {.noticeBoard{width: 30%;top: 6%;right: 1.3%;}.noticeBoard .noticeboardItems{height: 20vh}.noticeboardItem strong{font-size: 10px;}.noticeboardItem strong span{font-size: 13px;}.noticeboardItem a p{font-size: 12px;}}
    @media (max-width: 575px) {.noticeBoard{width: 45%;}}
    @media only screen and (max-width: 480px) {.noticeBoard{width: 100%; bottom: 10px;} .noticeBoard .noticeboardItems{height: 10vh;}}
    @media only screen and (max-width: 420px) {}
</style>
