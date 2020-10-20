@extends('layouts.app')

@section('content')
    @auth
        <div class="content-header">
            <h1>
                Dashboard
                <small>Painel de Controle</small>
            </h1>
            {{ Breadcrumbs::render('home', 'Blog') }}
        </div>
        <br>
        <div class="container" style="width: 100%">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>{{$indicadores['um'] ?? '0'}}</h3>
                            <br>
                            <p>Ordens de Serviço pendentes abertas nas últimas 12 horas</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        {{--                    <a href="#" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>--}}
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{$indicadores['dois'] ?? '0'}}</h3>
                            <br>
                            <p>Ordens de Serviço pendentes abertas nas últimas 13 a 24 horas</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        {{--                    <a href="#" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>--}}
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{$indicadores['tres'] ?? '0'}}</h3>
                            <br>
                            <p>Ordens de Serviço pendentes abertas nas últimas 25 a 48 horas</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        {{--                    <a href="#" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>--}}
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>{{$indicadores['quatro'] ?? '0'}}</h3>
                            <br>
                            <p>Ordens de Serviço pendentes abertas há mais de 48 horas</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        {{--                    <a href="#" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>--}}
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- Custom Tabs (Pulled to the right) -->
            <div class="row">
                <div class="col-md-8">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs pull-right">
                            <li class="pull-left header"><i class="fa fa-area-chart"></i> Requisição de Material / Mês</li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1-1">
                                <div class="chart" id="area-chart" style="height: 300px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs pull-right">
                            <li class="pull-left header"><i class="fa fa-pie-chart"></i> Eventos / Cidade</li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1-1">
                                <div class="chart" id="donut-chart" style="height: 300px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs pull-right">
                            <li class="pull-left header"><i class="fa fa-map"></i>Iluminação Pública</li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1-1">
                                <div id="map" style="height: 500px;"></div>
                                <script>
                                    var map;
                                    var pontos = JSON.parse( @json($indicadores['pontosMapa']) );
                                    function initMap() {
                                        map = new google.maps.Map(document.getElementById('map'), {
                                            center: {lat: pontos[0].lat, lng: pontos[0].lng },
                                            zoom: 10
                                        });

                                        addMarker();
                                    }
                                    function addMarker() {
                                        for (var i = 0; i < pontos.length; i++) {
                                            const marker = new google.maps.Marker({
                                                position: {
                                                    lat: pontos[i].lat,
                                                    lng: pontos[i].lng
                                                },
                                                map: map,
                                                title: pontos[i].titulo
                                            });
                                        }
                                    }
                                </script>
                                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCK3P9JR-pn_9DfJEeMYfWwWu0q_8JFTS8&callback=initMap" async defer></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        {{ route('login') }}
    @endauth
@endsection
<script !src="">
    var area = function () {
        var data = JSON.parse( @json($indicadores['graficos']) );
        console.log(JSON.parse( @json($indicadores['graficos']) ));
        new Morris.Area({
            element: 'area-chart',
            resize: true,
            data: data.area,
            xkey: 'data',
            ykeys: ['valor'],
            labels: ['Requisição de material'],
            lineColors: ['#3c8dbc'],
            hideHover: 'auto',
            smooth: false
        });
    };


    //DONUT CHART
    var donut = function () {
        var data = JSON.parse( @json($indicadores['graficos']) );
        new Morris.Donut({
            element: 'donut-chart',
            resize: true,
            colors: ["#3c8dbc", "#f56954"],
            data: data.donut,
            hideHover: 'auto'
        });
    };
    window.onload = function () {
        area();
        donut();
    };

</script>

