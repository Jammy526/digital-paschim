@extends('layouts.app')

@section('content')
@include('partials.searchbar')
<div class="container-fluid mt-4">
	<div class="row p-2">
		<div class="col-md-6 col-sm-12 yellow darken-1 text-dark">
			<div class="row p-4">
				<div class="col-md-6 col-sm-12">
					<img class="d-flex align-self-center mr-3 img-fluid" src="{{ asset('images/laptop.png') }}" alt="" style="width: 100%; height: auto;">
				</div>
				<div class="col-md-6 col-sm-12 p-2">
					<h1 class="h2-responsive text-center">Get a free Business directory listing</h1>
					<p class="card-text font-weight-light">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odio id earum officiis, laboriosam, praesentium facilis beatae illo laborum.
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 indigo accent-4 white-text">
			<div class="row p-4">
				<div class="col-md-6 col-sm-12 p-2">
					<h1 class="h2-responsive text-center">Make it easy for customer to reach you</h1>
					<p class="card-text font-weight-light">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odio id earum officiis, laboriosam, praesentium facilis beatae illo laborum.
					</p>
				</div>
				<div class="col-md-6 col-sm-12">
					<img class="d-flex align-self-center mr-3 img-fluid" src="{{ asset('images/bubbles.png') }}" alt="" style="width: 100%; height: auto;">
				</div>
			</div>
		</div>
	</div>

	<div class="row grey lighten-5 p-4">
		<div class="col-md-6 p-4">
			<div class="container">
				<h1 class="h1-responsive text-center mdb-color-text">Upgrade to premium & get a portfolio</h1>
				<p class="h4-responsive card-text font-weight-light">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odio id earum officiis, laboriosam, praesentium facilis beatae illo laborum, similique, quas necessitatibus esse distinctio. Delectus aliquam quia, reiciendis adipisci ut.
				</p>
			</div>
		</div>
		<div class="col-md-6 p-2">
			<img src="{{ asset('images/find_business.jpg') }}" alt="" style="width: 100%; height: auto;">
		</div>
	</div>

</div>
@endsection