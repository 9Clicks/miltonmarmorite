@extends('layouts.html')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12" id="topo">
                <div class="row">
                    <div class="col-xl-8 offset-2">

                        <div class="col-xl-6" id="topo-info">
                            @include('inc.inc_data')
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 offset-2">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-6 mt-3 mb-3" id="logo">

                                <div class="col-xl-12">
                                    <img src="{{ asset('images/layout/logo.png') }}" class="img-fluid" alt="">
                                </div>

                            </div>
                            <div class="col-xl-6 mt-3">

                                <div class="col-xl-12" id="info-end">
                                    <hr style="background: #ffffff">
                                    <h4><i class="fa fa-map-marker" aria-hidden="true"></i> Rua Trinta, 445 - Ipaba - Vale Verde/MG</h4>
                                    <h2><i class="fa fa-phone" aria-hidden="true"></i> <small>(31) </small><strong>98571-1938</strong></h2>
                                    <h3><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:contato@miltonmarmorite.com.br">contato@miltonmarmorite.com.br</a></h3>
                                </div>

                                <div class="col-xl-12" id="icons-redes">
                                    <div class="pull-right">
                                        <a href="#" style="margin-right: 20px"><i class="fa fa-facebook-official fa-4x" aria-hidden="true"></i> </a>
                                        <a href="#" style="margin-right: 20px"><i class="fa fa-twitter-square fa-4x" aria-hidden="true"></i> </a>
                                        <a href="#" style="margin-right: 20px"><i class="fa fa-instagram fa-4x" aria-hidden="true"></i> </a>
                                        <a href="#" style="margin-right: 20px"><i class="fa fa-google-plus fa-4x" aria-hidden="true"></i> </a>
                                        <a href="#"><i class="fa fa-youtube-square fa-4x" aria-hidden="true"></i> </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 offset-2">

                <div class="col-xl-12">
                    @include('inc.inc_nav')
                </div>

            </div>
        </div>

        <div class="row mt-3">
            <div class="col-xl-8 offset-2">
                <div class="col-xl-12">
                    @include('inc.inc_slider')
                </div>
            </div>
        </div>
    </div>
@stop