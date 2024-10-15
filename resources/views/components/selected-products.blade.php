@if($userProducts && $userProducts->count() > 0)
	@foreach($userProducts as $product)
		<div class="panel__item selected-product" data-product-id='{{ $product->id }}'>
			<div class="left">
				<span class="font-semibold">{{ $product->name }}</span>
				<form method="post">
					<input type="hidden" name="user_id" value='' />
					<input type="hidden" name="product_id" value='' />
				</form>
			</div>
			<div class="right">
				<span class="btn--purchase" data-value='{{ $product->id }}'>Cross Off</span>
				<form method="post" action="/product-remove">
					@csrf
					<input type="hidden" name="user_id" value='{{ $user->id }}' />
					<input type="hidden" name="product_id" value='{{ $product->id }}' />
					<button onclick="removeProductFromStoredArray('{{ $product->id }}')" class="btn--remove" type="submit">Remove</button>
				</form>
			</div>
		</div>
		@php
			$price_array[] = $product->price;
		@endphp
	@endforeach
@else
	<h4 class="header header--extra-small">No products on list</h4>
@endif