@extends('/layouts/main-layout')
@section('content')
	<div class="container mx-auto container--slim section-margin">
		@if (session('message'))
			<div class="panel section-margin">
			    <h3 class="header text-center header--small">{{ session('message') }}</h3>
			</div>
		@endif
		<div class="panel">
			<div class="panel__row">
				<div class="panel__column">
					<div id="login">
						<h2 class="header header--small">Login</h2>
						<form method="POST" action="/login">
							@csrf
							<input type="hidden" value="login" name="action" />
							<label for="email" class="form__input">
								<input id="email" name="email" type="text" placeholder="Email Address"/>
							</label>
							<label for="password" class="form__input">
								<input id="password" name="password" type="password" placeholder="Password"/>
							</label>
							<button class="btn" type="submit">Login</button>
							<a class="pl-5"  href="/register">Register</a>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection