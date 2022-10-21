<!DOCTYPE html>
<html lang="en">

@include('website.partials.header')

<body>
	<!-- HEADER -->
	<header>
		<!-- top Header -->
		{{-- <div id="top-header">
			<div class="container">
				<div class="pull-left">
					<span>Welcome to E-shop!</span>
				</div>
				<div class="pull-right">
					<ul class="header-top-links">
						<li><a href="#">Store</a></li>
						<li><a href="#">Newsletter</a></li>
						<li><a href="#">FAQ</a></li>
						<li class="dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">ENG <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="#">English (ENG)</a></li>
								<li><a href="#">Russian (Ru)</a></li>
								<li><a href="#">French (FR)</a></li>
								<li><a href="#">Spanish (Es)</a></li>
							</ul>
						</li>
						<li class="dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">USD <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="#">USD ($)</a></li>
								<li><a href="#">EUR (€)</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div> --}}
		<!-- /top Header -->

		<!-- header -->
		@include('website.partials.menu')
		<!-- container -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	@include('website.partials.category')
	<!-- /NAVIGATION -->

    @yield('content')

	<!-- FOOTER -->
    @include('website.partials.footer')
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	@include('website.partials.js')

</body>

</html>
