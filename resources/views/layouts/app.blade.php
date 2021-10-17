<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token"
        content="{{ csrf_token() }}">

    <title>$RICH MAKER | Official Website</title>
    <!-- Scripts -->
    <!-- Fonts -->
    <link rel="dns-prefetch"
        href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito"
        rel="stylesheet">

    <!-- Styles -->
    <!-- favicon CSS -->
    <!-- fonts -->
    <link href="/fonts/sfuidisplay.css"
        rel="stylesheet">
    <!-- Icon fonts -->
    <link rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet"
        href="/css/plugins.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet"
        href="/css/app2.css">
    <!-- Your CSS -->
    <link rel="stylesheet"
        href="/css/custom.css">
</head>
<style>
    .walletinfo {
        position: fixed;
        width: 500px;
        height: 50px;
        top: 0;
        right: 100px;
        z-index: 9999;
        color: white;

    }

</style>

<body class="theme-gradient-1"
    data-spy="scroll"
    data-target="#navbar-nav"
    data-animation="false"
    data-appearance="dark">
    <div id="app">
        <div class="walletinfo mt-2"
            id="walletinfo">
            <div class="row">
                <div class="col text-right">
                    <button onclick="forceConnect()"
                        id="connectButton"
                        class="btn btn-warning"
                        style="font-size: 8pt;width:20px;height:10px;z-index:999;">Connect</button>
                </div>
                <div class="col border pr-5 text-right d-none">
                    Status: <span id="connectionstatus">Not Connected</span>
                    <br>
                    <span id="walletadress"
                        style="font-size:11px;display: none;"> Wallet: #</span>
                </div>
            </div>
        </div>
        <header class="navbar navbar-sticky sticky-bg-color--dark navbar-expand-lg navbar-dark">
            <div class="container-fluid position-relative">
                <a class="navbar-brand d-flex"
                    href="/">
                    <img class="navbar-brand__regular shadow"
                        src="/img/brand-logo-white.png"
                        style="object-fit:contain;height:100px;border-radius:50%;padding:0px"
                        alt="brand-logo">
                    <img class="navbar-brand__sticky shadow"
                        src="/img/brand-logo-white.png"
                        style="object-fit:contain;height:100px;border-radius:50%;padding:0px"
                        alt="sticky brand-logo">
                </a>
                <!--  End of brand logo -->
                <button class="navbar-toggler d-lg-none"
                    type="button"
                    data-toggle="navbarToggler"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- end of Nav toggler -->

                <div class="navbar-inner">
                    <!--  Nav close button inside off-canvas/ mobile menu -->
                    <button class="navbar-toggler d-lg-none"
                        type="button"
                        data-toggle="navbarToggler"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- end of Nav Toggoler -->
                    <nav>
                        <ul class="navbar-nav"
                            id="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="/#working-process">How it works</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="/#partners">Partners</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="/#roadmap">Roadmap</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="https://t.me/RichMakerGlobal">Community</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="/#faq">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bg-dark"
                                    style="border-radius: 15px;"
                                    href="/audity.pdf">Audity</a>
                            </li>

                        </ul>
                    </nav>
                </div>
                <div class="d-flex align-items-center ml-lg-1 ml-xl-2 mr-5 mr-sm-6 m-lg-0">
                    <div class="dropdown-module dropdown-module--dark d-inline-block position-relative ml-1 ml-sm-2">
                        <ul class="dropdown-module-list">
                            <li>
                                <a class="dropdown-module__item d-flex align-items-center"
                                    href="#">
                                    <span class="flag-image mr-2"><img src="img/flag/uk.svg"
                                            alt="flag"
                                            class="svg"></span>English</a>
                            </li>
                            <li>
                                <a class="dropdown-module__item d-flex align-items-center"
                                    href="#">
                                    <span class="flag-image mr-2"><img src="img/flag/spain.svg"
                                            alt="flag"
                                            class="svg"></span>Español</a>
                            </li>
                            <li>
                                <a class="dropdown-module__item d-flex align-items-center"
                                    href="#">
                                    <span class="flag-image mr-2"><img src="img/flag/russia.svg"
                                            alt="flag"
                                            class="svg"></span>Русский</a>
                            </li>
                            <li>
                                <a class="dropdown-module__item d-flex align-items-center"
                                    href="#">
                                    <span class="flag-image mr-2"><img src="img/flag/turkey.svg"
                                            alt="flag"
                                            class="svg"></span>Türk</a>
                            </li>
                        </ul>
                        <!-- end of language selector dropdown-->
                    </div>
                    <!-- end of language selector -->

                </div>
                <!-- end of nav cta button -->
            </div>
        </header>

        <main class="py-4"
            style="width:100%;overflow:hidden">

            @yield('content')

        </main>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>
<script src="/js/plugins.min.js"></script>
<script src="/js/app.js"></script>
<script src="/js/tbd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.globe.min.js"></script>
<script src="https://momentjs.com/downloads/moment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>

<script>
    VANTA.GLOBE({
        el: "#topology",
        mouseControls: true,
        touchControls: true,
        gyroControls: true,
        minHeight: 100.00,
        minWidth: 100.00,
        scale: 1.00,
        scaleMobile: 1.00,
        color: 0xffffff,
        backgroundColor: 0x0
    })

</script>

</html>
