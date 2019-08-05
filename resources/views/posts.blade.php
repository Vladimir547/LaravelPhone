@extends('layouts.base')
@section('content')
<section class='product'>
    <div class='container'>
        <div class='row'>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                @foreach($objs as $one)
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class='product__wrapper'>
                        <div class="product__item">
                            <div class='product__img'>
                                <img src="{{asset($one->Img)}}">
                            </div>
                            <div class='product__tools'>
                                <div class='product__headline'>
                                    <h4>{{$one->Name}}</h4>
                                </div>
                                <div class='product__price'>
                                    <p>{!!$one->Price!!}</p>
                                </div>
                                <div class='product__stars'>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class='product__cart__hide'>
                                    <div class='product__order'>
                                        <div class='product__cart'>
                                            <a href='#'><i class="fas fa-shopping-cart"></i> add to cart</a>
                                        </div>
                                        <div class='buy__items white'>
                                            <a href="#"><i class="far fa-edit"></i></a>
                                        </div>
                                        <div class='buy__items white'>
                                            <a href="#"><i class="fas fa-arrows-alt-h"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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