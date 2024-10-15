<div class="spending-limit mb-5">
	<h2 class="header">Spending Limit = £<span id="spendingLimit">{{ $user->spending_limit }}</span>
		@if($display_message && $user->spending_limit > 0)
			<span class="spending-limit__message">You have reached your spending limit</span>
		@endif
	</h2>
	<form method="POST" action="/set-spending-limit">
		@csrf
		<input type="hidden" name="user_id" value='{{ $user->id }}' />
		<div class="form__input">
			<input type="text" name="spending_limit" value="" placeholder="Set Spending Limit" />
		</div>
		<button class="btn--add" type="submit">Set Limit</button>
	</form>
</div>