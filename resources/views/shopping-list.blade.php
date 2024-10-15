@extends('/layouts/main-layout')
@section('content')
<section class="section-margin">
	<div class="container mx-auto">
		@if (session('message'))
			<div class="panel panel--slim section-margin">
			    <h3 class="header text-green-500 text-center header--small">{{ session('message') }}</h3>
			</div>
		@endif
		@if ($errors->any())
			<div class="panel section-margin">
			    <div class="alert alert-danger">
			    	<h3 class="header header--small mb-2">Validation Errors</h3>
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li class="text-red-500 pb-2">- {{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			</div>
		@endif
		<div class="panel">
			<div class="grid grid-cols-12">
				<div class="col-span-6">
					@include('components.spending-limit')
				</div>
				<div class="col-span-6">
					@include('components.shopping-list-share')
				</div>
			</div>
			<div class="panel__row grid grid-cols-12 gap-8">
				<div class="panel__column md:col-span-6 col-span-12">
					<h2 class="header mb-5">Shopping List</h2>
					@include('components.selected-products')
				</div>
				<div class="panel__column md:col-span-6 col-span-12">
					<h2 class="header mb-5">Products for Sale</h2>
					@include('components.all-available-products')
				</div>
			</div>
		</div>

		<div class="panel panel--slim section-margin">
			<div class="panel__total">
				<h4 class="header header--small">Total: £<span id="basketTotal">{{ $list_total_price }}</span>
				</h4>	
			</div>
		</div>
	</div>
</section>
@endsection