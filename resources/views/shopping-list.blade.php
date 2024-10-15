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
<!-- <script>

const cross_off_selectors = document.querySelectorAll('.btn--purchase');
const remove_selectors = document.querySelectorAll('.btn--remove');
const selected_products = document.querySelectorAll('.selected-product');
const storedItems = sessionStorage.getItem('stored-items');
//Spending message logic
const spending_message = document.querySelector('.spending-limit__message');
const spending_limit = parseInt(document.getElementById('spendingLimit').textContent);
const basket_total = parseInt(document.getElementById('basketTotal').textContent);

//Check to see if the spending limit is matched or exceeded
if(basket_total >= spending_limit) {
	spending_message.classList.add('display');
}

//Checks for stored items, if true, process the items and update the UI
	if(storedItems !== null) {
		getStoredListItems();
}

//Ensures session storage is cleared if there are no products within selected list
if(!selected_products.length) {
	sessionStorage.removeItem('stored-items');
}

//Add event listeners to the buttons to add products to array in local storage allowing 'crossed off' to persist on page reloads
cross_off_selectors.forEach(selector => {
	selector.addEventListener('click', function() {
		if(storedItems !== null) {
            const storedItemArray = storedItems.split(",");
            //Check to see if the product id already exists, if so, do not add again
            if(storedItemArray.includes(selector.dataset.value)) {
            	return;
            } else {
            	storedItemArray.push(selector.dataset.value);
            	sessionStorage.setItem('stored-items', storedItemArray);
            }

        } else {
            sessionStorage.setItem('stored-items', selector.dataset.value);
        }
        window.location.reload();
	})
})

//Loop over selected products and prevent user from adding the same item multiple times to the list
selected_products.forEach(product => {
	const data = product.dataset.productId;
	const forms = document.querySelectorAll(`.product-add-form-${data}`);
	forms.forEach(form => {
		const btn = form.querySelector('BUTTON');
		btn.disabled = true;
		btn.textContent = 'Added';
	})
})

//Get stored items from storage, loop over and locate instances the where product is in the basket, add classlist
function getStoredListItems() {
    if(sessionStorage.getItem('stored-items')) {
        //Get items from local storage, create array and ensure any empty values are removed
        const product_array = sessionStorage.getItem('stored-items').split(",").filter(elm => elm);

        //Check array for length, find elements and style, amend text
        if(product_array.length) {
            product_array.forEach(item => {

                const product = document.querySelector(`[data-product-id='${item}']`);
                product.classList.add('added');

            	//Add class and styles to indicate to user, it has been added
            	product.classList.add('added');
            	const btn = product.querySelector('.btn--purchase');
    			const product_name = product.querySelector('.left SPAN');

    			product_name.classList.add('crossed-off');
    			btn.textContent = 'Crossed Off';

    			//Add a new class which will serve as a selector to remove the product from stored array on toggle
    			btn.classList.add('btn--return');

    			const return_selectors = document.querySelectorAll('.btn--return');
    			if(return_selectors) {
    				return_selectors.forEach(item => {
				    	const product_id = item.dataset.value;
				    	item.addEventListener('click', function() {
				    		removeProductFromStoredArray(product_id);
				    		window.location.reload();
				    	});
				    })
    			}
                
            })
        }
    }
}

//Remove product from storage when removed from basket
function removeProductFromStoredArray(id) {
	const stored_items = sessionStorage.getItem('stored-items').split(",");

    //Loop over array and look for selected variant id then remove it
    const product = stored_items.indexOf(`${id}`);
    if(product > -1) {
        stored_items.splice(product, 1);
    }
    //Re assign session storage using new array
    sessionStorage.setItem('stored-items', stored_items);
}
</script> -->
@endsection