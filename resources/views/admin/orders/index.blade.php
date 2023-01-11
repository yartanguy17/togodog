@extends('admin.layouts.app')
@section('content')
<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Liste des Commandes</h5>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>

                                <th>Clients</th>
                                <th>téléphone</th>
                                <th>Email</th>
                                <th>Réfference</th>
                                <th>Quantité</th>
                                <th>Prix</th>
                                <th>Date</th>
                                <th>Action</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)

                            <tr>
                                <td>{{ isset($order->user_id )?$order->user['last_name'] : " "}}</td>
                                <td>{{ $order->phone }}</td>
                                <td>{{ isset($order->user_id )?$order->user['email'] : " "}}</td>
                                <td>{{ $order->order_number }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td>{{ $order->total_amount }} XOF</td>
                                <td>{{ $order->created_at }}</td>
                                <td>
                                    <a type="button" data-toggle="modal" data-target="#loginModal{{ $order->id }}">
                                        <i class="fa fa-eye" aria-hidden="true" style="font-size:25px;color:rgba(28, 139, 6, 0.72)"></i>

                                    </a>
                                    <a href="#">
                                        <i class="fa fa-edit" style="font-size:20px;color:blue"></i>

                                    </a>
                                    <a href="#">
                                        <i class="fa fa-trash" style="font-size:22px;color:red"></i>

                                    </a>
                                </td>

                            </tr>


                            @endforeach


                        </tbody>
                        <tfoot>
                            <tr>

                                <th>Clients</th>
                                <th>téléphone</th>
                                <th>Email</th>
                                <th>Quantité</th>
                                <th>Prix</th>
                                <th>Date</th>
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


@php
    $orders=DB::table('orders')->get();
@endphp
@foreach ( $orders as $order )
<div class="modal fade" id="loginModal{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        @php
            $order_items = Helper::orderItem($order->id);
            // dd($order_item);
        @endphp
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail de la commande</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="table-content table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">Images</th>
                                <th class="cart-product-name">Produits</th>
                                <th class="product-price">Prix unitaire</th>
                                <th class="product-quantity">Quantité</th>
                                <th class="product-subtotal">Total</th>
                                {{-- <th class="product-remove">Suprimer</th> --}}
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ( $order_items as $key => $order_item)



                                <tr class="cart-item">
                                    <td class="product-thumbnail"><a href="#">
                                        <img src="{{ asset('photos/produits/' . explode(';', $order_item->itemByProduct->photo)[0]) }}"
                                                alt="" style="height:100px;width:50px;"></a></td>
                                    <td class="product-name"><a
                                            href="#">{{ $order_item->itemByProduct->title }}</a></td>
                                    <td class="product-price">
                                        {{ $order_item->itemByProduct->price - ($order_item->itemByProduct->price * $order_item->itemByProduct->discount) / 100 }} XOF
                                    </td>
                                    <td class="product-quantity">
                                        {{ $order_item->quantity }}
                                    </td>
                                    <td class="product-subtotal">
                                        {{$order_item->amount}} XOF
                                    </td>

                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>



            </div>
        </div>

    </div>
</div>
@endforeach

@endsection
