@foreach($allProducts as $product)
	<div class="panel__item">
		<div class="left">
			<span class="font-semibold">{{ $product->name }}</span> - <span class="font-semibold">£{{ $product->price }}</span>
		</div>
		<div class="right">
			<form method="post" class="product-add-form-{{ $product->id }}" action="/product-add">
				@csrf
				<input type="hidden" name="product_id" value='{{ $product->id }}' />
				<input type="hidden" name="user_id" value='{{ $user->id }}' />
				<button class="btn--add" type="submit">Add</button>
			</form>
		</div>
	</div>
@endforeach