@extends('masters.master')

@section('content')
    <div id="canvas">
        <div id="box_wrapper">

            <section class="diet-slider1">
                <div class="header_absolute">
                    <header class="page_header s-bordertop nav-narrow ds justify-nav-center header-main">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-xl-2 col-lg-3 col-11">
                                    <a href="/" class="logo">
                                        <img src="assets/s-logo.png" alt="">
                                    </a>
                                </div>
                                <div class="col-lg-8 col-1 text-sm-center">
                                    <nav class="top-nav">
                                        <ul class="nav sf-menu">

                                            <li>
                                                <a href="#price_page">@lang('app.pricing')</a>
                                            </li>

                                            <li>
                                                <a href="#contact_page">@lang('app.contact')</a>
                                            </li>

                                            <li>
                                                <a href="#faqs">@lang('app.faqs')</a>
                                            </li>

                                            <li class="active">
                                                <a href="#slide">@lang('app.myplan')</a>
                                            </li>

                                        </ul>

                                    </nav>
                                </div>

                            </div>
                        </div>
                        <span class="toggle_menu">
                            <span></span>
                        </span>
                    </header>
                </div>

                <div id="slide" class="carousel slide justify-content-center text-center" data-ride="carousel">

                    <!-- select gender-->
                    <div class="carousel-item diet-step-1 active">

                        <div class="d-inline-block">
                            <h2 class="intro_featured_word">
                                @lang('app.title')
                            </h2>
                        </div>
                        <div class="pt-5">
                            <div class="gender m-select-gender__button-gender a-button-gender" href="#slide" role="button" data-slide="next" data-gender="2">
                                <div class="a-button-gender__background">
                                    <div class="a-button-gender__circle a-button-gender__circle--1 js-button-circle"></div>
                                    <div class="a-button-gender__circle a-button-gender__circle--2 js-button-circle"></div>
                                </div>
                                <div class="a-button-gender__content">
                                    <div class="a-button-gender__circle a-button-gender__circle--3 js-button-circle-main"></div>
                                        <img class="a-icon a-button-gender__icon" src="assets/images/svg/woman.svg">
                                    <div class="a-button-gender__text">@lang('app.female')</div>
                                </div>
                            </div>
                            <div class="gender m-select-gender__button-gender  a-button-gender a-button-gender--man" href="#slide" role="button" data-slide="next" data-gender="1">
                                <div class="a-button-gender__background">
                                    <div class="a-button-gender__circle a-button-gender__circle--1 js-button-circle"></div>
                                    <div class="a-button-gender__circle a-button-gender__circle--2 js-button-circle"></div>
                                </div>
                                <div class="a-button-gender__content">
                                    <div class="a-button-gender__circle a-button-gender__circle--3 js-button-circle-main"></div>
                                        <img class="a-icon a-button-gender__icon" src="assets/images/svg/man.svg">
                                    <div class="a-button-gender__text">@lang('app.male')</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- select gender-->

                    <!-- select physical-->
                    <div class="carousel-item diet-step-2">
                        <div class="d-inline-block">
                            <h2 class="intro_featured_word">
                                @lang('app.physicaltitle')
                            </h2>
                        </div>

                        <div class="intro_layers flex-btn" data-animation="fadeInUp">
                            <div class="btn btn-light physical" href="#slide" role="button" data-slide="next" data-physical="1">@lang('app.physical1')</div>
                            <div class="btn btn-light physical" href="#slide" role="button" data-slide="next" data-physical="2">@lang('app.physical2')</div>
                            <div class="btn btn-light physical" href="#slide" role="button" data-slide="next" data-physical="3">@lang('app.physical3')</div>
                            <div class="btn btn-light physical" href="#slide" role="button" data-slide="next" data-physical="4">@lang('app.physical4')</div>
                            <div class="btn btn-light physical" href="#slide" role="button" data-slide="next" data-physical="5">@lang('app.physical5')</div>
                        </div>
                    </div>
                    <!-- select physical-->

                    <!-- select meat-->
                    <div class="carousel-item diet-step-3">
                        <div class="d-inline-block">
                            <h2 class="intro_featured_word">
                                @lang('app.meat')
                            </h2>
                        </div>

                        <div class="intro_layer" data-animation="fadeInUp">
                            <h6 class="intro_featured_word">
                                @lang('app.meatheading')
                            </h6>
                        </div>

                        <div class="row divider-25">

                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="beef">
                                    <img src="assets/images/svg/beef.svg">
                                    <p>@lang('app.beef')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="pork">
                                    <img src="assets/images/svg/pork.svg">
                                    <p>@lang('app.pork')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="chicken">
                                    <img src="assets/images/svg/chicken.svg">
                                    <p>@lang('app.chicken')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="bacon">
                                    <img src="assets/images/svg/bacon.svg">
                                    <p>@lang('app.bacon')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="fish">
                                    <img src="assets/images/svg/fish.svg">
                                    <p>@lang('app.fish')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" id="nomeat" data-products="nomeat">
                                    <img src="assets/images/svg/nomeat.svg">
                                    <p>@lang('app.nomeat')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- select meat-->

                    <!-- select veggies-->
                    <div class="carousel-item diet-step-4">

                        <div class="d-inline-block">
                            <h2 class="intro_featured_word">
                                @lang('app.veggies')
                            </h2>
                        </div>

                        <div class="intro_layer" data-animation="fadeInUp">
                            <h6 class="intro_featured_word">
                                @lang('app.veggiesheading')
                            </h6>
                        </div>

                        <div class="row divider-25">
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="broccoli">
                                    <img src="assets/images/svg/broccoli.svg">
                                    <p>@lang('app.broccoli')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="mushroom">
                                    <img src="assets/images/svg/mushroom.svg">
                                    <p>@lang('app.mushroom')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="zucchini">
                                    <img src="assets/images/svg/zucchini.svg">
                                    <p>@lang('app.zucchini')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="cauliflower">
                                    <img src="assets/images/svg/cauliflower.svg">
                                    <p>@lang('app.cauliflower')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="asparagus">
                                    <img src="assets/images/svg/asparagus.svg">
                                    <p>@lang('app.asparagus')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="avocado">
                                    <img src="assets/images/svg/avocado.svg">
                                    <p>@lang('app.avocado')</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- select veggies-->

                    <!-- select product-->
                    <div class="carousel-item diet-step-5">

                        <div class="d-inline-block">
                            <h2 class="intro_featured_word">
                                @lang('app.products')
                            </h2>
                        </div>

                        <div class="intro_layer" data-animation="fadeInUp">
                            <h6 class="intro_featured_word">
                                @lang('app.productsheading')
                            </h6>
                        </div>

                        <div class="row divider-25">
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="egg">
                                    <img src="assets/images/svg/eggs.svg">
                                    <p>@lang('app.eggs')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="nuts">
                                    <img src="assets/images/svg/nuts.svg">
                                    <p>@lang('app.nuts')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="cheese">
                                    <img src="assets/images/svg/cheese.svg">
                                    <p>@lang('app.cheese')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="butter">
                                    <img src="assets/images/svg/butter.svg">
                                    <p>@lang('app.butter')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="coconut">
                                    <img src="assets/images/svg/coconut.svg">
                                    <p>@lang('app.coconut')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="tofu">
                                    <img src="assets/images/svg/tofu.svg">
                                    <p>@lang('app.tofu')</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- select product-->

                    <!-- select physical-->
                    <div class="carousel-item diet-step-6">
                        <div class="intro_layers_wrapper">
                            <div class="intro_layers">
                                <div class="d-inline-block">
                                    <h2 class="intro_featured_word">
                                        @lang('app.briefing')
                                    </h2>
                                </div>

                                <div class="intro_layers flex-btn" data-animation="fadeInUp">
                                    <div class="btn btn-light briefing" data-briefing="1">@lang('app.briefing1')</div>
                                    <div class="btn btn-light briefing" data-briefing="2">@lang('app.briefing2')</div>
                                    <div class="btn btn-light briefing" data-briefing="3">@lang('app.briefing3')</div>
                                    <div class="btn btn-light briefing" data-briefing="4">@lang('app.briefing4')</div>
                                    <div class="btn btn-light briefing" data-briefing="5">@lang('app.briefing5')</div>
                                    <div class="btn btn-light briefing" id="noabove" data-briefing="6">@lang('app.briefing6')</div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- select physical-->

                    <!-- select measurements-->
                    <div class="carousel-item diet-step-7">
                        <div class="intro_layers">
                            <div class="d-inline-block">
                                <h2 class="intro_featured_word">
                                    @lang('app.measurements')
                                </h2>
                            </div>

                            <div class="container">
                            <div class="woocommerce-tabs shop-single-tab wc-tabs-wrapper">

                                <ul class="tabs wc-tabs" role="tablist">
                                    <li class="description_tab active" id="material_measurement" role="tab" aria-controls="tab-description">
                                        <a href="#material_mea"><p id="metric" for="metric">@lang('app.metric')</p></a>
                                    </li>
                                    <li class="additional_information_tab" id="imperial_measurement" role="tab" aria-controls="tab-additional_information">
                                        <a href="#imperial_mea"><p id="imperial" for="imperial">@lang('app.imperial')</p></a>
                                    </li>
                                </ul>

                                <div class="panel wc-tab" id="material_mea" role="tabpanel" aria-labelledby="tab-title-description">
                                    <div class="container">
                                        <div class="intro_layers divider-35 flex-btn">
                                            <input type="number" class="input-text" id="age" placeholder="@lang('app.age')" autocomplete="organization" min="14" max="99" required>
                                        </div>
                                            <p for="metric_age" id="metric_age_empty" class="errorMsg">@lang('app.ageempty')</p>
                                            <p for="metric_age" id="metric_age_small" class="errorMsg">@lang('app.agesmall')</p>
                                            <p for="metric_age" id="metric_age_big" class="errorMsg">@lang('app.agebig')</p>

                                        <div class="intro_layers divider-10 flex-btn">
                                            <input type="number" class="input-text" id="height" placeholder="@lang('app.height')" autocomplete="organization" required>
                                        </div>
                                            <p for="metric_age" id="metric_height_empty" class="errorMsg">@lang('app.heightempty')</p>
                                            <p for="metric_age" id="metric_height_small" class="errorMsg">@lang('app.heightsmall')</p>
                                            <p for="metric_age" id="metric_height_big" class="errorMsg">@lang('app.heightbig')</p>

                                        <div class="intro_layers divider-10 flex-btn">
                                            <input type="number" class="input-text" id="weight" placeholder="@lang('app.weight')" autocomplete="organization" required>
                                        </div>
                                            <p for="metric_age" id="metric_weight_empty" class="errorMsg">@lang('app.weightempty')</p>
                                            <p for="metric_age" id="metric_weight_small" class="errorMsg">@lang('app.weightsmall')</p>
                                            <p for="metric_age" id="metric_weight_big" class="errorMsg">@lang('app.weightbig')</p>

                                        <div class="intro_layers divider-10 flex-btn">
                                            <input type="number" class="input-text" id="target_weight" placeholder="@lang('app.targetweight')" autocomplete="organization" required>
                                        </div>
                                            <p for="metric_age" id="metric_target_weight_empty" class="errorMsg">@lang('app.targetweightempty')</p>
                                            <p for="metric_age" id="metric_target_weight_small" class="errorMsg">@lang('app.targetweightsmall')</p>
                                            <p for="metric_age" id="metric_target_weight_big" class="errorMsg">@lang('app.targetweightbig')</p>

                                    </div>
                                </div>
                                <div class="panel wc-tab" id="imperial_mea" role="tabpanel" aria-labelledby="tab-title-additional_information">
                                    <div class="container">
                                        <div class="intro_layers divider-35 flex-btn">
                                            <input type="number" class="input-text" id="imperial_age" placeholder="@lang('app.age')" autocomplete="organization" min="14" max="99" required>
                                        </div>
                                            <p for="imperial_age" id="imperial_age_empty" class="errorMsg">@lang('app.ageempty')</p>
                                            <p for="imperial_age" id="imperial_age_small" class="errorMsg">@lang('app.agesmall')</p>
                                            <p for="imperial_age" id="imperial_age_big" class="errorMsg">@lang('app.agebig')</p>

                                        <div class="intro_layers divider-10 flex-btn">
                                            <input type="number" class="input-text" id="ft" placeholder="@lang('app.ft')" autocomplete="organization" required>
                                            <input type="number" class="input-text" id="inch" placeholder="@lang('app.inch')" autocomplete="organization" required>
                                        </div>
                                            <p for="imperial_height" id="imperial_ft_empty" class="errorMsg">@lang('app.ftempty')</p>
                                            <p for="imperial_height" id="imperial_ft_small" class="errorMsg">@lang('app.ftsmall')</p>
                                            <p for="imperial_height" id="imperial_ft_big" class="errorMsg">@lang('app.ftbig')</p>
                                            <p for="imperial_height" id="imperial_inch_big" class="errorMsg">@lang('app.inchbig')</p>

                                        <div class="intro_layers divider-10 flex-btn">
                                            <input type="number" class="input-text" id="imperial_weight" placeholder="@lang('app.imperialweight')" autocomplete="organization" required>
                                        </div>
                                            <p for="imperial_weight" id="imperial_weight_empty" class="errorMsg">@lang('app.imperialweightempty')</p>
                                            <p for="imperial_weight" id="imperial_weight_small" class="errorMsg">@lang('app.imperialweightsmall')</p>
                                            <p for="imperial_weight" id="imperial_weight_big" class="errorMsg">@lang('app.imperialweightbig')</p>

                                        <div class="intro_layers divider-10 flex-btn">
                                            <input type="number" class="input-text" id="imperial_target_weight" placeholder="@lang('app.imperialtargetweight')" autocomplete="organization" required>
                                        </div>
                                            <p for="imperial_age" id="imperial_target_weight_empty" class="errorMsg">@lang('app.imperialtargetweightempty')</p>
                                            <p for="imperial_age" id="imperial_target_weight_small" class="errorMsg">@lang('app.imperialtargetweightsmall')</p>
                                            <p for="imperial_age" id="imperial_target_weight_big" class="errorMsg">@lang('app.imperialtargetweightbig')</p>

                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- select measurements-->

                    <!-- processing plan-->
                    <div class="carousel-item diet-step-8">
                        <div class="intro_layers">
                            <div class="d-inline-block">
                                <h2 class="intro_featured_word">
                                    @lang('app.processingplan')
                                </h2>
                            </div>

                            <div class="intro_layers divider-100 flex-btn" id="chart-processing" data-animation="fadeInUp">
                                <div class="chart" data-size="240" data-percent="100" data-line="7" data-bgcolor="#e5e5e5" data-trackcolor="#82b440" data-speed="10000">
                                    <div class="chart-meta">
                                        <strong class="percent"></strong>
                                        <h4 class="text-uppercase thin"></h4>
                                    </div>
                                </div>
                                <div id="btn_show_result" class="btn btn-light divider-35" href="#slide" role="button" data-slide="next">@lang('app.continue')</div>
                            </div>
                        </div>
                    </div>
                    <!-- processing plan-->

                    <!-- show Data-->
                    <div class="carousel-item diet-step-9">
                        <div class="intro_layers">
                            <div class="container">
                                <div class="o-section-summary__head">
                                    <h2 class="o-section-summary__text-title a-text-title">
                                        <div>@lang('app.summary')</div>
                                    </h2>
                                    <div class="o-section-summary__profile-cards o-profile-cards">
                                </div>
                            </div>
                            <div class="o-section-summary__content">
                                <div class="o-section-summary__item-summary m-item-summary">
                                    <div class="m-item-summary__content">
                                        <div class="m-item-summary__head">
                                            <div class="m-item-summary__title">@lang('app.bmi')</div>
                                        </div>
                                        <div class="m-item-summary__middle">
                                            <div style="color: #3bf0a8" class="m-item-summary__graph-1-value js-item-color">
                                                <div id="diet_bmi" data-percent="20" class="m-item-summary__graph-1-integer js-bmi-item-color" style="color: rgb(58, 152, 100); fill: rgb(58, 152, 100);"></div>
                                                <div id="bmi-sup" class="m-item-summary__graph-1-decimal js-bmi-item-color"></div>
                                            </div>
                                            <svg id="graph-bmi" class="m-item-summary__graph-1" viewBox="0 0 560 302" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <defs>
                                                    <rect id="path-1" x="0" y="0" width="560" height="560" rx="20"></rect>
                                                    <linearGradient x1="45.8601369%" y1="170.848376%" x2="44.6298024%" y2="16.9029444%" id="linearGradient-3">
                                                        <stop stop-color="#FFFFFF" stop-opacity="0.112375453" offset="13.8711735%"></stop>
                                                        <stop stop-color="#FFFFFF" stop-opacity="0" offset="100%"></stop>
                                                    </linearGradient>
                                                    <linearGradient x1="50%" y1="26.9500636%" x2="50%" y2="70.342105%" id="linearGradient-4">
                                                        <stop stop-color="#00ADEE" offset="0%"></stop>
                                                        <stop stop-color="#00ADEE" offset="9.23947704%"></stop>
                                                        <stop stop-color="#05659E" offset="33.8129783%"></stop>
                                                        <stop stop-color="#3A9864" offset="44.4774394%"></stop>
                                                        <stop stop-color="#81C22F" offset="54.8011001%"></stop>
                                                        <stop stop-color="#F3AE04" offset="70.0613839%"></stop>
                                                        <stop stop-color="#C21300" offset="89.6982621%"></stop>
                                                        <stop stop-color="#C21300" offset="100%"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <g id="Results-★" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g id="Results-Woman-DFHD" transform="translate(-365.000000, -2090.000000)">
                                                        <g id="Boxes" transform="translate(212.000000, 1646.000000)">
                                                            <g id="1" transform="translate(153.000000, 242.000000)">
                                                                <g id="Group-3">
                                                                    <g id="Group-2">
                                                                        <mask id="mask-2" fill="white">
                                                                            <use xlink:href="#path-1"></use>
                                                                        </mask>
                                                                        <g id="Rectangle-9-Copy-2" opacity="0.900000036"></g>
                                                                        <path d="M-4.10351562,562.949219
                                                                        C29.7135119,488.957261 123.081007,440.465074 275.99897,417.472656
                                                                        C428.916933,394.480239 525.411417,342.885187 565.482422,262.6875
                                                                        L565.482422,194
                                                                        L-4.10351562,194
                                                                        L-4.10351562,562.949219 Z"
                                                                            id="Path-2-Copy" fill="url(#linearGradient-3)"
                                                                            transform="translate(280.689453, 378.474609) scale(-1, -1) translate(-280.689453, -378.474609) ">
                                                                        </path>
                                                                        <path d="M-4.10351562,494.261719
                                                                        C29.7135119,420.269761 123.081007,371.777574 275.99897,348.785156
                                                                        C428.916933,325.792739 525.411417,274.197687 565.482422,194"
                                                                            id="colored" stroke="url(#linearGradient-4)" stroke-width="2"
                                                                            transform="translate(280.689453, 344.130859) scale(-1, -1) translate(-280.689453, -344.130859) ">
                                                                        </path>
                                                                    </g>
                                                                    <circle id="Oval-2" class="circle js-bmi-item-color" stroke="#151226" stroke-width="6" fill="#3BF0A8" cx="278.31863549345" cy="342.43352077142043" r="13" style="color: rgb(58, 152, 100); fill: rgb(58, 152, 100);"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="m-item-summary__bottom">
                                            <div>@lang('app.yourbmi')</div>
                                            <div id="diet_bmio" style="color: #3bf0a8" class="js-bmi-item-color"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="o-section-summary__item-summary m-item-summary">
                                    <div class="m-item-summary__content">
                                        <div class="m-item-summary__head">
                                            <div class="m-item-summary__title">@lang('app.metabolictitle')</div>
                                        </div>
                                        <div class="m-item-summary__middle">
                                            <div id="graph-2" data-years="67" class="m-item-summary__graph-2-items js-graph-2-items">
                                                <div id="young" class="m-item-summary__graph-2-item js-graph-2-item m-item-summary__graph-2-item--active">
                                                    <svg id="young-svg" class="m-item-summary__graph-2" viewBox="0 0 146 209" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                                                        <defs></defs>
                                                        <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <g class="stroke stroke-1" transform="translate(1.000000, 1.000000)"
                                                            stroke="#676283" stroke-width="2" fill="#1F1D2F">
                                                                <g id="Page-1">
                                                                    <path d="M73.5,29 C65.4732143,29 59,22.5409091 59,14.5 C59,6.45909091 65.4732143,0 73.5,0 C81.5267857,0 88,6.45909091 88,14.5 C88,22.5409091 81.5267857,29 73.5,29 Z"
                                                                        id="Stroke-1">
                                                                    </path>
                                                                    <path d="M141.502404,17.0878885
                                                                    L134.772509,23.7050352
                                                                    L94.9209776,62.878544
                                                                    L94.9209776,116.080404
                                                                    L94.9209776,116.34509
                                                                    L94.9209776,123.888637
                                                                    L94.9209776,196.544908
                                                                    C94.9209776,202.367997 90.56634,207 85.2879915,207
                                                                    C80.0096429,207 75.6550054,202.367997 75.6550054,196.544908
                                                                    L75.6550054,125.609095
                                                                    L73.8075834,125.609095
                                                                    L71.3003678,125.609095
                                                                    L71.3003678,196.544908
                                                                    C71.3003678,202.367997 66.9457302,207 61.6673817,207
                                                                    C56.3890331,207 52.0343956,202.367997 52.0343956,196.544908
                                                                    L52.0343956,125.609095
                                                                    L52.0343956,105.889998
                                                                    L52.0343956,66.0547744
                                                                    L9.27977227,23.7050352
                                                                    L2.54987786,17.0878885
                                                                    C-0.617131269,14.044001 -0.881048697,9.14731241 2.02204301,6.10342491
                                                                    C4.793176,3.19188034 9.67564841,3.32422328 12.8426575,6.36811078
                                                                    L30.2612078,23.4403494
                                                                    L52.1663543,45.0122478
                                                                    L52.1663543,44.7475619
                                                                    L52.5622304,44.7475619
                                                                    C55.3333634,38.6597869 61.2715055,34.1601271 68.3972761,33.7630983
                                                                    L70.1127394,33.7630983
                                                                    L76.9745925,33.7630983
                                                                    L78.6900558,33.7630983
                                                                    C85.1560328,34.1601271 90.8302575,37.8657293 93.7333492,43.1594467
                                                                    L113.659115,23.4403494
                                                                    L131.077665,6.36811078
                                                                    C134.244674,3.32422328 139.127147,3.19188034 142.030238,6.10342491
                                                                    C144.801371,9.14731241 144.669413,14.044001 141.502404,17.0878885
                                                                    Z" id="Stroke-3">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div id="middle-age" class="m-item-summary__graph-2-item js-graph-2-item">
                                                    <svg id="middle-age-svg" class="m-item-summary__graph-2" viewBox="0 0 81 209" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        style="opacity: 0.5; transform: matrix(0.7, 0, 0, 0.7, 0, -30);">
                                                        <defs></defs>
                                                        <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <g class="stroke stroke-2" transform="translate(-32.000000, 1.000000)"
                                                            stroke="#676283" stroke-width="2" fill="#1F1D2F">
                                                                <g id="Page-1" transform="translate(33.000000, 0.000000)">
                                                                    <path d="M39.5,29 C31.4732143,29 25,22.5409091 25,14.5 C25,6.45909091 31.4732143,0 39.5,0
                                                                    C47.5267857,0 54,6.45909091 54,14.5 C54,22.5409091 47.5267857,29 39.5,29 Z" id="Stroke-1">
                                                                    </path>
                                                                    <path d="M71.2831126,121.657492
                                                                    C67.2284768,121.657492 63.9586093,118.107034 63.9586093,113.636086
                                                                    L63.9586093,58.0122324
                                                                    L60.4271523,58.0122324
                                                                    L60.4271523,116.66055
                                                                    L60.4271523,116.923547
                                                                    L60.4271523,124.41896
                                                                    L60.4271523,196.611621
                                                                    C60.4271523,202.397554 56.1109272,207 50.8791391,207
                                                                    C45.647351,207 41.3311258,202.397554 41.3311258,196.611621
                                                                    L41.3311258,126.12844
                                                                    L39.5,126.12844
                                                                    L37.1456954,126.12844
                                                                    L37.1456954,196.611621
                                                                    C37.1456954,202.397554 32.8294702,207 27.5976821,207
                                                                    C22.365894,207 18.0496689,202.397554 18.0496689,196.611621
                                                                    L18.0496689,126.12844
                                                                    L18.0496689,106.535168
                                                                    L18.0496689,58.1437309
                                                                    L14.6490066,58.1437309
                                                                    L14.6490066,104.299694
                                                                    L14.6490066,113.767584
                                                                    C14.6490066,118.107034 11.3791391,121.788991 7.32450331,121.788991
                                                                    C3.26986755,121.788991 0,118.238532 0,113.767584
                                                                    L0,89.440367
                                                                    L0,52.3577982
                                                                    C0,51.7003058 0.130794702,51.0428135 0.261589404,50.5168196
                                                                    C1.56953642,42.1009174 8.63245033,35.5259939 17.3956954,35
                                                                    L19.0960265,35
                                                                    L59.9039735,35
                                                                    L61.6043046,35
                                                                    C70.3675497,35.5259939 77.4304636,42.1009174 78.7384106,50.5168196
                                                                    C78.8692053,51.1743119 79,51.7003058 79,52.3577982 L79,113.636086
                                                                    C78.7384106,118.107034 75.3377483,121.657492 71.2831126,121.657492
                                                                    Z" id="Stroke-3">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div id="old-age" class="m-item-summary__graph-2-item js-graph-2-item">
                                                    <!--?xml version="1.0" encoding="UTF-8"?-->
                                                    <svg id="old-age-svg" class="m-item-summary__graph-2" viewBox="0 0 86 207" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        style="opacity: 0.2; transform: matrix(0.5, 0, 0, 0.5, 0, -50);">
                                                        <defs></defs>
                                                        <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <g class="stroke stroke-3" transform="translate(-30.000000, 0.000000)"
                                                            stroke="#676283" stroke-width="2" fill="#1F1D2F">
                                                                <g id="Page-1" transform="translate(31.000000, 1.000000)">
                                                                    <path d="M40,29 C31.6964286,29 25,22.5409091 25,14.5 C25,6.45909091 31.6964286,0 40,0 C48.3035714,0
                                                                    55,6.45909091 55,14.5 C55,22.5409091 48.3035714,29 40,29 Z" id="Stroke-1">
                                                                    </path>
                                                                    <path d="M44.00861,76.0641711
                                                                    L39.6863358,80.8976318
                                                                    L35.3640616,76.0641711
                                                                    L39.1624238,42.8831169
                                                                    L40.3412259,42.8831169
                                                                    L44.00861,76.0641711 Z
                                                                    M39.6863358,35.4369748
                                                                    C41.2580719,35.4369748 42.436874,36.7433155 42.436874,38.1802903
                                                                    C42.436874,39.7478992 41.1270939,40.9236058 39.6863358,40.9236058
                                                                    C38.1145998,40.9236058 36.9357977,39.6172651 36.9357977,38.1802903
                                                                    C36.8048197,36.6126814 38.1145998,35.4369748 39.6863358,35.4369748 Z
                                                                    M78.8487596,49.4148205
                                                                    C77.5389796,41.0542399 70.4661672,34.5225363 61.6906408,34
                                                                    L59.9879268,34
                                                                    L19.1227889,34
                                                                    L17.4200748,34
                                                                    C8.6445484,34.5225363 1.57173607,41.0542399 0.261956012,49.4148205
                                                                    C0.130978006,50.0679908 0,50.5905271 0,51.2436975
                                                                    L0,88.0825057
                                                                    L0,112.249809
                                                                    C0,116.560733 3.27445015,120.218487 7.33476834,120.218487
                                                                    C11.3950865,120.218487 14.6695367,116.691367 14.6695367,112.249809
                                                                    L14.6695367,102.844156
                                                                    L14.6695367,56.9915966
                                                                    L18.0749648,56.9915966
                                                                    L18.0749648,105.195569
                                                                    L18.0749648,124.660046
                                                                    L18.0749648,194.679908
                                                                    C18.0749648,200.427807 22.397239,205 27.6363593,205
                                                                    C32.8754795,205 37.1977537,200.427807 37.1977537,194.679908
                                                                    L37.1977537,124.529412
                                                                    L39.6863358,124.529412
                                                                    L41.5200279,124.529412
                                                                    L41.5200279,194.549274
                                                                    C41.5200279,200.297173 45.8423021,204.869366 51.0814223,204.869366
                                                                    C56.3205426,204.869366 60.6428168,200.297173 60.6428168,194.549274
                                                                    L60.6428168,122.831169
                                                                    L60.6428168,115.385027
                                                                    L60.6428168,115.123759
                                                                    L60.6428168,56.8609626
                                                                    L64.179223,56.8609626
                                                                    L64.179223,112.119175
                                                                    C64.179223,116.430099 67.4536731,120.087853 71.5139913,120.087853
                                                                    C75.5743095,120.087853 78.8487596,116.560733 78.8487596,112.119175
                                                                    L78.8487596,51.2436975
                                                                    C79.1107156,50.5905271 78.9797376,49.9373568 78.8487596,49.4148205
                                                                    Z" id="Stroke-3">
                                                                    </path>
                                                                    <path d="M70,127 L70,124.290323
                                                                    C70,123.645161 70.4705882,123 71.1764706,123
                                                                    L72.8235294,123
                                                                    C73.4117647,123 74,123.516129 74,124.290323
                                                                    L74,127
                                                                    L70,127
                                                                    Z" id="Stroke-5">
                                                                    </path>
                                                                    <path d="M81.5135135,175.869688
                                                                    L78.8108108,174.827195
                                                                    L76.1081081,175.869688
                                                                    L74.7567568,175.869688
                                                                    L72.0540541,174.827195
                                                                    L69.3513514,175.869688
                                                                    L68,175.869688
                                                                    L68,134.169972
                                                                    C68.2702703,131.824363 70.2972973,130 72.8648649,130
                                                                    C75.4324324,130 77.4594595,131.824363 77.7297297,134.300283
                                                                    L83,176 L81.5135135,176
                                                                    L81.5135135,175.869688
                                                                    Z" id="Stroke-7">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div id="older-age" class="m-item-summary__graph-2-item js-graph-2-item">
                                                    <!--?xml version="1.0" encoding="UTF-8"?-->
                                                    <svg id="older-age-svg" class="m-item-summary__graph-2" viewBox="0 0 102 195" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        style="transform: matrix(0, 0, 0, 0, 0, 0);">
                                                        <defs></defs>
                                                        <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <g class="stroke stroke-4" transform="translate(-21.000000, -13.000000)"
                                                            stroke="#676283" stroke-width="2" fill="#1F1D2F">
                                                                <g id="Page-1" transform="translate(22.000000, 14.000000)">
                                                                    <path d="M41,28
                                                                    C33.293578,28 27,21.7196262 27,14
                                                                    C27,6.28037383 33.293578,0 41,0
                                                                    C48.706422,0 55,6.28037383 55,14
                                                                    C55,21.7196262 48.706422,28 41,28
                                                                    Z" id="Stroke-1">
                                                                    </path>
                                                                    <path d="M98.18,193
                                                                    C97.14,193 96.36,192.216995 96.36,191.172989
                                                                    L96.36,113.525038
                                                                    C96.36,111.567527 94.93,110.654021 93.5,110.654021
                                                                    C92.07,110.654021 90.64,111.698027 90.64,113.525038
                                                                    L90.64,114.047041
                                                                    C90.64,114.960546 89.86,115.743551 88.82,115.743551
                                                                    C87.78,115.743551 87,114.960546 87,114.047041
                                                                    L87,113.394537
                                                                    C87,109.218513 90.25,107 93.5,107
                                                                    C96.75,107.130501 100,109.218513 100,113.394537
                                                                    L100,191.30349
                                                                    C100,192.216995 99.22,193 98.18,193
                                                                    Z" id="Stroke-3">
                                                                    </path>
                                                                    <path d="M96.9484464,103.617363
                                                                    C93.8084158,106.649518 88.5750313,106.385852 85.0424968,102.958199
                                                                    L66.0714783,84.3697749
                                                                    L66.0714783,54.3118971
                                                                    L63.1931169,54.3118971
                                                                    L63.1931169,182.189711
                                                                    C63.1931169,188.122186 58.7447401,193 53.2496865,193
                                                                    C47.7546328,193 43.3062561,188.122186 43.3062561,182.189711
                                                                    L43.3062561,116.800643
                                                                    L40.6895639,116.800643
                                                                    L38.7270447,116.800643
                                                                    L38.7270447,151.209003
                                                                    L38.7270447,182.189711
                                                                    C38.7270447,188.122186 34.278668,193 28.7836143,193
                                                                    C23.2885607,193 18.8401839,188.122186 18.8401839,182.189711
                                                                    L18.8401839,107.176849
                                                                    L18.8401839,106.913183
                                                                    L18.8401839,54.4437299
                                                                    L15.9618225,54.4437299
                                                                    L15.9618225,81.6012862
                                                                    L15.9618225,102.562701
                                                                    C15.9618225,107.308682 12.429288,111.263666 7.98091124,111.263666
                                                                    C3.53253448,111.263666 0,107.440514 0,102.562701
                                                                    L0,76.3279743
                                                                    L0,47.85209
                                                                    C0,47.192926 0.130834611,46.5337621 0.261669221,45.8745981
                                                                    C1.57001533,36.9099678 8.89675352,29.9228296 18.0551763,29
                                                                    L18.7093493,29
                                                                    L29.9611258,29
                                                                    C31.4003065,33.6141479 35.7178487,37.0418006 40.6895639,37.0418006
                                                                    C45.7921137,37.0418006 50.1096558,33.6141479 51.4180019,29
                                                                    L62.9314477,29
                                                                    L64.1089592,29
                                                                    C72.6132088,30.0546624 79.285774,36.5144695 80.4632855,44.8199357
                                                                    C80.5941201,45.4790997 80.7249547,46.1382637 80.7249547,46.7974277
                                                                    L80.7249547,77.1189711
                                                                    L95.9017695,92.0160772
                                                                    C99.6959732,95.3118971 99.9576424,100.453376 96.9484464,103.617363
                                                                    Z" id="Stroke-5">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-item-summary__bottom">
                                            <div>@lang('app.yourmetabolicage')</div>
                                            <div style="color: #AFEF31" class="js-item-color-graph-2">
                                                <span id="diet_metabolic_age">0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="o-section-summary__item-summary m-item-summary">
                                    <div class="m-item-summary__content">
                                        <div class="m-item-summary__head">
                                            <div class="m-item-summary__title">@lang('app.calories')</div>
                                        </div>
                                        <div class="m-item-summary__middle">
                                            <svg class="m-item-summary__graph-3" width="288px" height="162px" viewBox="0 0 288 162"
                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <defs>
                                                    <radialGradient cx="50%" cy="88.1608583%" fx="50%" fy="88.1608583%" r="95.4496814%"
                                                        gradientTransform="translate(0.500000,0.881609),scale(0.662222,1.000000),rotate(-93.186016),translate(-0.500000,-0.881609)"
                                                        id="radialGradient-1">
                                                        <stop stop-color="#FFFFFF" stop-opacity="0" offset="0%"></stop>
                                                        <stop stop-color="#FFFFFF" stop-opacity="0" offset="76.1896091%"></stop>
                                                        <stop stop-color="#FFFFFF" stop-opacity="0.112375453" offset="100%"></stop>
                                                    </radialGradient>
                                                    <linearGradient x1="-2.06612668%" y1="98.8081952%" x2="97.2721884%" y2="2.64074039%" id="linearGradient-2">
                                                        <stop stop-color="#FFCA3E" offset="0%"></stop>
                                                        <stop stop-color="#FF7E22" offset="100%"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <g id="Results-★" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g id="Mealplan-Woman-MOBILE" transform="translate(-72.000000, -2440.000000)">
                                                        <g id="Boxes" transform="translate(20.000000, 1452.000000)">
                                                            <g id="3" transform="translate(0.000000, 886.000000)">
                                                                <g id="Group-4" transform="translate(44.000000, 106.000000)">
                                                                    <g id="Group-3" transform="translate(33.000000, 0.000000)">
                                                                        <path d="M218.866335,149
                                                                            C222.841269,137.506072 225,125.166742 225,112.324001
                                                                            C225,50.2891681 174.632034,0 112.5,0
                                                                            C50.3679656,0 0,50.2891681 0,112.324001
                                                                            C0,125.010422 2.1065,137.205614 5.98932687,148.57992"
                                                                            id="Oval-3" fill="url(#radialGradient-1)">
                                                                        </path>
                                                                        <path d="M223.294558,132 C224.41543,125.633705 225,119.082781 225,112.395451 C225,50.3211573 174.632034,0 112.5,0 C50.3679656,0 0,50.3211573 0,112.395451 C0,118.806699 0.537299006,125.092571 1.56936426,131.210573"
                                                                                id="Oval-3-Copy-2" stroke="#3E3A54" stroke-width="2"
                                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                        </path>
                                                                        <path d="M131,1.46295178
                                                                            C125.032538,0.500446662 118.90792,0 112.665,0
                                                                            C84.5182985,0 58.7763611,10.1727238 39,27"
                                                                            id="Oval-3-Copy-3" stroke="url(#linearGradient-2)"
                                                                            stroke-width="7" stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                        </path>
                                                                    </g>
                                                                        <text id="2218---2314-kcal" font-size="30" font-weight="300">
                                                                            <tspan x="67.9091797" y="96.4642857" fill="#FFC93E" id="diet_cal">
                                                                            </tspan>
                                                                            <tspan x="224.09082" y="96.4642857" font-size="36" fill="#FF9B2B"></tspan>
                                                                            <tspan x="124.830078" y="135.464286" font-size="24" fill="#FFA430">@lang('app.calories')</tspan>
                                                                        </text>
                                                                        <text id="0-kcal" opacity="0.5" font-size="18" font-weight="300" fill="#FFFFFF">
                                                                            <tspan x="7.64013672" y="157">0 @lang('app.calories')</tspan>
                                                                        </text>
                                                                        <text id="5000-kcal" opacity="0.5" font-size="18" font-weight="300" fill="#FFFFFF">
                                                                            <tspan x="219.705078" y="157">5000 @lang('app.calories')</tspan>
                                                                        </text>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="m-item-summary__bottom">
                                            <span>@lang('app.recommendedcalories')</span><br>
                                            <span class="normal graph-3-span graph-3-span--1" id="diet_calo"></span>
                                            <span class="normal graph-3-span graph-3-span--2">- </span>
                                            <span class="normal graph-3-span graph-3-span--4">@lang('app.calories')</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="o-section-summary__item-summary m-item-summary">
                                    <div class="m-item-summary__content">
                                        <div class="m-item-summary__head">
                                            <div class="m-item-summary__title">@lang('app.water')</div>
                                        </div>
                                        <div class="m-item-summary__middle">
                                            <svg class="m-item-summary__graph-4" width="189px" height="232px" viewBox="0 0 189 232"
                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <defs>
                                                    <linearGradient x1="0%" y1="50%" x2="100%" y2="50%" id="linearGradient-1">
                                                        <stop stop-color="#33F5E0" offset="0%"></stop>
                                                        <stop stop-color="#5172E8" offset="100%"></stop>
                                                    </linearGradient>
                                                    <path d="M143.66866,94.6634816 L134.711538,206.505495 L17.2884615,206.505495 L8.41874429,95.7548456 C24.2403287,84.8071136 37.4134443,84.7108118 47.9380912,95.4659402 C63.7250615,111.598633 89.7845836,79.5859375 104.738585,94.9851141 C114.707919,105.251232 127.684611,105.144021 143.66866,94.6634816 Z"
                                                        id="path-2">
                                                    </path>
                                                </defs>
                                                <g id="Results-★" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g id="Results-Woman-DFHD" transform="translate(-1197.000000, -2687.000000)">
                                                        <g id="Boxes" transform="translate(212.000000, 1646.000000)">
                                                            <g id="4" transform="translate(783.000000, 872.000000)">
                                                                <g id="water" transform="translate(202.000000, 169.000000)">
                                                                    <text id="5-L" opacity="0.5" font-size="18" font-weight="300" fill="#FFFFFF">
                                                                        <tspan x="165.082031" y="38">5 L</tspan>
                                                                    </text>
                                                                    <text id="0-L" opacity="0.5" font-size="18" font-weight="300" fill="#FFFFFF">
                                                                        <tspan x="165.082031" y="208">0 L</tspan>
                                                                    </text>
                                                                    <path d="M150.166711,1 L1.83328913,1 L18.2115761,205.505495 L133.788424,205.505495 L150.166711,1 Z"
                                                                        id="Rectangle-3" stroke="#3E3A54" stroke-width="2">
                                                                    </path>
                                                                    <g id="Rectangle-3-Copy">
                                                                        <use fill="#1F1D2F" fill-rule="evenodd" xlink:href="#path-2"></use>
                                                                        <path stroke="url(#linearGradient-1)" stroke-width="2" d="M30,205 Z M30,205.505495
                                                                        M9.46175511,96.2519154 Z
                                                                        M142.511495,96.5859226
                                                                        C143.076498,96.2368514 143.645,95.8747901 144.216988,95.4997452 Z
                                                                        M142.511495,96.5859226
                                                                        L133.788424,205.505495
                                                                        L18.2115761,205.505495
                                                                        L9.46175511,96.2519154
                                                                        C24.6977781,85.8847895 37.1774972,85.8994802 47.2233676,96.1653473
                                                                        C50.9764925,100.000663 55.4750146,101.490681 60.8754524,101.078895
                                                                        C65.0016062,100.764274 68.9770061,99.5650228 75.8026717,96.9060414
                                                                        C76.2154638,96.7452356 76.596213,96.5961754 77.2543905,96.3379829
                                                                        C84.9546825,93.3172811 88.1688403,92.2615105 92.0015183,91.8124008
                                                                        C96.9336894,91.2344535 100.808065,92.3730027 104.021185,95.6817752
                                                                        C114.001907,105.95962 126.925515,106.215278 142.511495,96.5859226 Z">
                                                                        </path>
                                                                    </g>
                                                                    <text id="2.7L" font-size="50" font-weight="300" fill="#37B4FF">
                                                                        <tspan x="37.4179688" y="176" id="diet_water">
                                                                        </tspan>
                                                                        <tspan x="104.776367" y="176" font-size="30">L</tspan>
                                                                    </text>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="m-item-summary__bottom">
                                            <span>@lang('app.recommendedwater')</span>
                                            <span style="color: #37b4ff" class="normal">
                                               <span id="diet_watero"></span> L
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="o-section-summary__item-summary m-item-summary">
                                    <div class="m-item-summary__content">
                                        <div class="m-item-summary__head">
                                            <div class="m-item-summary__title height-line">@lang('app.losebodyparts')</div>
                                        </div>
                                        <div class="m-item-summary__middle"><!--?xml version="1.0" encoding="UTF-8"?-->
                                            <svg class="m-item-summary__graph-7" viewBox="0 0 218 231" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="Results-v3-★" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g id="Results-Man-DFHD" transform="translate(-536.000000, -2650.000000)">
                                                        <g id="Boxes" transform="translate(212.000000, 948.000000)">
                                                            <g id="5" transform="translate(153.000000, 1502.000000)">
                                                                <g id="Page-1" transform="translate(172.000000, 200.000000)">
                                                                    <path d="M49.8888889,32.3623188
                                                                        C40.9702381,32.3623188 33.7777778,25.1543478 33.7777778,16.1811594
                                                                        C33.7777778,7.20797101 40.9702381,0 49.8888889,0
                                                                        C58.8075397,0 66,7.20797101 66,16.1811594
                                                                        C66,25.1543478 58.8075397,32.3623188 49.8888889,32.3623188 Z"
                                                                        id="Stroke-1" fill="#3E3A54">
                                                                    </path>
                                                                    <path d="M85.2034584,135.762709
                                                                        C80.6983076,135.762709 77.0651214,131.800603 77.0651214,126.811284
                                                                        L77.0651214,64.7382883
                                                                        L73.1412804,64.7382883
                                                                        L73.1412804,130.186411
                                                                        L73.1412804,130.479901
                                                                        L73.1412804,138.844347
                                                                        L73.1412804,219.407171
                                                                        C73.1412804,225.863937 68.3454746,231 62.5323767,231
                                                                        C56.7192789,231 51.9234731,225.863937 51.9234731,219.407171
                                                                        L51.9234731,140.752028
                                                                        L49.8888889,140.752028
                                                                        L47.2729948,140.752028
                                                                        L47.2729948,219.407171
                                                                        C47.2729948,225.863937 42.4771891,231 36.6640912,231
                                                                        C30.8509934,231 26.0551876,225.863937 26.0551876,219.407171
                                                                        L26.0551876,140.752028
                                                                        L26.0551876,118.887072
                                                                        L26.0551876,64.885033
                                                                        L22.276674,64.885033
                                                                        L22.276674,116.392412
                                                                        L22.276674,126.958029
                                                                        C22.276674,131.800603 18.6434879,135.909454 14.138337,135.909454
                                                                        C9.63318617,135.909454 6,131.947347 6,126.958029
                                                                        L6,99.8102646
                                                                        L6,58.4282675
                                                                        C6,57.6945442 6.14532745,56.9608208 6.29065489,56.3738421
                                                                        C7.74392936,46.9821832 15.5916115,39.6449497 25.3285504,39.057971
                                                                        L27.2178072,39.057971
                                                                        L72.5599706,39.057971
                                                                        L74.4492274,39.057971
                                                                        C84.1861663,39.6449497 92.0338484,46.9821832 93.4871229,56.3738421
                                                                        C93.6324503,57.1075655 93.7777778,57.6945442 93.7777778,58.4282675
                                                                        L93.7777778,126.811284
                                                                        C93.4871229,131.800603 89.7086093,135.762709 85.2034584,135.762709 Z"
                                                                        id="Stroke-3" fill="#3E3A54">
                                                                    </path>
                                                                    <path d="M178.5,39 L178.5,39
                                                                        C184.29899,39 189,43.7010101 189,49.5
                                                                        L189,84.8979492
                                                                        L189,97.1289062
                                                                        L189,109.730469 L189,220.5
                                                                        C189,226.29899 184.29899,231 178.5,231
                                                                        L178.5,231
                                                                        C172.70101,231 168,226.29899 168,220.5
                                                                        L168,49.5
                                                                        C168,43.7010101 172.70101,39 178.5,39 Z"
                                                                        id="Rectangle" fill="#3E3A54">
                                                                    </path>
                                                                    <path d="M188.960693,102.07251
                                                                        C188.960693,109.988984 190.131273,115.147835 192.472431,117.549061
                                                                        C193.458771,118.560708 198.0836,123.752456 198.932617,126.922363
                                                                        C203.023926,142.197754 194.953865,147.904697 191.226882,151.20706
                                                                        C189.71609,152.545726 188.960693,155.810039 188.960693,161
                                                                        L188.960693,102.07251 Z"
                                                                        id="Rectangle" fill="#3E3A54">
                                                                    </path>
                                                                    <rect id="Rectangle" fill="#3E3A54" transform="translate(162.583801, 84.962022) rotate(20.000000) translate(-162.583801, -84.962022) "
                                                                        x="154.583801" y="38.9620217" width="16" height="92" rx="8"></rect>
                                                                    <g id="Group-6" transform="translate(32.333333, 15.000000)" fill="#FFE701">
                                                                        <ellipse id="Oval" stroke="#FFEB00" fill-opacity="0.5" opacity="0.5" cx="17" cy="17.3623188" rx="16.6666667" ry="16.7391304"></ellipse>
                                                                        <ellipse id="Oval" cx="17" cy="17.3623188" rx="6.66666667" ry="6.73913043"></ellipse>
                                                                    </g>
                                                                    <g id="Group-6" transform="translate(30.333333, 92.000000)" fill="#FFE701">
                                                                        <circle id="Oval" stroke="#FFEB00" fill-opacity="0.5" opacity="0.5" cx="20" cy="20" r="20"></circle>
                                                                        <circle id="Oval" cx="20" cy="20" r="8"></circle>
                                                                    </g>
                                                                    <g id="Group-6" transform="translate(70.333333, 55.000000)" fill="#FFE701">
                                                                        <circle id="Oval" stroke="#FFEB00" fill-opacity="0.5" opacity="0.5" cx="13" cy="13" r="13"></circle>
                                                                        <circle id="Oval" cx="13" cy="13" r="5"></circle>
                                                                    </g>
                                                                    <g id="Group-6" transform="translate(0.333333, 55.000000)" fill="#FFE701">
                                                                        <circle id="Oval" stroke="#FFEB00" fill-opacity="0.5" opacity="0.5" cx="13" cy="13" r="13"></circle>
                                                                        <circle id="Oval" cx="13" cy="13" r="5"></circle>
                                                                    </g>
                                                                    <g id="Group-6" transform="translate(20.333333, 147.000000)" fill="#FFE701">
                                                                        <circle id="Oval" stroke="#FFEB00" fill-opacity="0.5" opacity="0.5" cx="13" cy="13" r="13"></circle>
                                                                        <circle id="Oval" cx="13" cy="13" r="5"></circle>
                                                                    </g>
                                                                    <g id="Group-6" transform="translate(54.333333, 147.000000)" fill="#FFE701">
                                                                        <circle id="Oval" stroke="#FFEB00" fill-opacity="0.5" opacity="0.5" cx="13" cy="13" r="13"></circle>
                                                                        <circle id="Oval" cx="13" cy="13" r="5"></circle>
                                                                    </g>
                                                                    <g id="Group-8" transform="translate(174.333333, 109.000000)" fill="#FFE701">
                                                                        <ellipse id="Oval" stroke="#FFEB00" fill-opacity="0.5" opacity="0.5" cx="21" cy="21.3308489" rx="20.5882353" ry="20.5652174"></ellipse>
                                                                        <ellipse id="Oval" cx="21" cy="21.3308489" rx="8.23529412" ry="8.27950311"></ellipse>
                                                                    </g>
                                                                    <path d="M177.555556,32.3623188
                                                                        C168.636905,32.3623188 161.444444,25.1543478 161.444444,16.1811594
                                                                        C161.444444,7.20797101 168.636905,0 177.555556,0 C186.474206,0 193.666667,7.20797101 193.666667,16.1811594
                                                                        C193.666667,25.1543478 186.474206,32.3623188 177.555556,32.3623188 Z"
                                                                        id="Stroke-1" fill="#3E3A54">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="m-item-summary__bottom"><span>@lang('app.losebodypartstitle')</span><span style="color: #FFE701;">@lang('app.losebodypartscontent')</span></div>
                                    </div>
                                </div>

                                <div class="o-section-summary__item-summary m-item-summary">
                                    <div class="m-item-summary__content">
                                        <div class="m-item-summary__head">
                                            <div class="m-item-summary__title">@lang('app.achievableweight')</div>
                                        </div>
                                        <div class="m-item-summary__middle">
                                            <div class="m-item-summary__graph-6">
                                                <div class="m-item-summary__circles">
                                                    <div class="m-item-summary__circle m-item-summary__circle--back js-icon-title-circle"></div>
                                                    <div class="m-item-summary__circle m-item-summary__circle--middle js-icon-title-circle"></div>
                                                    <div class="m-item-summary__circle m-item-summary__circle--front"></div>
                                                </div>
                                                <div class="m-item-summary__circles-content">
                                                    <div id="diet_target_weight" data-count="" class="js-graph-6-count">0</div>
                                                    <div class="weightUnit">@lang('app.kilograms')</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-item-summary__bottom">
                                            <span>@lang('app.achievableweightcontent')</span>
                                            <span style="color: #fa30d6;" class="normal">
                                                <div class="achievableWeight inline-block" id="diet_target_weighto"></div>
                                                <div class="weightUnit inline-block">@lang('app.kilograms')</div>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="o-section-summary__item-summary m-item-summary">
                                    <div class="m-item-summary__content">
                                        <div class="m-item-summary__head">
                                            <div class="m-item-summary__title">@lang('app.myweight')</div>
                                        </div>
                                        <div class="m-item-summary__middle"><!--?xml version="1.0" encoding="UTF-8"?-->
                                            <svg id="graph-8" class="m-item-summary__graph-8" viewBox="0 0 432 212" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <defs>
                                                    <linearGradient x1="50%" y1="0.826451538%" x2="50%" y2="96.3207519%" id="linearGradient-7">
                                                        <stop stop-color="#8A25F8" stop-opacity="0.625424592" offset="0%"></stop>
                                                        <stop stop-color="#AD32FF" stop-opacity="0" offset="100%"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <g id="Results-v3-★" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g id="Results-Woman-DFHD" transform="translate(-430.000000, -3263.000000)">
                                                        <g id="Boxes" transform="translate(212.000000, 948.000000)">
                                                            <g id="7A" transform="translate(153.000000, 2132.000000)">
                                                                <g id="Group-3" transform="translate(64.000000, 178.000000)">
                                                                    <path d="M28.5,215.789264 L28.5,30.6180374" id="Line" stroke="#3E3A54"
                                                                        stroke-width="2" opacity="0.5" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path d="M153.5,215.789264 L153.5,30.6180374" id="Line" stroke="#3E3A54"
                                                                        stroke-width="2" opacity="0.5" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path d="M277.5,215.789264 L277.5,30.6180374" id="Line" stroke="#3E3A54"
                                                                        stroke-width="2" opacity="0.5" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path d="M402.5,215.449704 L402.5,30.3740292" id="Line" stroke="#3E3A54"
                                                                        stroke-width="2" opacity="0.5" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>

                                                                    <path class="loose" d="M29.683276,68.8085938
                                                                        C203.022276,76.491875 323.215364,180.539063 403.398438,180.539063
                                                                        C403.398438,186.242188 403.398438,198.595052 403.398438,217.597656
                                                                        L27.6794098,217.597656
                                                                        L27.6794098,68.8085938
                                                                        C20.7936152,68.4441652 21.4615706,68.4441652 29.683276,68.8085938 Z"
                                                                        id="Path-2" fill="url(#linearGradient-7)">
                                                                    </path>

                                                                    <circle id="Oval-1" stroke="#151226" stroke-width="3" fill="#FFFFFF" cx="29" cy="68"
                                                                            r="6.5"></circle>
                                                                    <circle id="Oval-2" stroke="#151226" stroke-width="3" fill="#FFFFFF" cx="153"
                                                                            cy="90"
                                                                            r="6.5"></circle>
                                                                    <circle id="Oval-3" stroke="#151226" stroke-width="3" fill="#FFFFFF" cx="277"
                                                                            cy="140"
                                                                            r="6.5"></circle>
                                                                    <circle id="Oval-4" stroke="#151226" stroke-width="3" fill="#9830FA" cx="403"
                                                                            cy="179"
                                                                            r="9.5"></circle>

                                                                    <text id="Week-1-value" font-family="Roboto-Light, Roboto" font-size="20"
                                                                        font-weight="300" fill="#FFFFFF">
                                                                        <tspan x="6" y="58" id="weight-1"></tspan>
                                                                        <tspan x="39.5981445" y="58" font-size="14">kg</tspan>
                                                                    </text>
                                                                    <text id="Week-2-value" font-family="Roboto-Light, Roboto" font-size="20"
                                                                        font-weight="300" fill="#FFFFFF">
                                                                        <tspan x="130" y="79" id="weight-2"></tspan>
                                                                        <tspan x="163.598145" y="79" font-size="14">kg</tspan>
                                                                    </text>
                                                                    <text id="Week-3-value" font-family="Roboto-Light, Roboto" font-size="20"
                                                                        font-weight="300" fill="#FFFFFF">
                                                                        <tspan x="255" y="125" id="weight-3"></tspan>
                                                                        <tspan x="287.598145" y="125" font-size="14">kg</tspan>
                                                                    </text>
                                                                    <text id="Week-4-value" font-family="Roboto-Light, Roboto" font-size="36"
                                                                        font-weight="300" fill="#FFFFFF">
                                                                        <tspan x="350" y="165" id="weight-4"></tspan>
                                                                        <tspan x="410.046875" y="165" font-size="24">kg</tspan>
                                                                    </text>

                                                                    <text id="Week-1" opacity="0.5" font-family="Roboto-Light, Roboto" font-size="18"
                                                                        font-weight="300" fill="#FFFFFF">
                                                                        <tspan x="0.70703125" y="19">@lang('app.weeks') 1</tspan>
                                                                    </text>
                                                                    <text id="Week-2" opacity="0.5" font-family="Roboto-Light, Roboto" font-size="18"
                                                                        font-weight="300" fill="#FFFFFF">
                                                                        <tspan x="125.707031" y="19">@lang('app.weeks') 2</tspan>
                                                                    </text>
                                                                    <text id="Week-3" opacity="0.5" font-family="Roboto-Light, Roboto" font-size="18"
                                                                        font-weight="300" fill="#FFFFFF">
                                                                        <tspan x="251.707031" y="19">@lang('app.weeks') 3</tspan>
                                                                    </text>
                                                                    <text id="Week-4" opacity="0.5" font-family="Roboto-Light, Roboto" font-size="18"
                                                                        font-weight="300" fill="#FFFFFF">
                                                                        <tspan x="373.707031" y="19">@lang('app.weeks') 4</tspan>
                                                                    </text>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="m-item-summary__bottom"><span>@lang('app.myweightcontent')</span>
                                            <span style="color: #9830FA;">
                                                <div id="diet_archieve_weight" class="achievableWeight inline-block"></div>
                                                <div class="weightUnit inline-block">@lang('app.kilograms')</div>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="o-section-summary__item-summary m-item-summary">
                                    <div class="m-item-summary__content">
                                        <div class="m-item-summary__head">
                                            <div class="m-item-summary__title">@lang('app.ketogenicdiet')</div>
                                        </div>
                                        <div class="m-item-summary__middle">
                                            <svg version="1.1" class="m-item-summary__graph-5" id="ketogenic"
                                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                x="0px" y="0px" viewBox="0 0 232 232" style="enable-background:new 0 0 232 232;" xml:space="preserve">
                                                <style type="text/css">
                                                    .st0{fill:none;stroke:#3E3A54;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;}
                                                    .ketogenic-hidden{opacity: 0;}
                                                    .js-ketogenic-type {transition: 0.65s ease;}
                                                    .st2{display:inline;}
                                                    .st3{fill:none;}
                                                    .st8{display:inline;fill:url(#Oval-6-Copy_2_);}

                                                    .st9{display:inline;fill:none;stroke:url(#_x31_st-copy-2_1_);stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:730.7143,1550;}
                                                    .st10{display:inline;fill:url(#Oval-6-Copy_3_);}

                                                    .st11{display:inline;fill:none;stroke:url(#_x31_st-copy_2_);stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:730.7143,1550;}
                                                    .st12{display:inline;fill:url(#Oval-6_1_);}

                                                    .st13{display:inline;fill:none;stroke:url(#fats_3_);stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:730.7143,1550;}
                                                </style>
                                                <g id="empty">
                                                    <path id="fats_1_" class="st0" d="M5.6,83.9C2.6,94.1,1,105,1,116.2C1,179.6,52.5,231,116,231s115-51.4,115-114.8
                                                        c0-47-28.3-87.3-68.7-105.1"/>
                                                    <path id="protein_1_" class="st0" d="M156.5,8.3C143.9,3.6,130.3,1,116.1,1C81.6,1,50.6,16.3,29.5,40.6"/>
                                                    <path id="carbs_2_" class="st0" d="M25.1,46.1c-7.5,9.6-13.5,20.4-17.6,32"/>
                                                </g>
                                                <g id="carbs" transform="translate(165.000000, 175.000000)" class="ketogenic-hidden js-ketogenic-type js-ketogenic-carbs">
                                                    <g id="subtitle-wrap_2_" class="st2">
                                                        <rect x="-124.8" y="-41.4" class="st3" width="208.9" height="20.3"/>
                                                        <text id="subtitle_2_" text-anchor="middle" alignment-baseline="central" transform="matrix(1 0 0 1 -50 -25)"
                                                            class="st4 st5 st6 m-item-summary__graph-5-subtitle" fill="rgba(255, 255, 255, 0.5)">
                                                            @lang('app.carbohydrate')
                                                        </text>
                                                    </g>
                                                    <g id="title-wrap_2_" class="st2">
                                                        <text id="title_2_" text-anchor="middle" alignment-baseline="central" transform="matrix(1 0 0 1 -50 -65)" class="st4 st5 st7 m-item-summary__graph-5-title" fill="#FF670D">5%</text>
                                                    </g>

                                                    <radialGradient id="Oval-6-Copy_2_" cx="-97.0674" cy="-9.0251" r="1.6321" gradientTransform="matrix(0.5806 -70.1887 -70.1884 -0.5806 -625.9533 -6879.1401)" gradientUnits="userSpaceOnUse">
                                                        <stop offset="0" style="stop-color:#FF3D1A;stop-opacity:0"/>
                                                        <stop offset="0.5059" style="stop-color:#FF3D1A;stop-opacity:0"/>
                                                        <stop offset="1" style="stop-color:#FF3D1A;stop-opacity:0.1124"/>
                                                    </radialGradient>
                                                    <path id="Oval-6-Copy" class="st8" d="M-48.9-59c0.1-0.6-30.2-24-91-70.2c-6.6,7.9-15.1,22.8-17.9,33.1
                                                        C-85.4-70.7-49.1-58.4-48.9-59z"/>
                                                    <linearGradient id="_x31_st-copy-2_1_" gradientUnits="userSpaceOnUse" x1="-101.7702" y1="-6.9153" x2="-102.7702" y2="-7.9153" gradientTransform="matrix(17.6164 0 0 -32.0238 1652.4612 -351.1338)">
                                                        <stop offset="0" style="stop-color:#FCAE51"/>
                                                        <stop offset="1" style="stop-color:#FD0B0B"/>
                                                    </linearGradient>
                                                    <path id="_x31_st-copy-2" class="st9" d="M-139.9-128.9c-7.5,9.6-13.5,20.4-17.6,32"/>
                                                </g>
                                                <g id="protein" transform="translate(165.000000, 175.000000)" class="ketogenic-hidden js-ketogenic-type js-ketogenic-protein">
                                                    <g id="subtitle-wrap_3_" class="st2">
                                                        <rect x="-154.8" y="-41.4" class="st3" width="208.9" height="20.3"/>
                                                        <text id="subtitle_3_" text-anchor="middle" alignment-baseline="central" transform="matrix(1 0 0 1 -50 -25)"
                                                            class="st4 st5 st6 m-item-summary__graph-5-subtitle" fill="rgba(255, 255, 255, 0.5)">
                                                            @lang('app.protein')
                                                        </text>
                                                    </g>
                                                    <g id="title-wrap_3_" class="st2">
                                                        <text id="title_3_" text-anchor="middle" alignment-baseline="central" transform="matrix(1 0 0 1 -50 -65)" class="st4 st5 st7 m-item-summary__graph-5-title" fill="#B3FF3E">20%</text>
                                                    </g>

                                                    <radialGradient id="Oval-6-Copy_3_" cx="-97.7266" cy="-9.436" r="0.9927" gradientTransform="matrix(-3.4798 -114.9473 -114.9473 3.4798 -1473.5591 -11260.4668)" gradientUnits="userSpaceOnUse">
                                                        <stop offset="0" style="stop-color:#86F515;stop-opacity:0"/>
                                                        <stop offset="0.5059" style="stop-color:#86F515;stop-opacity:0"/>
                                                        <stop offset="1" style="stop-color:#86F515;stop-opacity:0.1124"/>
                                                    </radialGradient>
                                                    <path id="Oval-6-Copy_1_" class="st10" d="M-48.9-59c0,0,13.4-35.9,40.3-107.8c-12.6-4.7-26.2-7.2-40.3-7.2
                                                        c-34.5,0-65.5,15.1-86.6,39.1C-77.7-84.3-48.9-59-48.9-59z"/>

                                                    <linearGradient id="_x31_st-copy_2_" gradientUnits="userSpaceOnUse" x1="-98.6623" y1="-7.2465" x2="-99.3974" y2="-8.3579" gradientTransform="matrix(126.96 0 0 -39.56 12499.5596 -464.04)">
                                                        <stop offset="0" style="stop-color:#D3FF2A"/>
                                                        <stop offset="1" style="stop-color:#1FD812"/>
                                                    </linearGradient>
                                                    <path id="_x31_st-copy_1_" class="st11" d="M-8.5-166.7c-12.6-4.7-26.1-7.3-40.3-7.3c-34.5,0-65.5,15.3-86.6,39.6"/>
                                                </g>
                                                <g id="fat" transform="translate(165.000000, 175.000000)" class="ketogenic-hidden js-ketogenic-type js-ketogenic-fats">
                                                    <g id="subtitle-wrap_1_" class="st2">
                                                        <rect x="-154.8" y="-41.4" class="st3" width="208.9" height="20.3"/>
                                                        <text id="subtitle_1_" text-anchor="middle" alignment-baseline="central" transform="matrix(1 0 0 1 -50 -25)"
                                                            class="st4 st5 st6 m-item-summary__graph-5-subtitle" fill="rgba(255, 255, 255, 0.5)">
                                                            @lang('app.fat')
                                                        </text>
                                                    </g>
                                                    <g id="title-wrap_1_" class="st2">
                                                        <text id="title_1_" text-anchor="middle" alignment-baseline="central" transform="matrix(1 0 0 1 -50 -65)" class="st4 st5 st7 m-item-summary__graph-5-title" fill="#0DADFF">75%</text>
                                                    </g>

                                                    <radialGradient id="Oval-6_1_" cx="-98.2001" cy="-9.1786" r="0.511" gradientTransform="matrix(1.347518e-14 -220.0664 -220.0663 -1.347518e-14 -2068.9111 -21669.293)" gradientUnits="userSpaceOnUse">
                                                        <stop offset="0" style="stop-color:#2CA8FF;stop-opacity:0"/>
                                                        <stop offset="0.5059" style="stop-color:#2CA8FF;stop-opacity:0"/>
                                                        <stop offset="1" style="stop-color:#2CA8FF;stop-opacity:0.1124"/>
                                                    </radialGradient>
                                                    <path id="Oval-6" class="st12" d="M-49,56C14.5,56,66,4.5,66-59c0-46.6-29-87-68.8-105.1C-33.6-94-49-59-49-59
                                                        s-36.8-10.7-110.3-32.1c-2.9,10-4.7,21.2-4.7,32.1C-164,4.5-112.5,56-49,56z"/>

                                                    <linearGradient id="fats_3_" gradientUnits="userSpaceOnUse" x1="-99.1847" y1="-9.5446" x2="-98.3914" y2="-8.9482" gradientTransform="matrix(230 0 0 -219.88 22672 -2076.8)">
                                                        <stop offset="0" style="stop-color:#30B3FD"/>
                                                        <stop offset="1" style="stop-color:#0B43FD"/>
                                                    </linearGradient>
                                                    <path id="fats_2_" class="st13" d="M-159.4-91.1c-3,10.3-4.6,21.1-4.6,32.3C-164,4.6-112.5,56-49,56S66,4.6,66-58.8
                                                        c0-47-28.3-87.3-68.7-105.1"/>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="m-item-summary__bottom"><span>@lang('app.ketogenicdietcontent')</span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="container">
                                <div class="intro_layers divider-35 flex-btn" data-animation="fadeInUp">
                                    <input id="email_address" type="email" class="input-text white-input" placeholder="Enter Your Email Address" autocomplete="organization" required><br />
                                    <p for="email_empty" id="email_empty" class="errorMsg">@lang('app.emailempty')</p>
                                    <p for="email_type" id="email_type_error" class="errorMsg">@lang('app.emailerror')</p>
                                </div>

                                <div id="go_payment" class="btn btn-light divider-50" href="#slide" role="button" data-slide="next">@lang('app.continue')</div>
                            </div>
                        </div>
                    </div>
                    <!-- show Data-->
                </div>
                <div class="carousel-item diet-step-10">

                    <div class="container">
                        <div class="container-fluid">
                            <div class="row final-price-section">
                                <div id="price-4-weeks" class="final-price">
                                    <div class="show-price">
                                        <p>5,95€</p>
                                        <p id="price-checked-4"></p>
                                    </div>
                                    <div class="price-text-content">
                                        <h5>4 @lang('app.weeks')</h5>
                                        <h6>@lang('app.pricetextcontent1')</h6>
                                    </div>
                                </div>
                                <div id="price-12-weeks" class="final-price">
                                    <div class="show-price">
                                        <p>12,95€</p>
                                        <p id="price-checked-12"></p>
                                    </div>
                                    <div class="price-text-content">
                                        <h5>12 @lang('app.weeks')</h5>
                                        <h6>@lang('app.pricetextcontent2')</h6>
                                    </div>
                                </div>
                                <div id="price-1-year" class="final-price">
                                    <div class="show-price" id="reduced-section">
                                        <div class="reduced-price">
                                            <p class="original-price">29,95€</p>
                                            <p class="current-price">19.95€ Offer</p>
                                        </div>
                                        <p id="price-checked-year"></p>
                                    </div>
                                    <div class="price-text-content">
                                        <h5>@lang('app.year')</h5>
                                        <h6>@lang('app.pricetextcontent2')</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="stripe_payment_agree">
                            <input type="checkbox" id="payment_check" hidden>
                            <label for="payment_check" id="payment_content">I am not a minor and I have read the <br><a href="#" id="terms-con">Terms and Conditions</a>.</label>
                        </div>
                        <!-- paypal -->
                        <div id="paypal-button-container" class="disabled_button"></div>
                        <!-- paypal -->
                        <br>
                        <!-- stripe payment -->
                        <input id="stripe_pay" type="button" class="btn disabled_button" value="Stripe" onclick="document.getElementById('modal_stripe_pay').style.display='block'">
                        <!-- stripe payment -->

                        <div id="modal_stripe_pay" class="w3-modal">
                            <div class="w3-modal-content w3-animate-zoom">
                            <header class="w3-container header-footer">
                                <span id="show-paypal-button" onclick="document.getElementById('modal_stripe_pay').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                                <h2>Stripe Payment</h2>
                            </header>
                            <div class="w3-container">
                                <!-- stripe payment -->
                                <form method="post" id="payment-form">
                                    @csrf
                                    <div class="form-row">
                                        <label for="card-element">
                                            Credit or debit card
                                        </label>
                                        <div id="card-element" class="divider-20">
                                        <!-- A Stripe Element will be inserted here. -->
                                        </div>
                                        <!-- Used to display form errors. -->
                                        <div id="card-errors" role="alert"></div>
                                    </div>
                                    <button id="stripe_payment_button" class="btn btn-light divider-60"><i id="loading_button"></i>Pay</button>
                                </form>
                                <!-- stripe payment -->
                            </div>
                            <footer class="w3-container header-footer">
                                <p class="fa fa-cc-stripe  color-icon bg-icon"></p>
                            </footer>
                            </div>
                        </div>

                    </div>
                    <br>
                    <div class="o-section-security">
                        <div class="o-section-security__top">
                            <div class="o-section-security__text">Secured payment by:</div>
                            <div class="o-section-security__items">
                                <img src="https://assets.appsforfit.com/assets/img/keto/logos/https.png" class="o-section-security__item">
                                <img src="https://assets.appsforfit.com/assets/img/keto/logos/ssl.png" class="o-section-security__item">
                                <img src="https://assets.appsforfit.com/assets/img/keto/logos/mcafee.png" class="o-section-security__item">
                                <img src="https://assets.appsforfit.com/assets/img/keto/logos/norton.png" class="o-section-security__item">
                                <img src="https://assets.appsforfit.com/assets/img/keto/logos/paypal.png" class="o-section-security__item">
                            </div>
                        </div>
                        <div class="o-section-security__bottom">
                            <div class="o-section-security__cards">
                                <img src="https://assets.appsforfit.com/assets/img/keto/logos/visa.svg" class="small o-section-security__card">
                                <img src="https://assets.appsforfit.com/assets/img/keto/logos/masterCard.svg" class="o-section-security__item">
                                <img src="https://assets.appsforfit.com/assets/img/keto/logos/maestro.svg" class="o-section-security__item">
                                <img src="https://assets.appsforfit.com/assets/img/keto/logos/jcb.png" class="o-section-security__item">
                                <img src="https://assets.appsforfit.com/assets/img/keto/logos/amex.png" class="o-section-security__item">
                                <img src="https://assets.appsforfit.com/assets/img/keto/logos/discover.png" class="small o-section-security__card">
                            </div>
                        </div>
                    </div>

                </div>

                <div id="footer-process" class="m-progress-bar js-progress-bar o-section-home__progress-bar m-progress-bar--without-percentage">
                    <div style="background-image: url('https://assets.appsforfit.com/assets/img/keto/svg/progress-percentage-bg.svg')" class="m-progress-bar__percentage">
                    </div>
                    <div class="m-progress-bar__content">
                        <div class="m-progress-bar__button a-button--with-icon a-button--icon-first a-button--bordered a-button">
                            <a id="btn-prev" href="#slide" role="button" data-slide="prev" class="a-button__link">
                                <div class="a-button__text">
                                    <i class="fa fa-arrow-circle-left"></i>
                                </div>
                                <div class="a-button__text">
                                    <span>@lang('app.prev')</span>
                                </div>
                            </a>
                        </div>
                        <div class="m-progress-bar__indicator">
                            <div class="m-progress-bar__indicator-inner">
                                <div class="m-progress-bar__line">
                                    <div id="progress-bar" class="m-progress-bar__line-inner js-progress-line"></div>
                                </div>
                                <div class="m-progress-bar__dots js-progress-dots cursor-pointer">
                                    <div class="process-1 m-progress-bar__dot" style="white-space: nowrap;">
                                        <span class="progress-name">@lang('app.gender')</span>
                                    </div>
                                    <div class="process-2 m-progress-bar__dot" style="white-space: nowrap;">
                                        <span class="progress-name">@lang('app.physicaltitle')</span>
                                    </div>
                                    <div class="process-3 m-progress-bar__dot" style="white-space: nowrap;">
                                        <span class="progress-name">@lang('app.meat')</span>
                                    </div>
                                    <div class="process-4 m-progress-bar__dot" style="white-space: nowrap;">
                                        <span class="progress-name">@lang('app.veggies')</span>
                                    </div>
                                    <div class="process-5 m-progress-bar__dot" style="white-space: nowrap;">
                                        <span class="progress-name">@lang('app.products')</span>
                                    </div>
                                    <div class="process-6 m-progress-bar__dot" style="white-space: nowrap;">
                                        <span class="progress-name">@lang('app.bad')</span>
                                    </div>
                                    <div class="process-7 m-progress-bar__dot" style="white-space: nowrap;">
                                        <span class="progress-name">@lang('app.measurements')</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-progress-bar__button a-button--with-icon a-button--icon-first a-button--bordered a-button">
                            <a id="btn-next" href="#slide" role="button" data-slide="prev" class="a-button__link">
                                <div class="a-button__text">
                                    <i class="fa fa-arrow-circle-right"></i>
                                </div>
                                <div class="a-button__text">
                                    <span>@lang('app.next')</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="page_slider" id="faqs">
				<div class=" flexslider " data-nav="true" data-dots="false">
					<ul class="slides">
						<li class="ls text-center first_story">
							<img src="assets/images/lady_banner.png" alt="">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-12">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer" data-animation="fadeInUp">
													<div class="d-inline-block">
														<h1 class="intro_featured_word" id="first_story_title">
															@lang('app.mystory')
                                                        </h1>
                                                        <br>
                                                        <div class="click-here">
                                                            <label class="mt-1 my_story">@lang('app.here')</label>
                                                            <ul class="flex-direction-nav flex-next-button">
                                                                <li class="flex-nav-next">
                                                                    <a href="" class="flex-next"></a>
                                                                </li>
                                                            </ul>
                                                        </div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="ls text-center slide02 second_story">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-4">
                                        <img src="assets/images/girl.png" alt="">
									</div>
									<div class="col-md-4">
                                        <h1>Myla's Story</h1>
                                        <br>
                                        <p>Why vegetable based fibre is so vital for our health? Learn in this 1 min. video. Why egetable based fibre is so vital for our health? Learn in this 1 min. video. Why vegetable based fibre is so vital for our health?</p>
                                    </div>
                                    <div class="col-md-4 story">
                                        <label class="label_story">Know Cindy's Story</label>
                                        <div class="click-here">
                                            <label>@lang('app.next')</label>
                                            <ul class="flex-direction-nav">
                                                <li class="flex-nav-next">
                                                    <a href="" class="flex-next"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
								</div>
							</div>
                        </li>
                        <li class="ls text-center slide03 second_story">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-4">
                                        <img src="assets/images/lege.png" alt="">
									</div>
									<div class="col-md-4">
                                        <h1>Cindy's Story</h1>
                                        <br>
                                        <p>Why vegetable based fibre is so vital for our health? Learn in this 1 min. video. Why egetable based fibre is so vital for our health? Learn in this 1 min. video. Why vegetable based fibre is so vital for our health?</p>
                                    </div>
                                    <div class="col-md-4 story">
                                        <label class="label_story">Know Baby's Story</label>
                                        <div class="click-here">
                                            <label>@lang('app.next')</label>
                                            <ul class="flex-direction-nav">
                                                <li class="flex-nav-next">
                                                    <a href="" class="flex-next"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
								</div>
							</div>
                        </li>
                        <li class="ls text-center slide04 second_story">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-4">
                                        <img src="assets/images/old.png" alt="">
									</div>
									<div class="col-md-4">
                                        <h1>Baby's Story</h1>
                                        <br>
                                        <p>Why vegetable based fibre is so vital for our health? Learn in this 1 min. video. Why egetable based fibre is so vital for our health? Learn in this 1 min. video. Why vegetable based fibre is so vital for our health?</p>
                                    </div>
                                    <div class="col-md-4 story">
                                        <label class="label_story">Know Terry's Story</label>
                                        <div class="click-here">
                                            <label>@lang('app.next')</label>
                                            <ul class="flex-direction-nav">
                                                <li class="flex-nav-next">
                                                    <a href="" class="flex-next"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
								</div>
							</div>
                        </li>
                        <li class="ls text-center slide04 second_story">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-4">
                                        <img src="assets/images/lady.png" alt="">
									</div>
									<div class="col-md-4">
                                        <h1>Terry's Story</h1>
                                        <br>
                                        <p>Why vegetable based fibre is so vital for our health? Learn in this 1 min. video. Why egetable based fibre is so vital for our health? Learn in this 1 min. video. Why vegetable based fibre is so vital for our health?</p>
                                    </div>
                                    <div class="col-md-4 story">
                                        <label class="label_story">Know her Story</label>
                                        <div class="click-here">
                                            <label>@lang('app.next')</label>
                                            <ul class="flex-direction-nav">
                                                <li class="flex-nav-next">
                                                    <a href="" class="flex-next"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
								</div>
							</div>
						</li>
					</ul>
				</div>
            </section>

            <section class="diet-slider-price" id="price_page">
				<div class="container">
                    <div class="row price-heading">
                        <h1 class="recipe-heading">@lang('app.pricetitle')</h1>
                        <h5 class="next-heading">@lang('app.pricesmalltitle')</h5>
                    </div>
                    <div class="row price-box">
                        <a href="#slide">
                            <div class="each-price">
                                <h1 class="month-period">4 @lang('app.weeks')</h1>
                                <h2>5,95€</h2>
                                <p class="premium-text">@lang('app.pricetextcontent1')</p>
                            </div>
                        </a>
                        <a href="#slide">
                            <div class="each-price">
                                <h1 class="long-month-period">12 @lang('app.weeks')</h1>
                                <h2>12,95€</h2>
                                <p class="premium-text">@lang('app.pricetextcontent2')</p>
                            </div>
                        </a>
                        <a href="#slide">
                            <div class="each-price">
                                <h1 class="year-period">@lang('app.year')</h1>
                                <h2>29,95€</h2>
                                <p class="premium-text">@lang('app.pricetextcontent2')</p>
                            </div>
                        </a>
                    </div>
				</div>
            </section>

            <section class="diet-slider3 ls ms s-pt-lg-100 s-pb-lg-75 c-my-0 text-center text-md-left">
				<div class="row align-items-center video-desc">
                    <div class="onion-image">
                        <img src="assets/images/cutting.png" alt="">
                    </div>
                    <div class="video-link">
                        <a href="" class="photoswipe-link" data-animation="slideInLeft" data-iframe="assets/images/Vegetable_Fibre_Best_Food_Plant_Based_Diet_Diet_Photo_Keto_Interval_Diet_Organic_Food_Good_Video_High_Resolution.mp4">
                            <img src="assets/images/ie_Diet_Button_You_Tube_Diet_Channel.svg">
                        </a>
                        <h1>@lang('app.videotext')</h1>
					</div>
				</div>
            </section>

            <section class="diet-slider4 ls" id="contact_page">
				<div class="container">
					<div class="row block-contact">

						<div class="col-md-12 col-lg-3 mb-30 text-left text-lg-left divider-50">
							<div class="widget widget_icons_list footer-list">
								<div class="text-center">
                                    <img class="food-network" src="assets/images/Good_Food_Network_Simple_Diet_Plan_Video_Icon_Symbol_High_Resolution_Keto_Diet_Interval_Diet_Low_Carb_Low Calorie_Diet_Button_You_Tube_Diet_Channel_Best_Diet_Plan_Scientifically_Proven.png" alt="">
                                </div>
                                <div class="text-center text-lg-center">
                                    <nav class="o-footer__nav-footer m-nav-footer">
                                        <a href="#" class="m-nav-footer__item mb-2">@lang('app.pricing')</a>
                                        <a href="#" class="m-nav-footer__item mb-2">@lang('app.contact')</a>
                                        <a href="#" class="m-nav-footer__item mb-2">@lang('app.faqs')</a>
                                        <a href="#" class="m-nav-footer__item mb-2">@lang('app.imprint')</a>
                                        <a href="#" class="m-nav-footer__item mb-2">@lang('app.privacypolicy')</a>
                                        <a href="#" class="m-nav-footer__item mb-2">@lang('app.termsofuse')</a>
                                        <a href="#" class="m-nav-footer__item">@lang('app.gdpr')</a>
                                    </nav>
                                </div>
							</div>
						</div>
						<div class="col-md-6 col-lg-8 contact-input">
                            <div class="section-heading text-left">
                                <h3>@lang('app.contactus')</h3>
                            </div>
                            <br>
                            <form id="test-form" class="c-mb-10 c-gutter-20">
                                <div class="col-sm-12">
                                    <div class="form-group has-placeholder">
                                        <label for="name" id="name_label">required
                                            <span class="required">*</span>
                                        </label>
                                        <i class="fa fa-user color-main2"></i>
                                        <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="ls form-control white-input" placeholder="@lang('app.fullname')" required>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group has-placeholder">
                                        <label for="email" id="email_label">required
                                            <span class="required">*</span>
                                        </label>
                                        <i class="fa fa-envelope color-main2"></i>
                                        <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="ls form-control white-input" placeholder="@lang('app.emailaddress')" required>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group has-placeholder">
                                        <label for="phone" id="phone_label">required
                                            <span class="required">*</span>
                                        </label>
                                        <i class="fa fa-phone color-main2"></i>
                                        <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="ls form-control white-input" placeholder="@lang('app.phone')">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group has-placeholder">
                                        <label for="message" id="message_label">required</label>
                                        <i class="fa fa-pencil color-main2"></i>
                                        <textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control white-input" placeholder="@lang('app.message')..."></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-12 text-left policy-terms">
                                    <input type="checkbox" id="checkbox1" hidden>
                                    <label for="checkbox1" id="checkbox_content">@lang('app.policy')</label>
                                    <div class="row newsletter" >
                                        <p>If you're a human, please solve this.</p>
                                        <div class="formula">
                                            <h2 id="add_val_1">&nbsp;</h2>
                                            <h2>&nbsp;+&nbsp;</h2>
                                            <h2 id="add_val_2">&nbsp;</h2>
                                            <h2>&nbsp;=</h2>
                                        </div>
                                        <input id="sum_val" type="text" class="ls correct-answer white-input">
                                        <button type="submit" id="send_contact" class="btn border-0 send-contact">@lang('app.send')</button>
                                    </div>
                                </div>
                            </form>
                            <h4 id="is-sent" class="text-center" style="display: none; color: #78bf4d;">Successfully sent.</h4>
						</div>
					</div>
				</div>
            </section>
            <section class="diet-slider5 ls">
				<div class="container">
					<div class="row align-items-center">
                        <div class="divider-10 d-none d-lg-block"></div>
						<div class="col-md-12 text-center">
							<p><b>SIMPLE-DIET-PLAN.COM</b> - © COPYRIGHT 2020 - ALL RIGHTS RESERVED // GOOD FOOD NETWORK &nbsp;&nbsp; <a href="https://simple-diet-plan.com">Simple-Diet-Plan.com</a>  &nbsp;&nbsp; <a href="https://man-with-the-pan.com">Man-with-the-Pan.com</a>  &nbsp;&nbsp; <a href="https://plant-based-diets.com">Plant-Based-Diets.com</a> </p>
						</div>
						<div class="divider-10 d-none d-lg-block"></div>
					</div>
				</div>
			</section>
        </div>
    </div>
@endsection

@section('ExtraJavascript')
    <script src="https://www.paypal.com/sdk/js?client-id=AXpVhURwRJJFWJfUZeU4WuwQ3igs8mHds6P6kxZ6QYHgrbAE695r39r7tkn2yM7Lt6TlLtW_NosNLo52&currency=EUR&disable-funding=credit,card,sepa" data-sdk-integration-source="button-factory"></script>
    <script src="{{ asset('assets/js/payment.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
@endsection
