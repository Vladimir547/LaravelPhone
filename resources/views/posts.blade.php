@extends('layouts.base')
@section('content')
<section class='product'>
    <div class='container'>
        <div class='row'>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                @if(empty($category -> name))
                    <h2>catalog</h2>
                @else
                    <h2>{{$category -> name}}</h2>
                @endif
                @foreach($objs as $one)
                @include('templates.product', ['brands'=>$brands])
                @endforeach
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class='filter__wrapper'>

                    @include($vi)
                </div>
                <div class="pagination">
                    {!! $objs->links() !!}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection