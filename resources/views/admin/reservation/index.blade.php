@extends('admin.layouts.app')
@section('content')
<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Liste des Reservation de toilettage</h5>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Télèphone</th>
                                <th>Adresse</th>
                                <th>Nbr de chiens </th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($reservations as $reservation)

                            <td>{{ $reservation->first_name }}</td>
                                <td>{{ $reservation->tel }}</td>
                                <td>{{ $reservation->address }}</td>
                                <td>{{ $reservation->quantity }}</td>

                                <td>
                                    <a href="#"><i class="m-r-10 mdi mdi-eye">Voir</i></a>
                                    <a href="#"><i class="m-r-10 mdi mdi-feather">Editer</i></a>
                                    <a href="#"><i class="m-r-10 mdi mdi-delete">Supprimer</i></a>

                                </td>

                            @endforeach




                        </tbody>
                        <tfoot>
                            <tr>

                                <th>Nom</th>
                                <th>Télèphone</th>
                                <th>Adresse</th>
                                <th>Nbr de chiens </th>
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
