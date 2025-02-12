<!--mobile version-->
<div class="col-12 d-flex mobileNotice d-block d-sm-block d-md-none">
    <div class="col-3 py-3 px-2 noticeHeading">
        <strong>Notice Board</strong>
    </div>
    <div class="col-9 d-flex noticeItems">

        @foreach(\App\Models\Noticeboard::active()->get() as $noticeboard)
            <div class="col-12 px-2">
                <div class="d-flex">
                    <div style="padding-right: 10px; box-sizing: border-box; color: #191579">
                        {{\Carbon\Carbon::parse($noticeboard->created_at)->format('d M, Y')}}
                    </div>
                    <div>
                        <a href="{{url($noticeboard->notice_file)}}" class="text-dark" target="_blank" rel="nofollow">
                            {{$noticeboard->notice_title}}
                        </a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
<!--mobile version-->
<style>
    .mobileNotice{
        color: #000;
        border-bottom: 1px solid #f0f0f0;
    }
    .mobileNotice .noticeHeading{
        background-color: #455c17;
        color: #fff;
        font-size: 14px;
    }
    .mobileNotice .noticeItems{
        font-size: 12px;
        font-weight: 600;
        height: 7vh;
        overflow: auto;
    }
</style>
