@extends('layouts.app')

@section('content')

    <div class=""
        style="width: 100%;height: 100%;position: fixed;z-index: 0;margin-top:-50px"
        id="topology"></div>
    <section class="hero hero--v3 section--dark  d-flex align-items-center hidden ">
        <div class="container  bg-color--dark--2  p-5"
            style="background-color: #151722bb;"
            style="border-radius: 30px; ">
            <div class="row">
                <!-- <img src="img/rm1.jpg" style="object-fit:cover;width: 100%;height: 300px;border-radius: 80px;" class="mb-3 shadow" alt=""> -->
                <div
                    class="col-12 col-md-10 col-lg-8 px-lg-0 mx-auto mb-3 mb-lg-0 mt-8 mt-lg-0 text-center z-index2 roundeds">
                    <div class="hero-content ">
                        <h1 class="hero__title h2-font mb-2">RICH MAKER Aims To Be The Bridge Between Early-Stage Investors
                            And Projects.
                        </h1>
                        <p class="hero__description font-size--20 mb-3 mb-lg-5 mb-md-6">RICHMAKER aims to benefit the BSC
                            ecosystem and protect users with its community.</p>

                        <a href="#"
                            data-toggle="modal"
                            data-target="#exampleModalCenter"
                            class="btn btn-bg--cta--1 rounded--full btn-hover--3d btn-hover--splash mb-2">
                            <span class="btn__text">Join Rich Marines !</span>
                        </a>
                        <p class="color--white font-w--600">Members need to have a certain number of $ RICH to become a
                            <span class="color--primary"> RICH MARINES</span> crew member. Members can easily link their
                            wallet once in order verify their Marines membership.
                        </p>
                    </div>
                    <!-- end of content -->
                </div>

                <div class="col-12 col-md-1 mr-md-3 text-center icon-group--sticky ">
                    <ul class="icon-group icon-group--vertical rounded--full rounded--full justify-content-center">
                        <li><a href="https://t.me/RichMakerGlobal"
                                class="color--primary"><i class="fab fa-telegram-plane"></i></a></li>
                        <li><a href="https://t.me/RichMakerGlobalAnn"
                                class="color--primary"><i class="fab fa-telegram-plane"></i></a></li>
                        <li><a href="https://twitter.com/RichMakerGlobal"
                                class="color--primary"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://medium.com/@RichMakerGlobal"
                                class="color--primary"><i class="fab fa-medium-m"></i></a></li>
                        <li><a href="https://www.reddit.com/user/RichMakerGlobal"
                                class="color--primary"><i class="fab fa-reddit"></i></a></li>
                        <li><a href="https://github.com/RichMakerGlobal"
                                class="color--primary"><i class="fab fa-github"></i></a></li>
                        <li><a href="https://bscscan.com/token/0x0d94335595ae842890bec091ef8c47d62f545d99"
                                class="color--primary"><i class="fas fa-link"></i></a></li>
                        <li><a href="https://exchange.pancakeswap.finance/#/swap?inputCurrency=0x0d94335595ae842890bec091ef8c47d62f545d99"
                                class="color--primary"><i class="fas fa-sync-alt"></i></a></li>
                        <li><a href="https://www.coingecko.com/en/coins/rich-maker"
                                class="color--primary"><i class="fas fa-file-contract"></i></a></li>
                        <li><a href="https://coinmarketcap.com/tr/currencies/rich-maker/"
                                class="color--primary"><i class="fas fa-coins"></i></a></li>
                    </ul>
                </div>
                <!-- end of social icon -->
            </div>
            <!-- end of row -->
        </div>

    </section>
    <section class="hero hero--v3 section--dark "
        style="margin-top: -200px;opacity: 0.9;">
        <div class="container  bg-color--dark--2 p-5"
            style="border-radius: 15px;">
            <div class="row border-bottom">
                <div class="col text-center">

                    <h1>Contract Information</h1>
                </div>
            </div>
            <hr>
            <div class="row border-bottom mb-3"
                style="opacity: .9">
                <div class="col ">
                    <h3>Token Name</h3>
                </div>
                <div class="col text-right">
                    <h3 id="tokenName"></h3>
                </div>
            </div>
            <div class="row border-bottom mb-3"
                style="opacity: .9">
                <div class="col ">
                    <h3>
                        Symbol
                    </h3>
                </div>
                <div class="col text-right">
                    <h3 id="symbol"></h3>
                </div>
            </div>
            <div class="row border-bottom mb-3"
                style="opacity: .9">
                <div class="col ">
                    <h3>
                        Total Supply
                    </h3>
                </div>
                <div class="col text-right">
                    <h3 id="totalSupply"></h3>
                </div>
            </div>
            <div class="row border-bottom mb-3"
                style="opacity: .9">
                <div class="col ">
                    <h3>
                        Total Burn
                    </h3>
                </div>
                <div class="col text-right">
                    <h3 id="totalBurn"></h3>
                </div>
            </div>
            <div class="row border-bottom mb-3"
                style="opacity: .9">
                <div class="col ">
                    <h3>
                        Fees
                    </h3>
                </div>
                <div class="col text-right">
                    <h3 id="totalFees"></h3>
                </div>
            </div>
        </div>

    </section>
    <!-- =========== End of Hero ============ -->

    <!-- =========== Start of ICO progress ============ -->
    <section class="ico-progress ico-progress--v2 section--dark bg-color--dark--2">
        <div class="container ">
            <div class="row my-2">
                <div class="col text-center">
                    <h1 class="my-2">RICO</h1>
                </div>
            </div>
            {{-- <div class="row"
                id="rico_loader">
                <div class="col text-center">
                    <div class="lds-roller">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div> --}}
            <section id="pr"
                style="">
                <div class="row mb-1">
                    <div class="col-12">
                        <h2>LIVE PROJECTS</h2>
                    </div>
                    @foreach ($projects as $Citem)
                        <div class="col-12 col-lg-6 p-2"
                            id="{{ $Citem->id }}C">
                            <a href="/project/{{ $Citem->id }}"
                                class="card-project"
                                style="width:100%">
                                <div class="card text-white shadow bg-color--dark--1 pt-3 "
                                    style="border-radius: 20px;height:450px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-4 ">
                                                <img src="{{ $Citem->logo }}"
                                                    class="shadow mb-2"
                                                    style=" margin-left:20px;object-fit: cover;height:100px;border-radius: 50% !important;width:100px;z-index:222"
                                                    alt="">
                                                <div class="d-flex">
                                                    @if ($Citem->upcoming == 'true')

                                                        <span class="badge badge-pill badge-success"
                                                            style="font-size: 14pt"><i class="fas fa-dot-circle"
                                                                style="color: rgb(75, 47, 255)"></i> Upcoming</span>
                                                    @endif
                                                    @if ($Citem->active == 'true' && $Citem->upcoming == 'false')

                                                        <span class="badge badge-pill badge-success"
                                                            style="font-size: 14pt"><i class="fas fa-dot-circle"
                                                                style="color: greenyellow"></i> Live</span>
                                                    @endif
                                                    @if ($Citem->success == 'true' && $Citem->active == 'false' && $Citem->upcoming == 'false')
                                                        <span class="badge badge-pill badge-success"
                                                            style="font-size: 14pt"><i class="fas fa-dot-circle"
                                                                style="color: rgb(36, 230, 91)"></i> Completed</span>
                                                    @endif
                                                    @if ($Citem->success == 'false' && $Citem->active == 'false' && $Citem->upcoming == 'false')
                                                        <span class="badge badge-pill badge-danger"
                                                            style="font-size: 14pt"><i class="fas fa-dot-circle"
                                                                style="color: rgb(230, 36, 36)"></i> Failed</span>
                                                    @endif
                                                    <span class="badge badge-pill badge-warning ml-1"
                                                        style="font-size: 14pt">{{ $Citem->ticker }}</span>
                                                </div>

                                            </div>
                                            <div class="col-8 text-left pl-2">
                                                <h3>{{ $Citem->name }}</h3>
                                                <h5 class="text-muted">{{ $Citem->description }}</h5>
                                                <br>
                                            </div>
                                        </div>

                                        <div class="row border-bottom shadow py-1 my-1">

                                            <div class="col d-flex flex-column text-muted text-left">
                                                <p class="card-text small">Participants</p>
                                                <h6 class="card-text"
                                                    id="{{ $Citem->id }}C_participants">{{ $Citem->participants }}
                                                </h6>
                                            </div>
                                            @if ($Citem->active == 'true')

                                                <div class="col d-flex flex-column text-muted text-right">
                                                    <p class="card-text small">Time Left</p>
                                                    <h6 class="card-text"
                                                        id="{{ $Citem->id }}C_closeTime">{{ $Citem->time_left }} Hours
                                                    </h6>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="card-title"><span class="small">Soft Cap &nbsp;: </span>
                                                        <span
                                                            id="{{ $Citem->id }}C_softCap">{{ $Citem->softCap }}</span>
                                                    </h4>
                                                    <h4 class="card-title"><span class="small">Hard Cap :</span> <span
                                                            id="{{ $Citem->id }}C_hardCap">{{ $Citem->hardCap }}</span>
                                                    </h4>
                                                </div>
                                                <div class="progress">
                                                    <div id="{{ $Citem->id }}C_progress"
                                                        class="progress-bar  progress-bar-animated progress-bar-striped bg-primary"
                                                        role="progressbar"
                                                        aria-valuenow="{{ $Citem->percent }}"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                        style="width: {{ $Citem->percent }}%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col text-center">
                                                <h4 class="card-title"><span class="small">Raised :</span> <span
                                                        id="{{ $Citem->id }}C_raised">{{ $Citem->raised }}</span>
                                                    BNB
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    @endforeach
                    <div class="row">
                        <div class="col">


                            @if (count($projects) <= 0)
                                <br>
                                <h6 class="pl-2">There is no available project right now</h6>
                                <br>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2>CLOSED PROJECTS</h2>
                    </div>
                    @foreach ($Cprojects as $Citem)
                        <div class="col-12 col-lg-6 p-2"
                            style="opacity:.5"
                            id="{{ $Citem->id }}C">
                            <a href="/project/{{ $Citem->id }}"
                                class="card-project"
                                style="width:100%">
                                <div class="card text-white shadow bg-color--dark--1 pt-3 "
                                    style="border-radius: 20px;height:450px;">

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-4 ">
                                                <img src="{{ $Citem->logo }}"
                                                    class="shadow mb-2"
                                                    style=" margin-left:20px;object-fit: cover;height:100px;border-radius: 50% !important;width:100px;z-index:222"
                                                    alt="">
                                                <div class="d-flex">
                                                    @if ($Citem->upcoming == 'true')

                                                        <span class="badge badge-pill badge-success"
                                                            style="font-size: 14pt"><i class="fas fa-dot-circle"
                                                                style="color: rgb(75, 47, 255)"></i> Upcoming</span>
                                                    @endif
                                                    @if ($Citem->active == 'true' && $Citem->upcoming == 'false')

                                                        <span class="badge badge-pill badge-success"
                                                            style="font-size: 14pt"><i class="fas fa-dot-circle"
                                                                style="color: greenyellow"></i> Live</span>
                                                    @endif
                                                    @if ($Citem->success == 'true' && $Citem->active == 'false' && $Citem->upcoming == 'false')
                                                        <span class="badge badge-pill badge-success"
                                                            style="font-size: 14pt"><i class="fas fa-dot-circle"
                                                                style="color: rgb(36, 230, 91)"></i> Completed</span>
                                                    @endif
                                                    @if ($Citem->success == 'false' && $Citem->active == 'false' && $Citem->upcoming == 'false')
                                                        <span class="badge badge-pill badge-danger"
                                                            style="font-size: 14pt"><i class="fas fa-dot-circle"
                                                                style="color: rgb(230, 36, 36)"></i> Failed</span>
                                                    @endif
                                                    <span class="badge badge-pill badge-warning ml-1"
                                                        style="font-size: 14pt">{{ $Citem->ticker }}</span>
                                                </div>

                                            </div>
                                            <div class="col-8 text-left pl-2">
                                                <h3>{{ $Citem->name }}</h3>
                                                <h5 class="text-muted">{{ $Citem->description }}</h5>
                                                <br>
                                            </div>
                                        </div>

                                        <div class="row border-bottom shadow py-1 my-1">

                                            <div class="col d-flex flex-column text-muted text-left">
                                                <p class="card-text small">Participants</p>
                                                <h6 class="card-text"
                                                    id="{{ $Citem->id }}C_participants">{{ $Citem->participants }}
                                                </h6>
                                            </div>
                                            @if ($Citem->active == 'true')

                                                <div class="col d-flex flex-column text-muted text-right">
                                                    <p class="card-text small">Time Left</p>
                                                    <h6 class="card-text"
                                                        id="{{ $Citem->id }}C_closeTime"></h6>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="card-title"><span class="small">Soft Cap &nbsp;: </span>
                                                        <span
                                                            id="{{ $Citem->id }}C_softCap">{{ $Citem->softCap }}</span>
                                                    </h4>
                                                    <h4 class="card-title"><span class="small">Hard Cap :</span> <span
                                                            id="{{ $Citem->id }}C_hardCap">{{ $Citem->hardCap }}</span>
                                                    </h4>
                                                </div>
                                                <div class="progress">
                                                    <div id="{{ $Citem->id }}C_progress"
                                                        class="progress-bar  progress-bar-animated progress-bar-striped bg-primary"
                                                        role="progressbar"
                                                        aria-valuenow="{{ $Citem->percent }}"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                        style="width: {{ $Citem->percent }}%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col text-center">
                                                <h4 class="card-title"><span class="small">Raised :</span> <span
                                                        id="{{ $Citem->id }}C_raised">{{ $Citem->raised }}</span>
                                                    BNB
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    @endforeach
                    <div class="row">
                        <div class="col">
                            @if (count($Cprojects) <= 0)
                                <br>
                                <h6 class="pl-2">There is no finished project available</h6>
                                <br>
                            @endif
                        </div>
                    </div>

                </div>
            </section>

            <!-- end of row-->
        </div>
    </section>
    <!-- =========== End of ICO progress ============ -->
    <br>
    <br>
    <br>
    <!-- =========== Start of Payment Method ============ -->
    <section class="pt-4 pb-5 pb-lg-10 section--dark  border--bottom bg-color--dark--2 mb-5 p-5 ">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h3>You can purchase RICH through <span>PancakeSwap</span>:</h3>
                </div>
            </div>
            <!-- end of totle row -->
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="logo-group">
                        <span class="logo-group__image">
                            <a
                                href="https://exchange.pancakeswap.finance/#/swap?inputCurrency=0x0d94335595ae842890bec091ef8c47d62f545d99">
                                <img src="pancake.png"
                                    alt="payment-mehtod-logo"
                                    class="img-fluid">
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <!-- end of logo group row -->
        </div>
    </section>
    <!-- =========== End of Payment Method ============ -->

    <!-- =========== Start of About ============ -->
    <section class="space--top pb-5 pb-lg-10 about about--v3 section--dark bg-color--dark--1 mt-5 p-5 mb-6  "
        id="about">
        <div class="container">
            <div class="row align-items-center flex-column-reverse flex-lg-row text-center text-lg-left mb-10">
                <!-- end of image -->
                <div class="col-12 col-lg-7 col-xl-6">
                    <div class="text-center text-lg-left reveal">
                        <h2 class="h3-font mb-3">RICHMAKER Provides Safe And Easy Way For Launchpads To Reach Out To Early
                            Investors.</h2>
                        <h3 class="h5-font text-color--300 mb-3">The main objectives of the project are to meet the needs of
                            cryptocurrency projects and users for traditional services, and to provide access to investment
                            product.</h3>

                        <p class="h6-font mb-3">The protocol uses blockchain technology to ensure the transparency and
                            addressability of transactions.</p>
                        <div class="d-flex align-items-center justify-content-center justify-content-lg-start">

                        </div>
                    </div>
                </div>
                <!-- end of content -->
                <div class="col-12 col-lg-5 col-xl-6 mb-6 mb-lg-0">
                    <picture class="about__image reveal">
                        <img src="img/illustration-03.png"
                            alt="illustration"
                            class="img-fluid">
                    </picture>
                </div>
                <!-- end of image -->
            </div>
            <!-- end of main body content -->
            <!-- <div class="row">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="col-12">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="logo-group justify-content-xl-between">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <a href="#" class="logo-group__image mr-lg-0 ml-lg-0 reveal">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <img src="img/directory-site-logo-1.png" alt="directory-site-logo" class="img-fluid">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <a href="#" class="logo-group__image mr-lg-0 ml-lg-0 reveal">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <img src="img/directory-site-logo-2.png" alt="directory-site-logo" class="img-fluid">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <a href="#" class="logo-group__image mr-lg-0 ml-lg-0 reveal">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <img src="img/directory-site-logo-3.png" alt="directory-site-logo" class="img-fluid">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <a href="#" class="logo-group__image mr-lg-0 ml-lg-0 reveal">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <img src="img/directory-site-logo-4.png" alt="directory-site-logo" class="img-fluid">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <a href="#" class="logo-group__image mr-lg-0 ml-lg-0 reveal">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <img src="img/directory-site-logo-5.png" alt="directory-site-logo" class="img-fluid">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div> -->
            <!-- end of logo group row -->
        </div>
    </section>
    <!-- =========== End of About ============ -->

    <!-- =========== Start of Problem/ Solition ============ -->
    <section class="space--top pb-6 section--dark  bg-color--dark--2  p-5 mt-6">
        <img src="img/rm3.jpeg"
            style="object-fit:cover;width: 100%;max-height: 300px;border-radius: 80px;padding: 0px;"
            class="mb-3 shadow d-block d-sm-none d-xs-block"
            alt="">

        <div class="container">
            <img src="img/rm3.jpeg"
                style="object-fit:cover;width: 100%;max-height: 300px;border-radius: 80px;padding: 0px;"
                class="mb-3 shadow d-none d-lg-block d-xl-block d-md-block "
                alt="">

            <div class="row">
                <div class="col-12">
                    <div class="text-center text-lg-left mb-5 mb-lg-6 reveal">
                        <h2 class="h3-font">Main problem of the <br> current market?</h2>
                    </div>
                </div>
            </div>
            <!-- end of of title row -->
            <div class="row pb-6">
                <div class="col-12 col-lg-6 reveal">
                    <ul class="pl-2">
                        <li class="color--primary mb-3 h5-font">
                            <h3 class="h5-font font-w--600 mb-1">RUGPULL 😒</h3>
                            <p class="h6-font">One of the biggest problems with DEX users is the danger of RUGPULL and
                                unsafe trading. RICHMAKER creates the liquidity of RICOs by itself and establishes safe
                                trading.</p>
                        </li>
                        <li class="color--primary mb-3 h5-font">
                            <h3 class="h5-font font-w--600 mb-1">Fair Investment</h3>
                            <p class="h6-font">On many different launch platforms, we see whales gaining an edge over small
                                investors and unfair token distributions in wallets. RICHMAKER looks after the small
                                investor and always makes fair pre-sales planning.</p>
                        </li>
                        <li class="color--primary mb-3 h5-font">
                            <h3 class="h5-font font-w--600">Sustainability</h3>
                            <p class="h6-font">We are aware that many projects have an ever-increasing token structure in
                                the long run. This situation poses a disadvantage for investors. RICHMAKER continuously
                                rewards its holders with its deflationary token structure, and as the number of tokens is
                                constantly decreasing, it is inevitable to experience a supply shock in the long run. If you
                                are the owner of $ RICH tokens while earning income from RICOs, you will be distinguished
                                among the real rich.</p>
                        </li>
                    </ul>
                </div>
                <!-- end of problem list -->
                <div class="col-12 col-lg-6 reveal">
                    <div class=" border--around p-3 rounded--10">
                        <h3 class="mb-2">Our solution</h3>
                        <p class="h6-font">Perseverance and Determination.
                            <br>
                            <br> We are aware of all the problems in the market and we are committed to the small investor's
                            trust. Our developers are working 24/7 to achieve our goals. By foreseeing all the problems we
                            may encounter, we do not miss any details necessary to lay the strongest foundations in the
                            market.
                        </p>
                    </div>
                </div>
                <!-- end of solutions -->
            </div>
            <!-- end of row -->
            <hr class="border--bottom">
        </div>

    </section>
    <section>

        <img src="img/rm2.jpeg"
            style="z-index:2; object-fit:cover;width: 100%;height: 300px;border-radius: 80px;"
            class="my-3 shadow"
            alt="">
    </section>


    <!-- =========== End of Features ============ -->

    <!-- =========== Start of working process ============ -->
    <section class="space process process--v1 section--dark bg-color--dark--1  p-5 my-5  hidden"
        id="working-process">
        <!-- end of section overlay -->
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-10 col-md-8 mx-auto">
                    <div class="text-center mb-5 reveal">

                        <h2 class="h3-font mb-2">How it works?</h2>
                        <p class="h6-font">RICHMAKER aims to be the reversible-ico (RICO) sales platform for locations on
                            Binance SmartChain. It ensures that the projects that aim to reach the public are inspected in
                            many aspects, and provides support and encouragement in all necessary works after sales. These
                            studies can be listed under a few headings such as technical support, RICO cross-growth and
                            departure for after-sales strategies..</p>
                    </div>
                </div>
            </div>
            <!-- end of section title row -->
            <div class="row">
                <div class="col-12 text-center">
                    <div class="position-relative mt-xl-10 reveal">
                        <div class="pos-abs-center d-none d-lg-block">
                            <img src="img/layout/process-light.svg"
                                alt="process"
                                class="svg process__circle d-inline-block">
                            <img class="pos-abs-center"
                                src="img/brand-logo-white.png"
                                style="object-fit:contain;height:200px;border-radius:50%;padding:5px"
                                alt="brand-logo">

                        </div>
                        <!-- end of center image -->
                        <div class="d-sm-flex justify-content-between ml-6 ml-sm-0">
                            <div class="options options--left text-left remove-space--bottom">
                                <div class="option mb-3 mb-sm-10">
                                    <h3 class="h6-font text-sm-right text-uppercase font-w--700">Initiation of the RICO
                                        process</h3>
                                    <span class="decor decor--light"></span>
                                </div>
                                <div class="option mb-3 mb-sm-10">
                                    <h3 class="h6-font text-sm-right text-uppercase font-w--700">Pre-RICO inspection</h3>
                                    <span class="decor decor--light"></span>
                                </div>
                                <div class="option mb-3 mb-sm-10">
                                    <h3 class="h6-font text-sm-right text-uppercase font-w--700">Whitelist references</h3>
                                    <span class="decor decor--light"></span>
                                </div>
                            </div>
                            <!-- end of left side content -->
                            <div
                                class="process__circle--mobile position-relative d-none d-sm-flex d-lg-none align-items-center">
                                <span class="mobile-logo">

                                </span>
                            </div>
                            <!-- end of mobile content -->
                            <div class="d-flex justify-content-between">
                                <div class="options options--right text-right remove-space--bottom">
                                    <div class="option mb-3 mb-sm-10">
                                        <h3 class="h6-font text-left text-uppercase font-w--700">Evaluation and results</h3>
                                        <span class="decor decor--light"></span>
                                    </div>
                                    <div class="option mb-3 mb-sm-10">
                                        <h3 class="h6-font text-left text-uppercase font-w--700">RICO sale started</h3>
                                        <span class="decor decor--light"></span>
                                    </div>
                                    <div class="option mb-3 mb-sm-10">
                                        <h3 class="h6-font text-left text-uppercase font-w--700">TGE and trade</h3>
                                        <span class="decor decor--light"></span>
                                    </div>
                                </div>
                                <!-- end of right side content -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->

            <!-- end of button row -->
        </div>
    </section>
    <!-- =========== End of working process ============ -->

    <!-- =========== Start of Benefits and CTA ============ -->
    <section class="space section--dark bg-color--dark--1  p-5 my-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9 mx-auto mx-md-0">
                    <div class="mb-5 mb-lg-7 text-center text-md-left reveal">
                        <h2 class="h3-font mb-2">How do $ RICH token holders get rewards?</h2>
                        <p class="h6-font">2% deduction is applied for every transaction. 1% is burned forever and is
                            reduced from the total quantity. Burned tokens do not have a physical sending address. Half (1%)
                            of the applied deduction is automatically distributed to $ RICH token holders by calculating
                            their percentage. You don't need to claim, farming and wait a certain amount of time to receive
                            rewards. You just need to keep it in your wallet..</p>
                    </div>
                </div>
            </div>
            <!-- end of section title row -->
            <div class="position-relative remove-space--bottom">
                <div class="vertical-border d-flex pos-abs-center h-100 w-100">
                    <span class="column-border"></span>
                </div>
                <div class="row horizontal-border justify-content-between mb-lg-5 pb-lg-5 reveal">
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="d-lg-flex mb-4 mb-lg-0 text-center text-md-left">
                            <span class="mb-3 mb-lg-0 mr-md-3">
                                <img src="img/icon-decentralized.svg"
                                    alt="icon">
                            </span>
                            <div>
                                <h3 class="h5-font font-w--600 text-color--200 mb-2">Decentralized</h3>
                                <p>We believe it is incredibly important to redistribute this power & profitability, and
                                    hand it back over to the people - the real consumers, borrowers and lenders.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end of single item col -->
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="d-lg-flex mb-4 mb-lg-0 text-center text-md-left">
                            <span class="mb-3 mb-lg-0 mr-md-3">
                                <img src="img/icon-p2p.svg"
                                    alt="icon">
                            </span>
                            <div>
                                <h3 class="h5-font font-w--600 text-color--200 mb-2">Peer to peer network</h3>
                                <p>Utilizing the power of the global community and the sharing economy to tear down the
                                    barriers and revolutionize the old & inefficient financial systems.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end of single item col -->
                </div>
                <!-- end of content row -->
                <div class="row horizontal-border justify-content-between mb-lg-5 pb-lg-5 reveal">
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="d-lg-flex mb-4 mb-lg-0 text-center text-md-left">
                            <span class="mb-3 mb-lg-0 mr-md-3">
                                <img src="img/icon-wallet.svg"
                                    alt="icon">
                            </span>
                            <div>
                                <h3 class="h5-font font-w--600 text-color--200 mb-2">Rich Marines</h3>
                                <p>To become a RICH MARINES member, you only need to have a certain number of $ RICH and
                                    link your wallet. Join MARINES to enjoy RICHMAKER benefits!.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end of single item col -->
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="d-lg-flex mb-4 mb-lg-0 text-center text-md-left">
                            <span class="mb-3 mb-lg-0 mr-md-3">
                                <img src="img/icon-ledger.svg"
                                    alt="icon">
                            </span>
                            <div>
                                <h3 class="h5-font font-w--600 text-color--200 mb-2">True value creation</h3>
                                <p>Using innovation and creativity, our community of architects, developers revolutionaries
                                    believe in the creation of a bid meets an ask.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end of single item col -->
                </div>
                <!-- end of content row -->
            </div>
            <!-- end of benefits row -->
        </div>
    </section>
    <!-- =========== End of Benefits and CTA ============ -->

    <!-- =========== Start of Token  Details ============ -->


    <!-- Modal -->
    <div class="modal fade"
        id="exampleModalCenter"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"
            role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"
                        id="exampleModalLongTitle">Rich Marines</h5>
                </div>
                <div class="modal-body">
                    Only RICH MARINES members are eligible to participate in RICOs. RICO is the platform of Rich Maker for
                    launchpads, where members can join presales. RICOS that take place on Rich Maker platform give absolute
                    advantage of $Rich holders to be early investors of new projects.
                </div>
                <div class="modal-footer">
                    <button type="button"
                        class="btn btn-primary"
                        data-dismiss="modal">Got it !</button>
                </div>
            </div>
        </div>
    </div>
    <!-- =========== End of Token  Details ============ -->


    <!-- =========== End of Token sale information ============ -->

    <!-- =========== Start of Roadmap ============ -->
    <section class="space hidden roadmap roadmap--v1 section--dark bg-color--dark--1  p-5 my-5"
        id="roadmap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-10 col-md-8 mx-auto reveal">
                    <div class="text-center mb-sm-5 mb-lg-7">
                        <h2 class="h3-font mb-2">Rich Maker Roadmap</h2>
                    </div>
                </div>
            </div>
            <!-- end of section title row -->
            <div class="row align-items-center pb-7 pb-md-0 reveal">
                <div class="col-12 col-xl-1 mx-auto mx-lg-0 text-center">
                    <ul class="roadmap__year list-unstyled d-xl-flex flex-xl-column">
                    </ul>
                </div>
                <div class="col-12 col-xl-9 ml-xl-auto">
                    <div class="carosuel-slider--v6">
                        <div class="slide mb-1"
                            data-year="2021">
                            <div class="d-md-flex align-items-md-center">
                                <div class="mr-5 pr-5 mr-xl-7 pr-xl-7 mb-3 mb-md-0 position-relative">
                                    <span class="text-color--400 font-w--600 mb-1 opacity--60">2021</span>
                                    <h3 class="slide__title font-size--26 text-color--200 font-w--600">Quarter - 1</h3>
                                    <span class="d-none d-md-inline-block decor decor--square decor--light"></span>
                                </div>
                                <ul class="pl-2 pl-md-0">
                                    <li class="text-color--400">
                                        <p class="h6-font">Starting the project.</p>
                                    </li>
                                    <li class="text-color--400">
                                        <p class="h6-font">Applying for the audit qualification..</p>
                                    </li>
                                    <li class="text-color--400">
                                        <p class="h6-font">Blockchain developers will be hired according to the standards of
                                            the team. (Regardless of time, new members are included in the team as needed.).
                                        </p>
                                    </li>
                                    <li class="text-color--400">
                                        <p class="h6-font">Receiving and evaluating the applications of the projects to be
                                            listed on the platform. (Valid for every quarter.)</p>
                                    </li>
                                    <li class="text-color--400">
                                        <p class="h6-font">Various activities planning in order to strengthen the community.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end of single slide -->
                        <div class="slide mb-1"
                            data-year="2021">
                            <div class="d-md-flex align-items-md-center">
                                <div class="mr-5 pr-5 mr-xl-7 pr-xl-7 mb-3 mb-md-0 position-relative">
                                    <span class="text-color--400 font-w--600 mb-1 opacity--60">2021</span>
                                    <h3 class="slide__title font-size--26 text-color--200 font-w--600">Quarter - 2</h3>
                                    <span class="d-none d-md-inline-block decor decor--square decor--light"></span>
                                </div>
                                <ul class="pl-2 pl-md-0">
                                    <li class="text-color--400">
                                        <p class="h6-font">Launching the RICH MAKER Launchpad (RICO).</p>
                                    </li>
                                    <li class="text-color--400">
                                        <p class="h6-font">New partnerships.</p>
                                    </li>
                                    <li class="text-color--400">
                                        <p class="h6-font">More projects will be available for sale through the platform,
                                            and $ RICH owners will take priority.</p>
                                    </li>
                                    <li class="text-color--400">
                                        <p class="h6-font">Evaluation of CEX lists.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end of single slide -->
                        <div class="slide mb-1"
                            data-year="2021">
                            <div class="d-md-flex align-items-md-center">
                                <div class="mr-5 pr-5 mr-xl-7 pr-xl-7 mb-3 mb-md-0 position-relative">
                                    <span class="text-color--400 font-w--600 mb-1 opacity--60">2021</span>
                                    <h3 class="slide__title font-size--26 text-color--200 font-w--600">Quarter - 3</h3>
                                    <span class="d-none d-md-inline-block decor decor--square decor--light"></span>
                                </div>
                                <ul class="pl-2 pl-md-0">
                                    <li class="text-color--400">
                                        <p class="h6-font">Platform tests and update studies.</p>
                                    </li>
                                    <li class="text-color--400">
                                        <p class="h6-font">Development of the platform.</p>
                                    </li>
                                    <li class="text-color--400">
                                        <p class="h6-font">Creating new advertisements and promotional activities.</p>
                                    </li>
                                    <li class="text-color--400">
                                        <p class="h6-font">Publishing the new road map.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end of single slide -->

                        <!-- end of single slide -->
                    </div>
                    <!-- end of single year slide group -->
                </div>
            </div>
        </div>
    </section>
    <!-- =========== End of Roadmap ============ -->


    <!-- =========== End of team ============ -->

    <!-- =========== Start of Doc and FAQ ============ -->
    <section class="section--dark bg-color--dark--1  p-5 my-5 ">

        <!-- end of document area -->
        <div class="space faq faq--v1"
            id="faq">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="text-center text-sm-left mb-5 mb-lg-7 reveal">
                            <h2 class="h3-font mb-2">Frequently <br> asked questions</h2>
                        </div>
                    </div>
                    <!-- end of section title col -->
                    <div class="col-12 col-lg-8">
                        <div class="accordion accordion--v1 remove-space--bottom reveal"
                            id="accordion1">
                            <div class="card mb-1">
                                <button class="btn btn-header btn-link"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapse1"
                                    aria-expanded="true"
                                    aria-controls="collapse1">
                                    <span class="h6-font text-color--200 text-left font-w--600">Where can I buy $ RICH
                                        tokens?</span>
                                    <i class="icon icon-up-arrow"></i>
                                </button>
                                <div id="collapse1"
                                    class="collapse show"
                                    data-parent="#accordion1">
                                    <div class="card-body pl-3">
                                        <p>You can get the $RICH token by purchasing it from PancakeSwap. <a
                                                href="https://exchange.pancakeswap.finance/#/swap?inputCurrency=0x0d94335595ae842890bec091ef8c47d62f545d99">Click
                                                here</a></p>
                                    </div>
                                </div>
                            </div>
                            <!-- end of single accordion-->
                            <div class="card mb-1">
                                <button class="btn btn-header btn-link collapsed"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapse2"
                                    aria-expanded="false"
                                    aria-controls="collapse2">
                                    <span class="h6-font text-color--200 text-left font-w--600">How do $ RICH token holders
                                        get rewards?</span>
                                    <i class="icon icon-up-arrow"></i>
                                </button>
                                <div id="collapse2"
                                    class="collapse"
                                    data-parent="#accordion1">
                                    <div class="card-body pl-3">
                                        <p>2% deduction is applied for every transaction. 1% is burned forever and is
                                            reduced from the total quantity. Burned tokens do not have a physical sending
                                            address. Half (1%) of the applied deduction is automatically distributed to $
                                            RICH token holders by calculating their percentage. You don't need to claim,
                                            farming and wait a certain amount of time to receive rewards. You just need to
                                            keep it in your wallet.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end of single accordion-->
                            <div class="card mb-1">
                                <button class="btn btn-header btn-link collapsed"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapse3"
                                    aria-expanded="false"
                                    aria-controls="collapse3">
                                    <span class="h6-font text-color--200 text-left font-w--600">What does it take to become
                                        a RICH MARINES member?</span>
                                    <i class="icon icon-up-arrow"></i>
                                </button>
                                <div id="collapse3"
                                    class="collapse"
                                    data-parent="#accordion1">
                                    <div class="card-body pl-3">
                                        <p>To become a RICH MARINES member, you only need to have a certain number of $ RICH
                                            and link the wallet. Join MARINES to enjoy RICHMAKER benefits!</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end of single accordion-->

                            <!-- end of single accordion-->
                        </div>
                    </div>
                </div>
                <!-- end of FAQ row -->
            </div>
            <!-- end of FAQ container -->
        </div>
        <!-- end of FAQ Area -->

    </section>
    <!-- =========== End of Doc and FAQ ============ -->

    <!-- =========== Start of CTA ============ -->

    <!-- =========== Start of CTA ============ -->

    <!-- =========== Start of Partners ============ -->
    <section class="space--top pb-4 section--dark bg-color--dark--1  p-5 my-5 "
        id="partners">
        <div class="background-holder opacity--05">
            <img src="img/layout/bg-overlay-04.png"
                alt="image"
                class="background-image-holder">
        </div>
        <!-- end of section overlay -->
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-10 col-md-8 mx-auto">
                    <div class="text-center mb-5 mb-lg-6 reveal">
                        <h2 class="h3-font mb-2">Our partners</h2>
                    </div>
                </div>
                <!-- end of section title col -->
            </div>
            <!-- end of section title row -->
            <div class="position-relative reveal">
                <div class="row horizontal-border text-center mb-lg-6 pb-lg-6 d-flex align-items-center">
                    <div class="col-12 col-sm-6 col-lg-6 mb-5 mb-lg-0">
                        <span><img style="max-height: 120px;border-radius: 50px;padding:5px"
                                src="https://static.coingecko.com/s/coingecko-logo-white-3f2aeb48e13428b7199395259dbb96280bf47ea05b2940ef7d3e87c61e4d8408.png"
                                alt="partner-logo"
                                class="img-fluid"></span>
                    </div>
                    <!-- end of single item -->
                    <div class="col-12 col-sm-6 col-lg-6 3 mb-5 mb-lg-0">
                        <span><img style="max-height: 120px;border-radius: 50px;padding:5px"
                                src="https://user-images.githubusercontent.com/168240/39501128-e66e2a18-4d6d-11e8-9e16-88655102da6c.png"
                                alt="partner-logo"
                                class="img-fluid bg-light"></span>
                    </div>
                    <!-- end of single item -->
                </div>
                <div class="row horizontal-border text-center mb-lg-6 pb-lg-6 d-flex align-items-center">
                    <div class="col-12 col-sm-6 col-lg-6 mb-5 mb-lg-0">
                        <span><img style="max-height: 120px;border-radius: 50px;padding:5px"
                                src="https://solidity.finance/images/logo.png"
                                alt="partner-logo"
                                class="img-fluid"></span>
                    </div>
                    <!-- end of single item -->
                    <div class="col-12 col-sm-6 col-lg-6 mb-5 mb-lg-0">
                        <span><img style="max-height: 120px;border-radius: 50px;padding:5px"
                                src="https://avatars.githubusercontent.com/u/71247426?s=400&v=4"
                                alt="partner-logo"
                                class="img-fluid"></span>
                    </div>
                </div>


            </div>
            <!-- end of logo area -->
        </div>
    </section>
    <section class="pt-2  section--dark bg-color--dark--1  pb-0 mt-5 "
        id="partners">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <div class="text-center mb-5 mb-lg-6 reveal">
                        <h6> <i class="fa fa-copyright"
                                aria-hidden="true"></i> 2021 RICH MAKER Finance. All rights reserved. 2021</h6>
                    </div>
                </div>
                <!-- end of section title col -->
            </div>
            <!-- end of section title row -->

            <!-- end of logo area -->
        </div>
    </section>
    <!-- =========== End of Partners ============ -->

    <!-- =========== Start of footer height emulator============ -->
    <!-- this height emulator helps to calculate the fixed footer height  -->
    <div class="height-emulator d-none d-lg-block"></div>
    <!-- =========== End of footer height emulator============ -->

    <!-- =========== Start of Footer ============ -->

    <!-- =========== End of Footer ============ -->
@endsection
