@extends('admin.layouts.app')
@section('content')
<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Liste des Utilisateurs</h5>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>Categorie</th>
                                <th>Nom</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="#"><i class="m-r-10 mdi mdi-eye">Voir</i></a>
                                    <a href="#"><i class="m-r-10 mdi mdi-feather">Editer</i></a>
                                    <a href="#"><i class="m-r-10 mdi mdi-delete">Supprimer</i></a>

                                </td>

                            </tr>

                        </tbody>
                        <tfoot>
                            <tr>

                                <th>Catégorie</th>
                                <th>Nom</th>

                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end basic table  -->
    <!-- ============================================================== -->
</div>
@endsection
