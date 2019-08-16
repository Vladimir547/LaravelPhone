
@extends('layouts.base')
@section('scripts')
    @parent
    <script src="{{asset('js/order.js')}}"></script>
@endsection
@section('content')
    @foreach($arr as $one)
        <div class="">
            <br />
            @foreach($arr[$one['order']->id] as $prod)
                <p style="color: green;">{{$prod->name}}, {{$prod->id}}

                </p>

            @endforeach
            @foreach($arr_count[$one['order']->id] as $coun)
                <p style="color: red;"> {{$coun}}</p>

            @endforeach

        </div>
        <hr />
    @endforeach
@endsection