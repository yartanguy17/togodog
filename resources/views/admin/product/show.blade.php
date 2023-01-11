@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        @php
        $photo = explode(';', $product->photo);
    @endphp
        <div class="card">
            <h5 class="card-header">{{ $product->title }}</h5>
            <div class="card-body">


                    <div class="form-group">
                        <label for="inputPassword">Catégorie </label>

                        <input type="text" class="form-control" readonly value="{{ $product->cat_info->title }}">

                    </div>
                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">Nom </label>
                        <input id="inputText3" type="text" class="form-control" value="{{ $product->title }}" readonly>
                    </div>
                    <div class="form-group">
                       <label for="inputText4" class="col-form-label">Prix  </label>
                       <input id="inputText4" type="text" class="form-control"  value="{{ $product->price }} XOF" readonly>
                   </div>
                    <div class="form-group">
                       <label  class="col-form-label">Nombres </label>
                       <input  type="text" class="form-control"  value="{{ $product->stock }}" readonly >
                   </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea type="text" class="form-control" value="{{ $product->description }}" readonly>

                        </textarea>


                    </div>
                    <div class="custom-file mb-3">

                        <img src="{{asset('photos/produits/'.$photo[0])}}" class="img-fluid zoom" style="max-width:90px; height:70px;" alt="{{$photo[0]}}">


                    </div>






            </div>

        </div>
    </div>
</div>
@endsection
