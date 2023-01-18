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
                <form method="POST" action="{{ route('store.food') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">Nom <span class="text-danger">*</span></label>
                        <input id="inputText3" type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                       <label for="inputText4" class="col-form-label">Litre  </label>
                       <input id="inputText4" type="number" class="form-control" placeholder="Prix" name="litre">
                   </div>
                    <div class="form-group">
                       <label for="inputText4" class="col-form-label">Poids  </label>
                       <input id="inputText4" type="number" class="form-control" placeholder="Prix" name="poids">
                   </div>
                    <div class="form-group">
                       <label for="inputText4" class="col-form-label">Prix <span class="text-danger">*</span> </label>
                       <input id="inputText4" type="number" class="form-control" placeholder="Prix" name="price">
                   </div>
                    <div class="form-group">
                       <label for="inputText4" class="col-form-label">Nombres <span class="text-danger">*</span> </label>
                       <input id="inputText4" type="number" class="form-control" placeholder="Nombre" name="stock">
                   </div>
                    <div class="form-group">
                        <label for="inputEmail">Description</label> <span class="text-danger">*</span>
                        <textarea type="text" class="form-control" name="summary">

                        </textarea>


                    </div>
                    <div class="custom-file mb-3">
                        <label class="custom-file-label" for="customFile">Photo <span class="text-danger">*</span></label>
                        <input type="file" class="custom-file-input" id="customFile" name="photo[]" multiple>

                    </div>

                    <div class="form-group">
                        <label for="inputPassword">Status</label> <span class="text-danger">*</span>
                        <select class="form-control" name="status">
                           <option>Selectionner</option>
                           <option value="active">Active</option>
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
