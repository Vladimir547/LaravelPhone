@extends('layouts.base')
@section('scripts')
    @parent
    <script src="{{asset('js/order.js')}}"></script>
@endsection
@section('content')
<section class="one__item">
    <div class="container">
        <div class = 'row'>
                <div class="one__wrapper">
                    <div class="one__img">
                        <img src="{{asset($objs->img)}}">
                    </div>
                    <div class="one__discription">
                        <h2>Name: {{$objs->name}}</h2>
                        <p><strong>Discription:</strong> {{$objs->description}}</p>
                        <p><strong>Price: </strong>{{$objs->price}}</p>
                        <a href='#' id="good-{{$objs->id}}-{{$objs->price}}" class="addCart"><i class="fas fa-shopping-cart"></i> add to cart</a>
                    </div>
                </div>
        </div>
    </div>
</section>

@endsection