@if(!Auth::check())

		<div class="navitem">


	    	 <input
	    	 id="email"
	    	 form="loginForm"
	    	 placeholder="Email"
	    	 type="email"
	    	 name="email"
	    	 value="{{ old('email') }}"
	    	 required autocomplete="email" autofocus>


	    </div>

	    <div class="navitem">


	    	<input id="password"
	    	type="password"
	    	name="password"
			form="loginForm"
			placeholder="Password"
	    	required autocomplete="current-password">
	    </div>

		<div class="navitem">
			<form id="loginForm" method="POST" action="{{ route('login') }}">
				@csrf
				<input type="submit" value="Login"/>
			</form>
		</div>
		<div class="navitem">
			 <a href="{{ route('register') }}" class="btn">Register</a>
		</div>

	@else

		<div class="navitem">
			{{Auth::user()->name}}
		</div>

        <div class="navitem">
        	<form id="logoutForm" method="POST" action="{{ route('logout') }}">
				@csrf
				<input type="submit" value="Logout"/>
			</form>
        </div>


	@endif
