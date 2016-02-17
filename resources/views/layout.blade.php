<!DOCTYPE html><html lang="es"><head>	<meta charset="utf-8">	<meta http-equiv="X-UA-Compatible" content="IE=edge">	<meta name="viewport" content="width=device-width, initial-scale=1">	<title>Mutual de Servicios al Policía</title>			    {!! Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css') !!}        {!! Html::style('bower_components/bootstrap-material-design/dist/css/bootstrap-material-design.min.css') !!}        {!! Html::style('bower_components/bootstrap-material-design/dist/css/ripples.min.css') !!}        {!! Html::style('bower_components/data-tables/media/css/jquery.dataTables.min.css') !!}<body style = "padding-top: 70px;">	<nav class="navbar navbar-default navbar-fixed-top">		<div class="container-fluid">			<div class="navbar-header">				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">					<span class="sr-only">Toggle Navigation</span>					<span class="icon-bar"></span>					<span class="icon-bar"></span>					<span class="icon-bar"></span>				</button>				<a class="navbar-brand" href="#">MUSERPOL</a>			</div>			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">				<ul class="nav navbar-nav">					{{-- <li><a href="{!! url('/') !!}">Inicio</a></li> --}}					<li class="dropdown">							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Cuenta Individual <span class="caret"></span></a>							<ul class="dropdown-menu" role="menu">								<li class="dropdown-header">Despliegue de</li>								<li><a href="{!! url('afiliado') !!}">Afiliados</a></li>															</ul>						</li>					<li><a href="{!! url('totales') !!}">Reportes</a></li>				</ul>				<ul class="nav navbar-nav navbar-right">					<form class="navbar-form navbar-left" action="{{url('ir_afiliado')}}">            			<div class="form-group is-empty">              				<input type="text" class="form-control col-sm-8" name='search' placeholder="Buscar Afiliado">            				<span class="material-input"></span></div>          			</form>						<li class="dropdown">							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> {{ Auth::user()->ape }} {{ Auth::user()->nom }} <span class="caret"></span></a>							<ul class="dropdown-menu" role="menu">								@if (Gate::allows('view-afiliado'))									<li class="dropdown-header">Panel Administración</li>									<li><a href="{!! url('usuario') !!}">Gestión de Usuarios</a></li>									<li><a href="{!! url('importar_archivo') !!}">Importación de Aportes</a></li>									<li role="separator" class="divider"></li>								@endif								<li><a href="{!! url('logout') !!}">Salir</a></li>							</ul>						</li>									</ul>			</div>		</div>	</nav><div class="container">	@if (Session::has('warning'))	<div class="alert alert-warning"><h4>{!! Session::get('warning') !!}</h4></div>	@endif	@if (Session::has('message'))	<div class="alert alert-info alert-hide"><h4>{{ Session::get('message') }}</h4></div>	@endif	@if (Session::has('error'))	  <div class="alert alert-danger"><h4>{!! Session::get('error') !!}</h4></div>	@endif	@if($errors->has())	    <div class="alert alert-info" role="alert">	       @foreach ($errors->all() as $error)	          <div><h4>{{ $error }}</h4></div>	      @endforeach	    </div>	@endif</div>	@yield('content')		<!-- Scripts -->				{!! Html::script('bower_components/jquery/dist/jquery.min.js') !!}		{!! Html::script('bower_components/data-tables/media/js/jquery.dataTables.min.js') !!}		{!! Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js') !!}        {!! Html::script('bower_components/bootstrap-material-design/dist/js/ripples.min.js') !!}         {!! Html::script('bower_components/bootstrap-material-design/dist/js/material.min.js') !!}		@stack('scripts')        <script type="text/javascript">            $(document).on('ready', function(){                $.material.init();            });        </script></body></html>