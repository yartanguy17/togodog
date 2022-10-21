 @extends('admin.layouts.app')
 @section('content')
 <div class="row">
     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
         <div class="section-block" id="basicform">
             <h3 class="section-title">Ajouter utilisateur</h3>

         </div>
         <div class="card">
             <h5 class="card-header">Ajouter un utilisateur</h5>
             <div class="card-body">
                 <form>
                     <div class="form-group">
                         <label for="inputText3" class="col-form-label">Nom</label>
                         <input id="inputText3" type="text" class="form-control">
                     </div>
                     <div class="form-group">
                        <label for="inputText4" class="col-form-label">N° telephone</label>
                        <input id="inputText4" type="text" class="form-control" placeholder="Numbers">
                    </div>
                     <div class="form-group">
                         <label for="inputEmail"> Addresse Email</label>
                         <input id="inputEmail" type="email" placeholder="name@example.com" class="form-control">

                     </div>

                     <div class="form-group">
                         <label for="inputPassword">Mot de passe</label>
                         <input id="inputPassword" type="password" placeholder="Password" class="form-control">
                     </div>
                     <div class="form-group">
                         <label for="inputPassword">Status</label>
                         <select class="form-control">
                            <option>Selectionner</option>
                            <option value="1">Activé</option>
                            <option value="0">Désactivé</option>
                         </select>
                     </div>
                     {{-- <div class="custom-file mb-3">
                         <input type="file" class="custom-file-input" id="customFile">
                         <label class="custom-file-label" for="customFile">File Input</label>
                     </div> --}}
                     {{-- <div class="form-group">
                         <label for="exampleFormControlTextarea1">Example textarea</label>
                         <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                     </div> --}}
                 </form>
             </div>

         </div>
     </div>
 </div>
 @endsection
