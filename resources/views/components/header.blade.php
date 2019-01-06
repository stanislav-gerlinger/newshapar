<header>
    <section class="header">
		<div class="container">
			<div class="header__container">
				<div class="header__phones">
				</div>
				<div class="header__logo">
					<a href="/">
						<img src="/img/logo.svg">
					</a>
				</div>
				<div class="header__profile">
					@if (Route::has('login'))
		                <div class="top-right links">
		                    @auth
		                        <a href="{{ route('logout') }}">Logout</a>
		                    @else
		                        <a href="{{ route('login') }}">Login</a>

		                        @if (Route::has('register'))
		                            <a href="{{ route('register') }}">Register</a>
		                        @endif
		                    @endauth
		                </div>
		            @endif
				</div>
				<div class="header__additional">
				</div>
			</div>
	    </div>
	</section>
    <section class="subheader">
		<div class="container">
			<div class="subheader__container">
		        @include('components.menu')

		        <ul class="subheader__menu subheader__menu--social">
		        	<li><a href=""><img src="/img/icons/instagram.svg"></a></li>
		        	<li><a href=""><img src="/img/icons/facebook.svg"></a></li>
		        	<li><a href=""><img src="/img/icons/pinterest.svg"></a></li>
		        	<li><a href=""><img src="/img/icons/twitter.svg"></a></li>
		        	<li><a href=""><img src="/img/icons/vk.svg"></a></li>
		        	<li><a href=""><img src="/img/icons/google-plus.svg"></a></li>
	        	</ul>
        	</div>
	    </div>
	</section>
</header>