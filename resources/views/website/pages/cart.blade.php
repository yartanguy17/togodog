@extends('website.layout.app')

@section('content')

<div class="col-md-12">
    <div class="order-summary clearfix">
        <div class="section-title">
            <h3 class="title">Order Review</h3>
        </div>
        <table class="shopping-cart-table table">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th></th>
                    <th class="text-center">Prix</th>
                    <th class="text-center">Quantite</th>
                    <th class="text-center">Total</th>
                    <th class="text-right"></th>
                </tr>
            </thead>
            <tbody>
                @php

                       $cart = session()->get('cart', []);
                                        $total = 0;
                                    @endphp
                                 @foreach ($cart as $key => $qty)
                                 @php
                                     $product = App\Models\Product::find($key);
                                     $photo = explode(';', $product->photo);
                                     $total += $product->price * $qty;
                                 @endphp
                <tr data-id="{{ $key }}">
                    <td class="thumb"> <img src="{{ asset('photos/produits/' . $photo[0]) }}" alt="{{$product->title}}"></td>
                    <td class="details">
                        <a href="{{ route('product-detail', Crypt::encrypt($product->id)) }}">{{$product->title}}</a>
                        <ul>
                            <li><span>Catégorie</span></li>

                        </ul>
                    </td>
                    <td class="price text-center" data-price="{{$product->price}}"><strong>{{$product->price}}</strong></td>
                    <td class="qty text-center"><input class="input" type="number" value="{{ $qty }}" id="qt"></td>
                    <td class="total text-center"><strong class="primary-color"  data-total="">{{ $product->price * $qty }}</strong></td>
                    <td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-close"></i></button></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th class="empty" colspan="3"></th>
                    <th>SUBTOTAL</th>
                    <th colspan="2" class="sub-total">{{ session()->get('total') }} XOF</th>
                </tr>
                <tr>
                    <th class="empty" colspan="3"></th>
                    <th>LIVRAISON</th>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <th class="empty" colspan="3"></th>
                    <th>TOTAL</th>
                    <th colspan="2" class="total">{{ session()->get('total') }} XOF</th>
                </tr>
            </tfoot>
        </table>
        <div class="pull-right">
            <button class="primary-btn">Passer la commande</button>
        </div>
    </div>

</div>

@endsection


<script>
    $(document).ready(function() {


        const cart_data = $('[name="cart_data"]');


        $('.cart-plus-minus .dec').each(function() {

            const __THIS = $(this);

            const parent = __THIS.closest('tr');

            $(this).on('click', function() {
                // console.log('test',parent.find('.input-number').val());
                updteBtn(parent);
                calcalted_total();
            })

        })

        $('.cart-plus-minus .inc').each(function() {

            const __THIS = $(this);

            const parent = __THIS.closest('tr');

            $(this).on('click', function() {
                // console.log('test',parent.find('.input-number').val());
                updteBtn(parent);
                calcalted_total();
            })

        })


        const calcalted_total = () => {

            // const total = 0;
            let d = 0;
            $('[data-total]').each(function() {

                console.log('total subtotal', parseInt($(this).text()));
                // total += parseInt($(this).text())
                d +=parseInt($(this).text())
            })

            // console.log('total subtotal hors',  d);

            $('.net').text(d)

        }


        function updteBtn(parent) {

            const prix_unit = parseInt(parent.find('[data-price]').data('price'));

            const quantity = parseInt(parent.find('.cart-plus-minus input').val());

            console.log('prix u',prix_unit);
            console.log('quantityx',quantity);

            const totals = prix_unit * quantity;

            console.log('totals indiv',totals);

            parent.find('.product-subtotal').text(totals);
        }


        $('#btnCheckout').on('click', function(e) {
            e.preventDefault();

            // alert(5)

            const data = [];

            $('.cart-item').each(function() {
                const __THIS = $(this);

                const item_id = __THIS.data('id');
                const item_qty = __THIS.find('.cart-plus-minus input').val();

                // console.log("item id : ", item_id);
                // console.log("item qty : ", item_qty);

                data.push({
                    'id': item_id,
                    'qty': item_qty
                });
                // alert('ata',data);
            });

            cart_data.val(JSON.stringify(data));

            console.log("data : ", data);
            console.log("cart_data : ", cart_data);

            // localStorage.setItem("cart",cart_data);

            $(this).closest('form').submit();

        })






        calcalted_total();




    });
</script>
