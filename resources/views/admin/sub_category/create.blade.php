@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="section-block" id="basicform">
            <h3 class="section-title">Ajouter une categorie</h3>

        </div>
        <div class="card">
            <h5 class="card-header">Ajouter une categorie</h5>
            <div class="card-body">
                <form>

                    <div class="form-group">
                        <label for="inputPassword">Catégorie</label>
                        <select class="form-control">
                           <option>Selectionner</option>
                           <option value="1">Nom categorie</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">Nom</label>
                        <input id="inputText3" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="inputPassword">Status</label>
                        <select class="form-control">
                           <option>Selectionner</option>
                           <option value="1">Activé</option>
                           <option value="0">Désactivé</option>
                        </select>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
@endsection
