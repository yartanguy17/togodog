@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="section-block" id="basicform">
            <h3 class="section-title">Ajouter une Banniére</h3>

        </div>
        <div class="card">
            <h5 class="card-header">Ajouter une Banniére</h5>
            <div class="card-body">
                <form method="POST" action="{{ route('add.banner') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">Nom</label>
                        <input id="inputText3" type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">Photo</label>
                        {{-- <input id="inputText3" type="file" class="form-control" name="photo"> --}}
                        <input type="file" name="photo" class="myfrm form-control">
                    </div>

                    <div class="form-group">
                        <label for="inputPassword">Status</label>
                        <select class="form-control" name="status">
                           <option>Selectionner</option>
                           <option value="active">Activé</option>
                           <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <button type="reset" class="btn btn-warning">Réinitialiser</button>

                        <button class="btn btn-success" type="submit">Soumettre</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
