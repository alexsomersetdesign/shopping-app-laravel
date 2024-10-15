<div class="email mb-5">
	<h4 class="header text-green-600 header--extra-small"></h4>
	<h4 class="header header--extra-small">Share your shopping list</h4>
	<form method="POST" action="/send-email">
		@csrf
		<div class="form__input">
			<input type="text" name="email_address" placeholder="Enter Email Address" />
		</div>
		<textarea class="hidden" name="body">
			<ul>
				@foreach($userProducts as $product)
					<li>{{ $product->name }}</li>
				@endforeach
			</ul>
		</textarea>
		<button class="btn--add" type="submit">Send Email</button>
	</form>
</div>