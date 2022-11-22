@extends('website.layout.app')

@section('content')
	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="{{ route('home') }}">Accueil</a></li>
				<li class="active">Reservation de toilettage</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<form id="checkout-form" class="clearfix" method="POST" action="{{ route('addtoilettage') }}">
                    @csrf
                    <div class="col-md-4">



					</div>
					<div class="col-md-8">
						<div class="billing-details">

							<div class="section-title">
								<h3 class="title">Reservation de toilettage</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first_name" placeholder="Votre Nom" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last_name" placeholder="Prenom">
							</div>
                            <div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Telèphone" required>
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Address" required>
							</div>
							<div class="form-group">
								<input class="input" type="number" name="quantity" placeholder="Nombre de chiens" required>
							</div>
                            <div class="form-group">
								<label for="meeting-time">Choisissez une heure pour votre rendez-vous:</label>

                                <input type="datetime-local" id="meeting-time"
                                    name="date_reserve" value=""
                                    min="" max="" style=" margin: .4rem 0;">
							</div>

                            <div class="form-group">
								<input class="primary-btn" type="submit" value="Reservez" style="width: 70%">
							</div>
						</div>
					</div>




				</form>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
@endsection
