@extends('layouts.app2')

@section('title')

Index

@endsection

@section('content')

<!-- navigation starts ---->

{{-- <nav class="navbar navbar-inverse nav" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<a class="navbar-brand" href="{{ route('index') }}">AMS</a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ session('username') }}<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="{{ route('logout') }}">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav> --}}

<!-- navigation end ---->

<!-- side bar start ---->

<!-- side bar end ---->



@endsection
