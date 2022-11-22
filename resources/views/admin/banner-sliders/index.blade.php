@extends('admin.layouts.app')
@section('content')
<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Liste des Banniéres</h5>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Photo</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($banners as $banner)

                            <tr>
                                <td>{{ $banner->title }}</td>
                                <td>
                                    <img src="{{ asset('storage/banner/'.$banner->photo)}}" class="img-fluid zoom" style="max-width:100px" alt="{{$banner->photo}}">
                                </td>
                                <td>{{ $banner->status }}</td>

                                <td>
                                    <a href="#"><i class="m-r-10 mdi mdi-eye">Voir</i></a>
                                    <a href="#"><i class="m-r-10 mdi mdi-feather">Editer</i></a>
                                    <a href="#"><i class="m-r-10 mdi mdi-delete">Supprimer</i></a>

                                </td>

                            </tr>

                            @endforeach


                        </tbody>
                        <tfoot>
                            <tr>

                                <th>Nom</th>
                                <th>Photo</th>
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
