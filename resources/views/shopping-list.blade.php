@extends('/layouts/main-layout')
@section('content')
<section class="section-margin">
	<div class="container mx-auto">
		<div class="panel">
			<div class="grid grid-cols-12">
				<div class="col-span-6">
					<div class="spending-limit mb-5">
						<h2 class="header">Spending Limit = £<span id="spendingLimit"></span><span class="spending-limit__message">You have reached your spending limit</span></h2>
						<form method="post">
							<input type="hidden" name="action" value="set_user_spending_limit" />
							<input type="hidden" name="user_id" value='' />
							<div class="form__input">
								<input type="text" name="spending_limit" value="" placeholder="Set Spending Limit" />
							</div>
							<button class="btn--add" type="submit">Set Limit</button>
						</form>
					</div>
				</div>
				<div class="col-span-6">
					<div class="email mb-5">
						<h4 class="header text-green-600 header--extra-small"></h4>

						
						<h4 class="header header--extra-small">Share your shopping list</h4>
						<form method="post">
							<input type="hidden" name="action" value="share_email" />
							<div class="form__input">
								<input type="text" name="sharing_email" placeholder="Enter Email Address" />
							</div>
							<textarea class="hidden" name="shared_list">
								<ul>
									
								</ul>
							</textarea>
							<button class="btn--add" type="submit">Send Email</button>
						</form>
					</div>
				</div>
			</div>
			<div class="panel__row grid grid-cols-12 gap-8">
				<div class="panel__column md:col-span-6 col-span-12">
					<h2 class="header mb-5">List Items</h2>
					
							<div class="panel__item selected-product" data-product-id=''>
								<div class="left">
									<span class="font-semibold"></span>
									<form method="post">
										<input type="hidden" name="action" value="order_products" />
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
							
						
				</div>

				<div class="panel__column md:col-span-6 col-span-12">
					<h2 class="header mb-5">Products for Sale</h2>
					
							<div class="panel__item">
								<div class="left">
									<span class="font-semibold"></span> - <span class="font-semibold">£</span>
								</div>
								<div class="right">
									<form method="post" class="product-add-form-">
										<input type="hidden" name="action" value="add_product" />
										<input type="hidden" name="product_id" value='' />
										<input type="hidden" name="user_id" value='' />
										<button class="btn--add" type="submit">Add</button>
									</form>
								</div>
							</div>
						
				</div>
			</div>
		</div>
		<div class="panel panel--slim section-margin">
			
			<div class="panel__total">
				<h4 class="header header--small">Total: £<span id="basketTotal"></span></h4>
			</div>
		</div>
	</div>
</section>

@endsection