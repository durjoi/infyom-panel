@extends('layouts.app')

@section('content')
	@auth
	<style>
		i.ion.ion-ios-gear-outline {
			margin-top: 23px !important;
		}
	</style>
		<div class="content-header">
			<h1>
				Painel de Controle
				<small>Versão 1.0</small>
			</h1>
			{{ Breadcrumbs::render('home', 'Blog') }}
		</div>
		<br>
		<div class="container" style="width: 100%">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="info-box">
						<span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
						<div class="info-box-content">
							<span class="info-box-text">MÉDICOS ASSISTENTES</span>
							<span class="info-box-number">{{ $count_doctors }}</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="info-box">
						<span class="info-box-icon bg-red"><i class="ion ion-ios-gear-outline"></i></span>
						<div class="info-box-content">
							<span class="info-box-text">PACIENTES SEM RETORNO</span>
							<span class="info-box-number">{{ $one_way }}</span>
						</div>
					</div>
				</div>
				<div class="clearfix visible-sm-block"></div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="info-box">
						<span class="info-box-icon bg-green"><i class="ion ion-ios-gear-outline"></i></span>
						<div class="info-box-content">
							<span class="info-box-text">AVALIAÇÕES NO MÊS</span>
							<span class="info-box-number">{{ $this_month }}</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="info-box">
						<span class="info-box-icon bg-yellow"><i class="ion ion-ios-gear-outline"></i></span>
						<div class="info-box-content">
							<span class="info-box-text">NOVOS PACIENTES NO MÊS</span>
							<span class="info-box-number">{{ $this_month }}</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Gráfico mensal de crescimento</h3>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-md-8">
									<!-- <p class="text-center">
										<strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
									</p> -->
									<div class="chart">
										<canvas id="myChart"></canvas>
									</div>
								</div>
								<div class="col-md-4">
									<p class="text-center">
										<strong>Metas por atendimento</strong>
									</p>
									<div class="progress-group">
										<span class="progress-text">Deficiência cardiovascular</span>
										<span class="progress-number"><b>{{ $cardio }}</b>/100%</span>
										<div class="progress sm">
											<div class="progress-bar progress-bar-aqua" style="width: {{ $cardio }}%"></div>
										</div>
									</div>
									<div class="progress-group">
										<span class="progress-text">Deficiência respiratória</span>
										<span class="progress-number"><b>{{ $respira }}</b>/100%</span>
										<div class="progress sm">
											<div class="progress-bar progress-bar-red" style="width: {{ $respira }}%"></div>
										</div>
									</div>
									<div class="progress-group">
										<span class="progress-text">Deficiência neuromioarticular</span>
										<span class="progress-number"><b>{{ $neuro }}</b>/100%</span>
										<div class="progress sm">
											<div class="progress-bar progress-bar-green" style="width: {{ $neuro }}%"></div>
										</div>
									</div>
									<div class="progress-group">
										<span class="progress-text">Deficiência cognitiva</span>
										<span class="progress-number"><b>{{ $cognitiva }}</b>/100%</span>
										<div class="progress sm">
											<div class="progress-bar progress-bar-yellow" style="width: {{ $cognitiva }}%"></div>
										</div>
									</div>
								</div>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
	$(function() {
		var ctx = document.getElementById('myChart').getContext('2d');
		var chart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: {!! $dates !!},
				datasets: [{
					label: 'Consultas Médicas por Mês',
					backgroundColor: 'rgb(116, 165, 193)',
					borderColor: 'rgb(60, 141, 188)',
					data: {!! $counts !!}
				}]
			},
			options: {}
		});
		console.log(chart);
	});
</script>