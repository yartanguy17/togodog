<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Tableau de bord</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Tableau de bord <span class="badge badge-success">6</span></a>
                        <div id="submenu-1" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-4-1">Bannier</a>
                                    <div id="submenu-1-1" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('create.banner') }}">Ajouter</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('banner') }}"> <i class="m-r-10 mdi mdi-format-list-bulleted"></i> Liste des bannier</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2"><i class="m-r-10 mdi mdi-account-multiple"></i>Clients</a>
                                    <div id="submenu-1-2" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('adduser') }}"> <i class="m-r-10 mdi mdi-account-plus"></i> Ajouter</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('user') }}"> <i class="m-r-10 mdi mdi-format-list-bulleted"></i> Liste des utilisateurs</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="dashboard-finance.html">Finance</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="dashboard-sales.html">Sales</a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-6" aria-controls="submenu-1-1">Catègories</a>
                                    <div id="submenu-1-6" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('addcategory') }}">Ajouter</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('category') }}"> <i class="m-r-10 mdi mdi-format-list-bulleted"></i> Liste des catègories</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-7" aria-controls="submenu-1-7">Sous-catègories</a>
                                    <div id="submenu-1-7" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('addsubcategory') }}">Ajouter</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('subcategory') }}"> <i class="m-r-10 mdi mdi-format-list-bulleted"></i> Liste des sous-catègories</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-4" aria-controls="submenu-1-4">Article</a>
                                    <div id="submenu-1-4" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('addproduct') }}">Ajouter Chien</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('products') }}"> <i class="m-r-10 mdi mdi-format-list-bulleted"></i>Liste des chiens</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('create.food') }}">Ajouter Article</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('get.food') }}"> <i class="m-r-10 mdi mdi-format-list-bulleted"></i>Liste des articles</a>
                                            </li>
                                            {{-- <li class="nav-item">
                                                <a class="nav-link" href="influencer-profile.html"> <i class="m-r-10 mdi mdi-format-list-bulleted"></i> Influencer Profile</a>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-45" aria-controls="submenu-1-45">Article vidèo</a>
                                    <div id="submenu-1-45" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('get.video.upload') }}">Ajouter</a>
                                            </li>

                                            {{-- <li class="nav-item">
                                                <a class="nav-link" href="{{ route('products') }}"> <i class="m-r-10 mdi mdi-format-list-bulleted"></i>Liste des article</a>
                                            </li> --}}
                                            {{-- <li class="nav-item">
                                                <a class="nav-link" href="influencer-profile.html"> <i class="m-r-10 mdi mdi-format-list-bulleted"></i> Influencer Profile</a>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-3" aria-controls="submenu-1-3">Reservation</a>
                                    <div id="submenu-1-3" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('reservations') }}"> <i class="m-r-10 mdi mdi-format-list-bulleted"></i> Liste des reservation</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-78" aria-controls="submenu-1-78">Commandes</a>
                                    <div id="submenu-1-78" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('commande') }}"> <i class="m-r-10 mdi mdi-format-list-bulleted"></i> Liste des commandes</a>
                                            </li>
                                            <li class="nav-item">
                                                {{-- <a class="nav-link" href="dashboard-influencer.html"> <i class="m-r-10 mdi mdi-format-list-bulleted"></i> Liste des commandes effectuèes</a> --}}
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Paramètre</a>
                        <div id="submenu-4" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4-1" aria-controls="submenu-4-1">Bannier</a>
                                    <div id="submenu-4-1" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="dashboard-influencer.html">Ajouter</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="influencer-finder.html"> <i class="m-r-10 mdi mdi-format-list-bulleted"></i> Liste des bannier</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1">Profil</a>
                                    <div id="submenu-1-1" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="dashboard-influencer.html">Mon compte</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="influencer-finder.html">Changer mot de passe</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1">Reservation</a>
                                    <div id="submenu-1-1" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="dashboard-influencer.html">Liste des reservation</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1"><i class="m-r-10 mdi mdi-account-multiple"></i>Admin</a>
                                    <div id="submenu-1-1" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="dashboard-influencer.html"> <i class="m-r-10 mdi mdi-account-plus"></i> Ajouter</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="dashboard-influencer.html"> <i class="m-r-10 mdi mdi-format-list-bulleted"></i> Liste des admin</a>
                                            </li>


                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>



                </ul>
            </div>
        </nav>
    </div>
</div>
