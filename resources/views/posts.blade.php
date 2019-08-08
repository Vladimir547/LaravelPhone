@extends('layouts.base')
@section('content')
<section class='product'>
    <div class='container'>
        <div class='row'>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                @foreach($objs as $one)
                @include('templates.product')
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