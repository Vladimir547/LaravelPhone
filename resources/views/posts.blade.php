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
                                <img src="{{$one->Img}}">
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
                    <div class='fiter__menu'>
                        <div class='filter__text'></div>
                        <div class='filter'>
                            <ul class='filter__items'>
                                <li><a href='#'>SMART PHONE</a></li>
                                <li><a href='#'>DESKTOP</a></li>
                                <li><a href='#'>LAPTOP</a></li>
                                <li><a href='#'>ACCESSORIES</a></li>
                                <li><a href='#'>NETWORKING</a></li>
                                <li><a href='#'>SOFTWARE</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class='fiter__menu'>
                        <div class='filter__text'></div>
                        <div class='filter'>
                            <ul class='filter__items'>
                                <li><a href='#'>$1000 - $2000</a></li>
                                <li><a href='#'>$2000 - $3000</a></li>
                                <li><a href='#'>$3000 - $4000</a></li>
                                <li><a href='#'>$4000 - $5000</a></li>
                                <li><a href='#'>$5000 - $6000</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class='fiter__menu'>
                        <div class='filter__text'></div>
                        <div class='filter'>
                            <ul class='filter__items'>
                                <li><label for="hp">HP  </label><input type="checkbox" name="hp" id='hp' value=''></li>
                                <li><label for="dell">DELL  </label><input type="checkbox" name="dell" id='hp' value=''></li>
                                <li><label for="apple">APPLE  </label><input type="checkbox" name="apple" id='hp' value=''></li>
                                <li><label for="asus">ASUS  </label><input type="checkbox" name="asus" id='hp' value=''></li>
                                <li><label for="sumsumg">SUMSUMG  </label><input type="checkbox" name="sumsumg" id='hp' value=''></li>
                                <li><label for="toshiba">TOSHIBA  </label><input type="checkbox" name="toshiba" id='hp' value=''></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection