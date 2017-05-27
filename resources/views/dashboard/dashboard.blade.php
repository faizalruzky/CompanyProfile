@extends('layouts/dashboard.appdashboard')
@section('content-dashboard')
<div class="wrapper">
	<div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">

	<!--

	Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
	Tip 2: you can also add an image using data-image tag

	-->
	@include('dashboard/shared.side_nav')

	</div>

	<div class="main-panel">
		@include('dashboard/shared.top_nav')

		<div class="content">
			<div class="container-fluid">

			</div>
		</div>


		<footer class="footer">
			@include('dashboard/shared.footer_nav')
		</footer>

	</div>
</div>
@endsection



