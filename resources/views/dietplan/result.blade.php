@extends('masters.master')

@section('content')

<section class="s-pt-40 s-pb-30 s-py-lg-130 timetable ds text-center text-md-left" id="timetables">
    <div class="container" id="show_result">
        <div class="container">
            <div class="row mt-5 mb-5" id="diet-logo">
                <img src="../../../../assets/s-logo.png">
            </div>
            <div class="row">
                <form class="woocommerce-ordering">
                    <select id="select_week" name="orderby" class="orderby">
                        @for ($i=0; $i<$day_num; $i++) 
                            <option value="{{$i+1}}">@lang('app.week') {{$i+1}}</option>
                        @endfor
                    </select>
                </form>
            </div>

            <input type="hidden" id="user_key" value="{{ $key }}">
            <div class="col-12 text-center">
                <div class="section-heading">
                    <h3>@lang('app.personalmealplan')</h3>
                    <img class="image-wrap" src="../../../../assets/images/icon-main2.png" alt="">
                </div>
                <div class="mt-3 btn btn-light" id="download_pdf">@lang('app.downloadpdf')</div>
                <div class="d-none d-lg-block divider-60"></div>
            </div>

            <div class="col-12">
                <ul class="nav nav-tabs form-tabs" id="date_num">
                    @for ($i=0; $i<7; $i++) <li class="nav-item week-num {{$i==0?'active':''}}">
                        @if ($i==0)
                        <a class="one-week nav-link first" href="#tab{{$i+1}}"
                            data-toggle="tab">{{$diet_plan['startDate'] + $i}}</a>
                        @endif
                        @if ($i==6)
                        <a class="one-week nav-link last" href="#tab{{$i+1}}"
                            data-toggle="tab">{{$diet_plan['startDate'] + $i}}</a>
                        @endif
                        @if ($i!=0 && $i!=6)
                        <a class="one-week nav-link" href="#tab{{$i+1}}"
                            data-toggle="tab">{{$diet_plan['startDate'] + $i}}</a>
                        @endif
                        </li>
                    @endfor
                </ul>
                <select class="form-control hidden-md hidden-lg hidden-xl" id="tab_selector">

                    @for ($i=0; $i<7; $i++) <option value="{{$i}}">{{$diet_plan['startDate'] + $i}} <p class="day_num">
                        </p>
                        </option>
                    @endfor

                </select>

                <div class="tab-content">

                    @for ($i=0; $i<7; $i++) <div class="tab-pane {{ $i == 0 ? 'active':''}}" id="tab{{$i+1}}">

                        {{-- Add breakfast, brunch, lunch, dinner --}}
                        @foreach($diet_plan['recipe'] as $plan)
                        <div class="media bordered ">
                            <div>
                                <img src="{{$plan[$i]->image_url}}">
                            </div>

                            <div class="media-body">
                                <h5>
                                    {{$plan[$i]->name}}
                                </h5>
                                <div class="btn-timetable diet_detail" data-recipe-id="{{$plan[$i]->id}}">
                                    <button class="btn btn-light">More Info</button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                </div>
                @endfor
            </div>
        </div>
    </div>
    </div>
</section>

@endsection

@section('ExtraJavascript')
<script src="{{ asset('assets/js/app.js') }}"></script>
@endsection
