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

                
                <div class="simple_page">
                    <div class="container ">
                        <div class="row">
        
                            <div class="user_elements_box">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Présentation</h4>
        
                                        <p>  !
                                        </p>
                                    </div>
        
                                    <div class="col-md-6">
                                        {{-- <img alt="" class=""
                                            src="
                                            {{ asset('assets/website/img/about_us.jpg') }}"> --}}
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-12">
                                <div class="card text-black mb-4">
                                    <div class="card-body">
                                        <h4 class="card-title">Nos valeurs</h4>
                                        <p class="card-text">
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-12">
                                <h4 class="card-title">Pourquoi choisir togodog ?</h4>
                               
        
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
