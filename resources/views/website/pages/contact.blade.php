@extends('website.layout.app')

@section('content')
    <!-- BREADCRUMB -->
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">Accueil</a></li>
                <li class="active">Contact</li>
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
                <!-- ASIDE -->
                <div id="aside" class="col-md-3">
                    <!-- aside widget -->
                    {{-- <div class="aside">
                    <h3 class="aside-title">Shop by:</h3>
                    <ul class="filter-list">
                        <li><span class="text-uppercase">color:</span></li>
                        <li><a href="#" style="color:#FFF; background-color:#8A2454;">Camelot</a></li>
                        <li><a href="#" style="color:#FFF; background-color:#475984;">East Bay</a></li>
                        <li><a href="#" style="color:#FFF; background-color:#BF6989;">Tapestry</a></li>
                        <li><a href="#" style="color:#FFF; background-color:#9A54D8;">Medium Purple</a></li>
                    </ul>

                    <ul class="filter-list">
                        <li><span class="text-uppercase">Size:</span></li>
                        <li><a href="#">X</a></li>
                        <li><a href="#">XL</a></li>
                    </ul>

                    <ul class="filter-list">
                        <li><span class="text-uppercase">Price:</span></li>
                        <li><a href="#">MIN: $20.00</a></li>
                        <li><a href="#">MAX: $120.00</a></li>
                    </ul>

                    <ul class="filter-list">
                        <li><span class="text-uppercase">Gender:</span></li>
                        <li><a href="#">Men</a></li>
                    </ul>

                    <button class="primary-btn">Clear All</button>
                </div> --}}
                    <!-- /aside widget -->

                    <!-- aside widget -->
                    {{-- <div class="aside">
                    <h3 class="aside-title">Filter by Price</h3>
                    <div id="price-slider"></div>
                </div> --}}
                    <!-- aside widget -->

                    <!-- aside widget -->
                    {{-- <div class="aside">
                    <h3 class="aside-title">Filter By Color:</h3>
                    <ul class="color-option">
                        <li><a href="#" style="background-color:#475984;"></a></li>
                        <li><a href="#" style="background-color:#8A2454;"></a></li>
                        <li class="active"><a href="#" style="background-color:#BF6989;"></a></li>
                        <li><a href="#" style="background-color:#9A54D8;"></a></li>
                        <li><a href="#" style="background-color:#675F52;"></a></li>
                        <li><a href="#" style="background-color:#050505;"></a></li>
                        <li><a href="#" style="background-color:#D5B47B;"></a></li>
                    </ul>
                </div> --}}
                    <!-- /aside widget -->

                    <!-- aside widget -->
                    {{-- <div class="aside">
                    <h3 class="aside-title">Filter By Ages:</h3>
                    <ul class="size-option">
                        <li class="active"><a href="#">6 weeks - 12 weeks</a></li>
                        <li class="active"><a href="#">14 weeks 24 weeks</a></li>
                        <li><a href="#">24 weeks ...</a></li>
                    </ul>
                </div> --}}
                    <!-- /aside widget -->

                    <!-- aside widget -->
                    {{-- <div class="aside">
                    <h3 class="aside-title">Filter by Brand</h3>
                    <ul class="list-links">
                        <li><a href="#">Nike</a></li>
                        <li><a href="#">Adidas</a></li>
                        <li><a href="#">Polo</a></li>
                        <li><a href="#">Lacost</a></li>
                    </ul>
                </div> --}}
                    <!-- /aside widget -->

                    <!-- aside widget -->
                    {{-- <div class="aside">
                    <h3 class="aside-title">Filter by Gender</h3>
                    <ul class="list-links">
                        <li class="active"><a href="#">Men</a></li>
                        <li><a href="#">Women</a></li>
                    </ul>
                </div> --}}
                    <!-- /aside widget -->

                    <!-- aside widget -->

                    <!-- /aside widget -->
                </div>
                <!-- /ASIDE -->

                <!-- MAIN -->
                <div id="main" class="col-md-9">
                    <!-- store top filter -->
                    {{-- <div class="store-filter clearfix">
                    <div class="pull-left">
                        <div class="row-filter">
                            <a href="#"><i class="fa fa-th-large"></i></a>
                            <a href="#" class="active"><i class="fa fa-bars"></i></a>
                        </div>
                        <div class="sort-filter">
                            <span class="text-uppercase">Sort By:</span>
                            <select class="input">
                                    <option value="0">Position</option>
                                    <option value="0">Price</option>
                                    <option value="0">Rating</option>
                                </select>
                            <a href="#" class="main-btn icon-btn"><i class="fa fa-arrow-down"></i></a>
                        </div>
                    </div>
                    <div class="pull-right">
                        <div class="page-filter">
                            <span class="text-uppercase">Show:</span>
                            <select class="input">
                                    <option value="0">10</option>
                                    <option value="1">20</option>
                                    <option value="2">30</option>
                                </select>
                        </div>
                        <ul class="store-pages">
                            <li><span class="text-uppercase">Page:</span></li>
                            <li class="active">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
                        </ul>
                    </div>
                </div> --}}
                    <!-- /store top filter -->


                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class=" contact_us">
                                    <div class="row">
                                        <div class="col-md-12 coll-lg-6">
                                            <div>
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6287162431454!2d1.3842807147689324!3d6.180424595525592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7edfced89104de8a!2zNsKwMTAnNDkuNSJOIDHCsDIzJzExLjMiRQ!5e0!3m2!1sfr!2stg!4v1673677223050!5m2!1sfr!2stg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                                    </iframe>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row ">
                                        <div class="col-md-12 col-lg-6 ">
                                            <div class="newslatter_outer">
                                                <div>
                                                    <h5>Adresse:</h5>
                                                    <ul>
                                                        {{-- <li><i class="fas fa-map-marker-alt"></i>
                                                            
                                                        </li> --}}
                                                        {{-- <li>
                                                            B.P. 14547
                                                        </li> --}}
                                                        <li><a href="tel:#"><i class="fas fa-phone"></i> +228 98626159 ( call & WhatsApp)
                                                            90723519</a></li>
                                                        <li><a href="tel:#"><i class="fas fa-envelope"></i>
                                                            togocatdog@gmail.com</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <form class="newsletter" action="" method="POST">
                                                @csrf
                                                <h5>Newsletter</h5>
                                                <div class="d-flex">
                                                    <input class="form-control" type="email">
                                                    <input class="btn btn-primary" type="submit" value="Souscrire">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-12 col-lg-6">
                                            <div class="only-form-box">
                                               
                                                <form action="" method="POST">
                                                    @csrf
                                                    <div class="com_class_form">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="name"
                                                                size="40" placeholder="Nom">
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="firstname"
                                                                size="40" placeholder="Prénom(s)">
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="email" name="email"
                                                                placeholder="E-mail">
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="phone_number"
                                                                size="40" placeholder="Téléphone">
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="subject"
                                                                placeholder="Sujet">
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="message" cols="40" rows="3" placeholder="Message"></textarea>
                                                        </div>
                                                        {{-- <div class="form-group">
                                                        {!! app('captcha')->display() !!}
                                                        @if ($errors->has('g-recaptcha-response'))
                                                            <span class="help-block text-danger">
                                                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div> --}}
                                                        <div class="form-group">
                                                            <input class="btn btn-primary" type="submit" value="Envoyer">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- store bottom filter -->
                    {{-- <div class="store-filter clearfix">
                    <div class="pull-left">
                        <div class="row-filter">
                            <a href="#"><i class="fa fa-th-large"></i></a>
                            <a href="#" class="active"><i class="fa fa-bars"></i></a>
                        </div>
                        <div class="sort-filter">
                            <span class="text-uppercase">Sort By:</span>
                            <select class="input">
                                    <option value="0">Position</option>
                                    <option value="0">Price</option>
                                    <option value="0">Rating</option>
                                </select>
                            <a href="#" class="main-btn icon-btn"><i class="fa fa-arrow-down"></i></a>
                        </div>
                    </div>
                    <div class="pull-right">
                        <div class="page-filter">
                            <span class="text-uppercase">Show:</span>
                            <select class="input">
                                    <option value="0">10</option>
                                    <option value="1">20</option>
                                    <option value="2">30</option>
                                </select>
                        </div>
                        <ul class="store-pages">
                            <li><span class="text-uppercase">Page:</span></li>
                            <li class="active">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
                        </ul>
                    </div>
                </div> --}}
                    <!-- /store bottom filter -->
                </div>
                <!-- /MAIN -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
@endsection
