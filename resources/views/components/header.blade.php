<header>
	<div class="container mx-auto pt-5 pb-5">
		<div class="grid grid-cols-12 items-center">
			<div class="md:col-span-6 col-span-12">
				<h1 class="header__title">Shopping List Application</h1>
			</div>
			<div class="md:col-span-6 text-end col-span-12">
				@if (Auth::check())
					<a href="/logout" class="btn--white">Logout</a>
				@else
					<a href="/login" class="btn--white">Login</a>
				@endif
			</div>
		</div>
	</div>
</header>