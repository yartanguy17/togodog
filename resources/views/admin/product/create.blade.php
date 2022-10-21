@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="section-block" id="basicform">
            <h3 class="section-title">Ajouter article</h3>

        </div>
        <div class="card">
            <h5 class="card-header">Ajouter un article</h5>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="inputPassword">Catégorie <span class="text-danger">*</span></label>
                        <select class="form-control">
                           <option>Selectionner</option>
                           <option value="" name="cat_id"></option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">Nom <span class="text-danger">*</span></label>
                        <input id="inputText3" type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                       <label for="inputText4" class="col-form-label">Prix <span class="text-danger">*</span> </label>
                       <input id="inputText4" type="number" class="form-control" placeholder="Prix" name="price">
                   </div>
                    <div class="form-group">
                        <label for="inputEmail">Description</label>
                        <input id="inputEmail" type="text" placeholder="Description" class="form-control">

                    </div>
                    <div class="custom-file mb-3">
                        <label class="custom-file-label" for="customFile">Photo <span class="text-danger">*</span></label>
                        <input type="file" class="custom-file-input" id="customFile" name="photo[]" multiple>

                    </div>

                    <div class="form-group">
                        <label for="inputPassword">Status</label>
                        <select class="form-control">
                           <option>Selectionner</option>
                           <option value="1">Activé</option>
                           <option value="0">Désactivé</option>
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
