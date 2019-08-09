
@extends('layouts.base')
@section('scripts')
@parent
    <script src="{{asset('js/order.js')}}"></script>
@endsection
@section('content')
<section class='order'>
    <div class="container">
        <div class="row">
            <div class='table'>
                <table>
                    <tr class="order_border">
                        <th class="order_border">name</th>
                        <th class="order_border">picture</th>
                        <th class="order_border">price</th>
                        <th class="order_border">count</th>
                        <th class="order_border">action</th>
                        <th class="order_border">summa</th>
                    </tr>
                    @php
                    $itog = 0;
                    @endphp
                    @foreach($cook_arr as $key => $value)
                    @php
                    $summa = $value->price * $cook_count[$value->id];
                    $itog +=$summa;
                    @endphp
                    <tr class="order_border">
                        <td class="order_border">{{$value->name}}</td>
                        <td class="order_border"><img src="{{asset($value->img)}}" width="30%"></td>
                        <td class="order_border"><span id="price_{{$value->id}}">{{$value->price}}</span></td>
                        <td class="order_border"><input type="number" name="count" class="count" id="count"  min=1 max=100 data-id="{{$value->id}}" value="{{$cook_count[$value->id]}}"></td>
                        <td class="order_border"><a href="{{asset('basket/delete/'.$value->id)}}" id="delete">Delete</a></td>
                        <td class="order_border"><span id="summa_{{$value->id}}" class="summa">{{$summa}}</span></td>
                    </tr>
                    @endforeach
                    <tr>
                        <td class="order_border" colspan="5">Итого:</td>
                        <td class="order_border"><span id="itog" class="itog">{{$itog}}</span></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
<section class="send">
    <div class="container">
        <div class="row">
            <form action="#" method="POST" class="form__send" >
                {!! csrf_field() !!}
                <label for="user__name">Your name: </label>
                <input type="text" name="user__name" id='user__name' class="basket__form" value="" required>
                <label for="user__name">Your phone: </label>
                <input type="text" name="user__phone" id='user__phone' class="basket__form" value="" required>
                <label for="user__name">Your address: </label>
                <input type="text" name="user__address" id='user__address' class="basket__form" value="" required>
                <label for="user__name">Your comment: </label>
                <textarea rows="10" cols="70" name="user__comment" id='user__comment' class="basket__form" value=""></textarea>
                <input type="submit" name="sub__basket" class='sub__form' value="send">
            </form>
        </div>
    </div>
</section>
@endsection
