@extends('admin.layout')

@section('adminContent')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin_">Home</a></li>
                            <li class="breadcrumb-item active">Add Project</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add Project</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="/admin_/save-project/{{ $project->id }}"
                                method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Project Name</label>
                                                <input value="{{ $project->name }}"
                                                    type="name"
                                                    name="name"
                                                    class="form-control"
                                                    id="exampleInputEmail1"
                                                    placeholder="Enter the projects name">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Project Description</label>
                                                <input value="{{ $project->description }}"
                                                    type="name"
                                                    name="description"
                                                    class="form-control"
                                                    id="exampleInputEmail1"
                                                    placeholder="Enter the projects description">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Ticker</label>
                                                <input value="{{ $project->ticker }}"
                                                    type="text"
                                                    name="ticker"
                                                    class="form-control"
                                                    id="exampleInputPassword1"
                                                    placeholder="Enter the Ticker">
                                            </div>
                                        </div>
                                        <div class="col-3">

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Web Site</label>
                                                <input value="{{ $project->website }}"
                                                    type="text"
                                                    name="website"
                                                    class="form-control"
                                                    id="exampleInputPassword1"
                                                    placeholder="Enter the Web Site">
                                            </div>
                                        </div>
                                        <div class="col-3">

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Cap</label>
                                                <input value="{{ $project->cap }}"
                                                    type="text"
                                                    name="cap"
                                                    class="form-control"
                                                    id="exampleInputPassword1"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-3">

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Telegram</label>
                                                <input value="{{ $project->telegram }}"
                                                    type="text"
                                                    name="telegram"
                                                    class="form-control"
                                                    id="exampleInputPassword1"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-3">

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Twitter</label>
                                                <input value="{{ $project->twitter }}"
                                                    type="text"
                                                    name="twitter"
                                                    class="form-control"
                                                    id="exampleInputPassword1"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-3">

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Medium</label>
                                                <input value="{{ $project->medium }}"
                                                    type="text"
                                                    name="medium"
                                                    class="form-control"
                                                    id="exampleInputPassword1"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-3">

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Reddit</label>
                                                <input value="{{ $project->reddit }}"
                                                    type="text"
                                                    name="reddit"
                                                    class="form-control"
                                                    id="exampleInputPassword1"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-3">

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Github</label>
                                                <input value="{{ $project->github }}"
                                                    type="text"
                                                    name="github"
                                                    class="form-control"
                                                    id="exampleInputPassword1"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-3">

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">BscScan</label>
                                                <input value="{{ $project->bscscan }}"
                                                    type="text"
                                                    name="bscscan"
                                                    class="form-control"
                                                    id="exampleInputPassword1"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-3">

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Pancake</label>
                                                <input value="{{ $project->pancake }}"
                                                    type="text"
                                                    name="pancake"
                                                    class="form-control"
                                                    id="exampleInputPassword1"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-3">

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">CoinGecko</label>
                                                <input value="{{ $project->coingecko }}"
                                                    type="text"
                                                    name="coingecko"
                                                    class="form-control"
                                                    id="exampleInputPassword1"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-3">

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">CoinMarketCap</label>
                                                <input value="{{ $project->coinmarketcap }}"
                                                    type="text"
                                                    name="coinmarketcap"
                                                    class="form-control"
                                                    id="exampleInputPassword1"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="">Active</label>
                                                <label for=""></label>
                                                <select class="form-control"
                                                    name="active"
                                                    id="">
                                                    <option {{ $project->active == 'true' ? 'selected' : '' }}
                                                        value="true">True</option>
                                                    <option {{ $project->active == 'false' ? 'selected' : '' }}
                                                        value="false">
                                                        False</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="">Token Contract</label>
                                                <input type="text"
                                                    class="form-control"
                                                    name="token_contract"
                                                    id=""
                                                    aria-describedby="helpId"
                                                    placeholder=""
                                                    value="{{ $project->token_contract }}">


                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="">Contract</label>
                                                <input type="text"
                                                    class="form-control"
                                                    name="contract"
                                                    id=""
                                                    aria-describedby="helpId"
                                                    placeholder=""
                                                    value="{{ $project->contract }}">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="">Contract ABI</label>
                                                <input type="text"
                                                    name="contract_abi"
                                                    id=""
                                                    class="form-control"
                                                    placeholder=""
                                                    aria-describedby="helpId"
                                                    value="{{ $project->contract_abi }}">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="">Supply</label>
                                                <input type="text"
                                                    name="supply"
                                                    id=""
                                                    class="form-control"
                                                    placeholder=""
                                                    aria-describedby="helpId"
                                                    value="{{ $project->supply }}">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="">Liquidity Lock Time (Days)</label>
                                                <input type="text"
                                                    name="liq_lock_time"
                                                    id=""
                                                    class="form-control"
                                                    placeholder=""
                                                    aria-describedby="helpId"
                                                    value="{{ $project->liq_lock_time }}">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="">Decimals</label>
                                                <input type="text"
                                                    name="decimals"
                                                    id=""
                                                    class="form-control"
                                                    placeholder=""
                                                    aria-describedby="helpId"
                                                    value="{{ $project->decimals }}">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="">STAKE Contract</label>
                                                <input type="text"
                                                    name="stake_contract"
                                                    id=""
                                                    class="form-control"
                                                    placeholder=""
                                                    aria-describedby="helpId"
                                                    value="{{ $project->stake_contract }}">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="">STAKE ABI</label>
                                                <input type="text"
                                                    name="stake_abi"
                                                    id=""
                                                    class="form-control"
                                                    placeholder=""
                                                    aria-describedby="helpId"
                                                    value="{{ $project->stake_abi }}">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <img src="{{ $project->logo }}"
                                                style="height:200px;border-radius: 15px;object-fit:contain;"
                                                alt="">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Logo</label>
                                                <input type="file"
                                                    class="form-control"
                                                    name="logo"
                                                    id="">
                                            </div>
                                        </div>

                                        <div class="col-3">

                                            <div class="form-group mb-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox"
                                                        name="terms"
                                                        class="custom-control-input"
                                                        id="exampleCheck1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit"
                                        class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
