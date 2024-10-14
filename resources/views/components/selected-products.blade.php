@foreach($userProducts as $product)
	<div class="panel__item selected-product" data-product-id=''>
		<div class="left">
			<span class="font-semibold">{{ $product->name }}</span>
			<form method="post">
				<input type="hidden" name="user_id" value='' />
				<input type="hidden" name="product_id" value='' />
			</form>
		</div>
		<div class="right">
			<span class="btn--purchase" data-value=''>Cross Off</span>
			<form method="post">
				<input type="hidden" name="action" value="remove_product" />
				<input type="hidden" name="user_id" value='' />
				<input type="hidden" name="product_id" value='' />
				<button onclick="removeProductFromStoredArray('')" class="btn--remove" type="submit">Remove</button>
			</form>
		</div>
	</div>
@endforeach