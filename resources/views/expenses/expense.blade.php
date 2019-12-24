
@extends('layout.main')
	
	<!-- content -->
	@section('content')
	<div class="sub-main-w3">
		@include('auth.message')
		<form class="login" action="{{ route('expenses.store') }}" method="post">
			@csrf
			<p class="legend">Expense<span class="fa fa-hand-o-down"></span></p>
			<div class="input">
				<input type="text" placeholder="Expense" name="name" />
				<span class="fa fa-shopping-cart"></span>
			</div>
		
			<button type="submit" class="submit">
				<span class="fa fa-sign-in"></span>
			</button>
		</form>
	</div>

@endsection

