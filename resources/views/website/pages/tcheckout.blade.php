@extends('website.layout.app')

@section('content')


	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Accueil</a></li>
				<li class="active">Commande</li>
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
				<form id="checkout-form" class="clearfix">
					<div class="col-md-8" style="margin-left:30%">
						<div class="billing-details">
							<p>Déjà un compte ? <a href="#">Connexion</a></p>
							<div class="section-title">
								<h3 class="title">Détails de la facturation</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first-name" placeholder="First Name">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" placeholder="Last Name">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Address">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="City">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" placeholder="Country">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip-code" placeholder="ZIP Code">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Telephone">
							</div>
							<div class="form-group">
								<div class="input-checkbox">
									<input type="checkbox" id="register">
									<label class="font-weak" for="register">Créer un compte?</label>
									<div class="caption">

												<input class="input" type="password" name="password" placeholder="Enter Your Password">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="shiping-methods">
							<div class="section-title">
								<h4 class="title">méthodes de livraison</h4>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="shipping" id="shipping-1" checked>
								<label for="shipping-1">Livraison gratuite</label>
								<div class="caption">

								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="shipping" id="shipping-2">
								<label for="shipping-2">Standard</label>
								<div class="caption">
									{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										<p> --}}
								</div>
							</div>
						</div>

						<div class="payments-methods">
							<div class="section-title">
								<h4 class="title">Modes de paiement</h4>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-1" checked>
								<label for="payments-1">Virement bancaire direct</label>
								<div class="caption">
									{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										<p> --}}
								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-2">
								<label for="payments-2">Paiement par chèque</label>
								<div class="caption">
									{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										<p> --}}
								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-3">
								<label for="payments-3">Système Paypal</label>
								<div class="caption">
									{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										<p> --}}
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="order-summary clearfix">
							<div class="section-title">
								<h3 class="title">Examen de la commande</h3>
							</div>
							<table class="shopping-cart-table table">
								<thead>
									<tr>
										<th>Produit</th>
										<th></th>
										<th class="text-center">Prix</th>
										<th class="text-center">Quantite</th>
										<th class="text-center">Total</th>
										<th class="text-right"></th>
									</tr>
								</thead>
								<tbody>
                                    @php

                                           $cart = session()->get('cart', []);
                                                            $total = 0;
                                                        @endphp
                                                     @foreach ($cart as $key => $qty)
                                                     @php
                                                         $product = App\Models\Product::find($key);
                                                         $photo = explode(';', $product->photo);
                                                         $total += $product->price * $qty;
                                                     @endphp
                                    <tr data-id="{{ $key }}">
                                        <td class="thumb"> <img src="{{ asset('photos/produits/' . $photo[0]) }}" alt="{{$product->title}}"></td>
                                        <td class="details">
                                            <a href="{{ route('product-detail', Crypt::encrypt($product->id)) }}">{{$product->title}}</a>
                                            <ul>
                                                <li><span>Catégorie</span></li>

                                            </ul>
                                        </td>
                                        <td class="price text-center" data-price="{{$product->price}}"><strong>{{$product->price}}</strong></td>
                                        <td class="qty text-center"><input class="input" type="number" value="{{ $qty }}" id="qt"></td>
                                        <td class="total text-center"><strong class="primary-color"  data-total="">{{ $product->price * $qty }}</strong></td>
                                        <td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-close"></i></button></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="empty" colspan="3"></th>
                                        <th>SUBTOTAL</th>
                                        <th colspan="2" class="sub-total">{{ session()->get('total') }} XOF</th>
                                    </tr>
                                    <tr>
                                        <th class="empty" colspan="3"></th>
                                        <th>LIVRAISON</th>
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <th class="empty" colspan="3"></th>
                                        <th>TOTAL</th>
                                        <th colspan="2" class="total">{{ session()->get('total') }} XOF</th>
                                    </tr>
                                </tfoot>
							</table>
							<div class="pull-right">
								<button class="primary-btn">Place Order</button>
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
