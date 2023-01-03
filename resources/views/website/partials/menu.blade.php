<div id="header">
    <div class="container">
        <div class="pull-left">
            <!-- Logo -->
            <div class="header-logo">
                <a class="logo" href="#">
                    <img src="{{ asset('website/assets/img/logo.jpg') }}" alt="" style="height:100px;width:100px;">
                </a>
            </div>
            <!-- /Logo -->

            <!-- Search -->
            <div class="header-search">
                <form>
                    <input class="input search-input" type="text" placeholder="Recherche">
                    <select class="input search-categories">
                        <option value="0">Toutes les Categories</option>
                       
                    </select>
                    <button class="search-btn"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <!-- /Search -->
        </div>
        <div class="pull-right">
            <ul class="header-btns">
                <!-- Account -->
                {{-- <li class="header-account dropdown default-dropdown">
                    <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                        <div class="header-btns-icon">
                            <i class="fa fa-user-o"></i>
                        </div>
                        <strong class="text-uppercase">Mon compte <i class="fa fa-caret-down"></i></strong>
                    </div>
                    <a href="#" class="text-uppercase">Connexion</a> / <a href="#" class="text-uppercase">Join</a>
                     <ul class="custom-menu">
                        <li><a href="#"><i class="fa fa-user-o"></i> Mon compte</a></li>
                        <li><a href="#"><i class="fa fa-heart-o"></i>Reservation</a></li>
                        <li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
                        <li><a href="#"><i class="fa fa-check"></i> Commande</a></li>
                        <li><a href="#"><i class="fa fa-unlock-alt"></i>Connexion</a></li>
                        <li><a href="#"><i class="fa fa-user-plus"></i> Inscription</a></li>
                    </ul>
                </li> 0lo8r2PGA* --}}
                <!-- /Account -->

                <!-- Cart -->
                <li class="header-cart dropdown default-dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                        <div class="header-btns-icon">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="qty">{{ array_sum(session()->get('cart', [])) }}</span>
                        </div>
                        <strong class="text-uppercase">Panier:</strong>
                        <br>
                        @if(empty(session()->get('total')))
                        <span>0 XOF</span>
                        @else
                        <span>{{ session()->get('total') }} XOF</span>
                        @endif
                    </a>
                    <div class="custom-menu">
                        <div id="shopping-cart">
                            <div class="shopping-cart-list">

                                @php

                                $total = 0;
                                $cart = session()->get('cart', []);

                                // dd($cart);

                                @endphp
                                @foreach ($cart as $key => $qty)

                                dd($key);
                                @php
                                $product = App\Models\Product::find($key);
                                $photo = explode(';', $product->photo);
                                $total += $product->price * $qty;
                                @endphp

                                <div class="product product-widget">
                                    <div class="product-thumb">
                                        <img src="{{ asset('photos/produits/' . $photo[0]) }}" alt="{{$product->title}}">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-price">{{$product->price}} XOF<span class="qty">{{ $qty }} </span></h3>
                                        <h2 class="product-name"><a href="#">{{$product->title}}</a></h2>
                                    </div>
                                    <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                                </div>

                                @endforeach


                            </div>
                            <div class="shopping-cart-btns">
                                <a href="{{ route('view.panier') }}"><button class="main-btn">Voir le panier</button></a>
                                <a href=""></a><button class="primary-btn"> Commander <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- /Cart -->

                <!-- Mobile nav toggle-->
                <li class="nav-toggle">
                    <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                </li>
                <!-- / Mobile nav toggle -->
            </ul>
        </div>
    </div>
    <!-- header -->
</div>
