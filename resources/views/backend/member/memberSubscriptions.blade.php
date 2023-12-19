@extends('backend.layout.app')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">
                            {{$member->member_name}}
                            @if($member->is_deleted == true)
                                <span style="background: #f00; padding: 4px 6px; border-radius: 6px; color: #fff">
                                Deleted Member
                            </span>
                            @endif
                        </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/admin')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('admin/members')}}">Members</a>
                                </li>
                                <li class="breadcrumb-item active">{{$member->member_name}}</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-6 float-left">
                    <div class="card">
                        <div class="card-body">



                                <div class="form-group">
                                    <label for="name">Parent User</label>
                                    @if ($errors->has('user_id'))
                                        <span class="text-danger">{{ $errors->first('user_id') }}</span>
                                    @endif
                                    <select class="form-control" id="user_id" name="user_id">
                                        <option value="0">Select Parent User</option>
                                        @foreach(\App\Models\User::active()->select('id', 'name', 'mobile')->where('permission', \App\Models\User::PERMISSION_MEMBER)->get() as $parentUser)
                                            <option value="{{ $parentUser->id }}" @if($member->user_id == $parentUser->id) selected @endif>{{ $parentUser->name . ' => ' . $parentUser->mobile }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="name">Member Name</label>
                                    @if ($errors->has('member_name'))
                                        <span class="text-danger">{{ $errors->first('member_name') }}</span>
                                    @endif
                                    <input type="text" id="member_name" name="member_name" class="form-control" placeholder="Enter Name" value="{{$member->member_name}}">
                                </div>

                                <div class="form-group">
                                    <label for="member_mobile">Member Mobile</label>
                                    @if ($errors->has('member_mobile'))
                                        <span class="text-danger">{{ $errors->first('member_mobile') }}</span>
                                    @endif
                                    <input type="text" id="member_mobile" name="member_mobile" class="form-control" placeholder="Enter Mobile" value="{{$member->member_mobile}}">
                                </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-6 float-left">
                    <div class="card">
                        <div class="card-body">

                            <div class="col-12 pb-5">
                                <h5>Subscriptions
                                    <span class="float-right">
                                            <button class="btn btn-primary" onclick='window.location.href="{{ url('admin/subscription/create') }}"'>Add Subscription</button>
                                        </span>
                                </h5>
                            </div>
                            <hr/>

                            @if(count($member->userSubscriptions) > 0)

                                @foreach($member->userSubscriptions as $subscription)
                                    <a href="{{ url('admin/subscription/' . $subscription->id) }}">
                                        <div class="col-12 d-flex mb-4 border-bottom">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                                </svg>
                                            </div>
                                            <div class="col-8">
                                                <h5 class="text-dark">{{ $subscription->subscriptionPackage->package_name }} {{$subscription->num_months}} Month(s)</h5>
                                                <p>
                                                    <strong>
                                                    Start Date: {{ \Carbon\Carbon::parse($subscription->start_date)->format('d M, Y') }}<br/>
                                                    End Date: {{ \Carbon\Carbon::parse($subscription->end_date)->format('d M, Y') }}
                                                    </strong>
                                                </p>
                                                <p>
                                                    Status: @if($subscription->is_expired == true) <span class="badge badge-danger">Expired</span> @else <span class="badge badge-success">Active</span> @endif
                                                </p>
                                            </div>
                                            <div class="col-4">
                                                <div class="text-right">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="44" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach

                            @else
                                <h2>You have no Subscription</h2>
                            @endif

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Mask Js-->
    <script src="{{asset('backend/plugins/jquery-mask/jquery.mask.min.js')}}"></script>
    <!-- Mask Custom Js-->
    <script src="{{asset('backend/pages/mask-demo.js')}}"></script>

    <script>
        $('#mobile').focus(function(){
            if($(this).val().substring(0,3) !== '+91'){
                $(this).val("+91" + $(this).val());
            }
        });
    </script>
@endsection
