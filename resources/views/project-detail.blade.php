@extends('layouts.app')

@section('content')
    <meta name="csrf-token"
        content="{{ csrf_token() }}" />


    <div class=""
        style="width: 100%;height: 100%;position: fixed;z-index: 0;margin-top:-50px"
        id="topology"></div>
    <section class="hero hero--v3 section--dark  d-flex align-items-center hidden "
        style="padding-top: 100px;padding-bottom:0px">
        <div class="container  bg-color--dark--2  p-5"
            style="background-color: #151722bb;"
            style="border-radius: 30px; ">
            <div class="row"
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
            </div>
            <section id="pr"
                style="display: none">

                <div class="row">
                    <div class="col">
                        <img src="{{ $project->logo }}"
                            style="object-fit: cover;height:200px;width:200px;border-radius:50%"
                            alt="">
                        <h1 class="mb-1">{{ $project->name }}</h1>
                        @if ($project->upcoming == 'true')

                            <span class="badge badge-pill badge-success"
                                style="font-size: 14pt"><i class="fas fa-dot-circle"
                                    style="color: rgb(75, 47, 255)"></i> Upcoming</span>
                        @endif
                        @if ($project->active == 'true' && $project->upcoming == 'false')
                            <span class="badge badge-pill badge-success"
                                style="font-size: 14pt"><i class="fas fa-dot-circle"
                                    style="color: greenyellow"></i> Live</span>
                        @endif
                        @if ($project->success == 'true' && $project->active == 'false' && $project->upcoming == 'false')
                            <span class="badge badge-pill badge-success"
                                style="font-size: 14pt"><i class="fas fa-dot-circle"
                                    style="color: rgb(36, 230, 91)"></i> Completed</span>
                        @endif
                        @if ($project->success == 'false' && $project->active == 'false' && $project->upcoming == 'false')
                            <span class="badge badge-pill badge-danger"
                                style="font-size: 14pt"><i class="fas fa-dot-circle"
                                    style="color: rgb(230, 36, 36)"></i> Failed</span>
                        @endif
                        <span class="badge badge-pill badge-warning"
                            style="font-size: 14pt">{{ $project->ticker }}</span>
                        <span class="ml-2">
                            @if ($project->telegram != null)
                                <a href="{{ $project->telegram }}"
                                    class="text-light"><i class="fab fa-telegram-plane"></i></a>
                            @endif
                            @if ($project->twitter != null)
                                <a href="{{ $project->twitter }}"
                                    class="text-light"><i class="fab fa-twitter"></i></a>
                            @endif
                            @if ($project->medium != null)
                                <a href="{{ $project->medium }}"
                                    class="text-light"><i class="fab fa-medium-m"></i></a>
                            @endif
                            @if ($project->reddit != null)
                                <a href="{{ $project->reddit }}"
                                    class="text-light"><i class="fab fa-reddit"></i></a>
                            @endif
                            @if ($project->github != null)
                                <a href="{{ $project->github }}"
                                    class="text-light"><i class="fab fa-github"></i></a>
                            @endif
                            @if ($project->bscscan != null)
                                <a href="{{ $project->bscscan }}"
                                    class="text-light"><i class="fas fa-link"></i></a>
                            @endif
                            @if ($project->pancake != null)
                                <a href="{{ $project->pancake }}"
                                    class="text-light"><i class="fas fa-sync-alt"></i></a>
                            @endif
                            @if ($project->coingecko != null)
                                <a href="{{ $project->coinmarketcap }}"
                                    class="text-light"><i class="fas fa-coins"></i></a>
                            @endif
                        </span>
                        <hr class="border-bottom">
                        <h5>{{ $project->description }}</h5>
                        <br>
                    </div>
                    <iframe style="display:none"
                        onload="getProjectData('{{ $project->contract_abi }}', '{{ $project->contract }}','{{ $project->id }}','{{ $project->token_contract }}')"
                        src="http://www.w3schools.com"></iframe>
                    <div class="col">
                        <div class="row">
                            <div class="col border">
                                <div class="row border-bottom">
                                    <div class="col">
                                        <h3>
                                            Token Information
                                        </h3>
                                    </div>
                                </div>
                                <div class="row border">
                                    <div class="col">Token Symbol</div>
                                    <div class="col">{{ $project->ticker }}</div>
                                </div>
                                <div class="row border">
                                    <div class="col">Name</div>
                                    <div class="col">{{ $project->name }}</div>
                                </div>
                                <div class="row border">
                                    <div class="col">Token Totaly Supply</div>
                                    <div class="col">{{ $project->supply }}</div>
                                </div>
                                <div class="row border">
                                    <div class="col">Decimals</div>
                                    <div class="col">{{ $project->decimals }}</div>
                                </div>
                                <div class="row border-bottom shadow py-1 my-1">
                                    <div class="col d-flex flex-column text-muted text-center">
                                        <p class="card-text small">Participants</p>
                                        <h6 class="card-text"
                                            id="{{ $project->id }}_participants"></h6>
                                    </div>

                                    <div class="col d-flex flex-column text-muted text-center">
                                        <p class="card-text small">Liquidity Lock</p>
                                        <h6 class="card-text">{{ $project->liq_lock_time }} Days</h6>
                                    </div>
                                    @if ($project->active == 'true')

                                        <div class="col d-flex flex-column text-muted text-center">
                                            <p class="card-text small">Close Time</p>
                                            <h6 class="card-text"
                                                id="{{ $project->id }}_closeTime"></h6>
                                        </div>
                                    @endif

                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="d-flex justify-content-between">
                                            <h4 class="card-title"><span class="small">Soft Cap &nbsp;: </span> <span
                                                    id="{{ $project->id }}_softCap"></span>
                                            </h4>
                                            <h4 class="card-title"><span class="small">Hard Cap :</span> <span
                                                    id="{{ $project->id }}_hardCap"></span>
                                            </h4>
                                        </div>
                                        <div id="rico_loader"></div>
                                        <div id="{{ $project->id }}"></div>
                                        <div class="progress">
                                            <div id="{{ $project->id }}_progress"
                                                class="progress-bar  progress-bar-animated progress-bar-striped bg-primary"
                                                role="progressbar"
                                                aria-valuenow="75"
                                                aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-2">
                                    <div class="col text-center">
                                        <h4 class="card-title"><span class="small">Raised :</span> <span
                                                id="{{ $project->id }}_raised"></span>
                                            BNB
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row">
                        <div class="col-6 mt-2 offset-3">
                            <button type="button"
                                name=""
                                id=""
                                class="btn btn-warning btn-lg btn-block">Approve
                                {{ $project->ticker }}</button>
                        </div>
                    </div> --}}
                        {{-- <div class="row">
                        <div class="col text-center p-0">
                            <button class="btn btn-primary mt-2"
                                style="height: 40px; width:100%"
                                onclick="approve('{{ $project->token_contract }}','{{ $project->contract }}')">Approve</button>
                        </div>
                    </div> --}}
                        <div class="row d-flex flex-column">
                            <div class="col bg-dark text-light p-2 mt-2">
                                <iframe style="display:none"
                                    onload="checkInvestments('{{ $project->contract_abi }}', '{{ $project->contract }}')"
                                    src="http://www.w3schools.com"></iframe>
                                <h5>
                                    Your Investment on {{ $project->ticker }} : <span id="investments">Not
                                        Connected</span>
                                </h5>
                            </div>
                            @if ($project->upcoming == 'false')

                                <div class="col mt-2"
                                    id="investinput_wrap">
                                    <input class="form-control text-dark"
                                        type="number"
                                        style="display:unset;font-family: 'SFUI', sans-serif; background:transparent;color:white !important;font-size:25px;border-radius:20px"
                                        name=""
                                        id="investinput"
                                        aria-describedby="helpId"
                                        placeholder=""
                                        value="0"
                                        onfocus="document.getElementById('investinput').value = ''"
                                        onkeyup="document.getElementById('investbnb').innerHTML = document.getElementById('investinput').value">
                                </div>

                                <div class="col p-1 my-1 text-center"
                                    id="btn_invest">
                                    <a name=""
                                        class="btn btn-success w-50"
                                        href="#"
                                        role="button"
                                        onclick="invest('{{ $project->contract_abi }}','{{ $project->contract }}')">INVEST
                                        &nbsp;<span id="investbnb">0</span> &nbsp; <small>BNB</small></a>

                                </div>
                            @endif

                            <div class="col p-1 my-1  justify-content-center "
                                id="btn_claimBnb"
                                style="display: none">
                                <a name=""
                                    class="btn btn-warning w-50"
                                    href="#"
                                    role="button"
                                    onclick="invest('{{ $project->contract_abi }}','{{ $project->contract }}')">Claim
                                    BNB</a>

                            </div>
                            <div class="col p-1 my-1 justify-content-center"
                                id="btn_claimTokens"
                                style="display: none">
                                <a name=""
                                    class="btn btn-warning w-50"
                                    href="#"
                                    role="button"
                                    onclick="claimTokens('{{ $project->contract_abi }}','{{ $project->contract }}')">Claim
                                    Tokens</a>

                            </div>


                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col">
                        <a name=""
                            class="mt-2 btn btn-warning w-25"
                            href="#"
                            role="button"
                            onclick="approve('{{ $project->stake_contract }}')">Approve</a>
                    </div>
                </div>
                <div class="row">

                    @if ($project->active == 'false' && ($project->success == 'true' || $project->success == 'false'))

                        <div class="col-6 offset-3 mt-2 p-4 text-center"
                            id="stake_wrap">
                            <input class="form-control text-dark"
                                type="number"
                                style="display:unset;font-family: 'SFUI', sans-serif; background:transparent;color:white !important;font-size:25px;border-radius:20px"
                                name=""
                                id="stakeinput"
                                aria-describedby="helpId"
                                placeholder=""
                                value="0"
                                onfocus="document.getElementById('stakeinput').value = ''">
                            <div class="d-flex justify-content-between">

                                <a name=""
                                    class="mt-2 btn btn-success w-25"
                                    href="#"
                                    role="button"
                                    onclick="stake_deposit('{{ $project->stake_abi }}','{{ $project->stake_contract }}')">Deposit</a>
                                <div>
                                    <span>Pending Reward</span>
                                    <br>
                                    <h3>3400 $RICO</h3>
                                </div>
                                <a name=""
                                    class="mt-2 btn btn-warning w-25"
                                    href="#"
                                    role="button">Withdraw</a>
                            </div>

                        </div>

                    @endif

                </div> --}}
            </section>

            <!-- end of row -->
        </div>

    </section>


    <!-- =========== Start of footer height emulator============ -->
    <!-- this height emulator helps to calculate the fixed footer height  -->
    <div class="height-emulator d-none d-lg-block"></div>
    <!-- =========== End of footer height emulator============ -->

    <!-- =========== Start of Footer ============ -->

    <!-- =========== End of Footer ============ -->
@endsection
