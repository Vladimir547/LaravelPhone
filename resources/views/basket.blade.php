@extends('layouts.base')
@section('content')
    <section class='order'>
        <div class="container">
            <div class="row">
                <table>
                 <tr>
                    <th>name</th>
                    <th>picture</th>
                    <th>price</th>
                    <th>count</th>
                    <th>summa</th>
                </tr>
                 @php
                    $itog = 0;
                 @endphp
                @foreach($cook_arr as $key => $value)
                    @php
                        $summa = $value->price * $cook_count[$value->id];
                        $itog +=$summa;
                    @endphp
                    <tr>
                        <td>{{$value->name}}</td>
                        <td><img src="{{asset($value->img)}}" width="30%"></td>
                        <td>{{$value->price}}</td>
                        <td>{{$cook_count[$value->id]}}</td>
                        <td>{{$summa}}</td>
                    </tr>
                @endforeach
                    <tr>
                        <td colspan="4">Итого:</td>
                         <td>{{$itog}}</td>
                    </tr>
                </table>

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
                    <input type="text" name="user__comment" id='user__comment' class="basket__form" value="" >
                    <input type="submit" name="sub__basket" value="send">
                </form>
            </div>
        </div>
    </section>
@endsection
