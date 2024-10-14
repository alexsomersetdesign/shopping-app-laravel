@extends('/layouts/main-layout')
@section('content')
	<div class="container mx-auto container--slim section-margin">
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
			<div class="panel__row">
				<div class="panel__column">
					<div id="register">
						<h2 class="header header--small">Register</h2>
						<form method="post" action="/register">
							@csrf
							<label for="name" class="form__input">
								<input id="name" name="name" type="text" placeholder="Name"/>
							</label>
							<label for="email" class="form__input">
								<input id="email" name="email" type="text" placeholder="Email Address"/>
							</label>
							<label for="password" class="form__input">
								<input id="password" name="password" type="password" placeholder="Password"/>
							</label>
							<button class="btn" type="submit">Register</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection