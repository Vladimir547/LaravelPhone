@extends('layouts.base')
@section('scripts')
@parent
<script src="{{asset('')}}"></script>
@endsection
@section('content')

<section class="slide">
    <div class="container">
        <div class="row">
            <div class="headline">
                <img src="{{asset('img/headline.png')}}">
                <h1>born for sooting</h1>
            </div>
        </div>
    </div>
</section>
<section class='site__info'>
    <div class="container">
        <div class='row'>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info__items">
                    <div class="info__icon">
                        <i class="far fa-paper-plane"></i>
                    </div>
                    <div class='info__text'>
                        <h4>first shipping</h4>
                        <p>get you every where</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info__items">
                    <div class="info__icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class='info__text'>
                        <h4>secure store</h4>
                        <p>100% secure store</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info__items">
                    <div class="info__icon">
                        <i class="far fa-clock"></i>
                    </div>
                    <div class='info__text'>
                        <h4>save time</h4>
                        <p>save your time</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info__items">
                    <div class="info__icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class='info__text'>
                        <h4>pay on delivery</h4>
                        <p>get you every where</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class='product'>
    <div class='container'>
        <div class='row'>
            <div class='product__nav'>
                <ul class='product__menu'>
                    <li><a href='#'>featured</a></li>
                    <li><a href='#'>new item</a></li>
                    <li><a href='#'>top seller</a></li>
                    <li><a href='#'>top ratting</a></li>
                </ul>
            </div>
            @foreach($objs as $one)
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class='product__wrapper'>
                    <div class="product__item">
                        <div class='product__img'>
                            <img src="{{$one->img}}">
                        </div>
                        <div class='product__tools'>
                            <div class='product__headline'>
                                <h4>{{$one->name}}</h4>
                            </div>
                            <div class='product__price'>
                                <p>{!!$one->price!!}</p>
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
    </div>      
    <section class="offer">
        <div class="container">
            <div class="row">
                <div class="offer__wrapper">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="offer__align">
                            <div class="circle__offer">
                                <h3 class="offer__discount">$2300</h3>
                                <h3>$1150</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="offer__text">
                            <h2><span>50% off</span></h2>
                            <h3>var walton primo gh+</h3>
                            <h4>Power packed performance</h4>
                            <p>Powered by a mighty 1.3 GHz Quad Core Processor and1 GB fast RAM, the Primo GH+ allows
                                seamless multitasking, faster webpage loading, smoother UI transitions and ultra
                                fast power-up.</p>
                            <div class='countdown__wrapper'>
                                <div class="countdown">
                                    <div class='time__count'>
                                        <h3>23</h3>
                                        <p>days</p>
                                    </div>
                                    <div class='time__count'>
                                        <h3>10</h3>
                                        <p>hours</p>
                                    </div>
                                    <div class='time__count'>
                                        <h3>50</h3>
                                        <p>minutes</p>
                                    </div>
                                    <div class='time__count'>
                                        <h3>55</h3>
                                        <p>seconds</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="subscribe__wraper">
                        <div class="subscribe__text">
                            <h2>subcribe for get offer update</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="subscribe__form">
                            <form action="" method="POST">
                                <input type="email" class='email' name='mail' value='' placeholder="Type your email">
                                <input type="submit" class='btn__email' name='sub__email' value='Lets go!'>
                            </form>
                        </div>
                    </div>
                </div>
                </diw>
            </div>
    </section>
    <section class='product'>
        <div class='container'>
            <div class='row'>
                <div class='product__nav'>
                    <ul class='product__menu'>
                        <li><a href='#'>laptop</a></li>
                    </ul>
                </div>
                @foreach($objs as $one)
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class='product__wrapper'>
                        <div class="product__item">
                            <div class='product__img'>
                                <img src="{{$one->img}}">
                            </div>
                            <div class='product__tools'>
                                <div class='product__headline'>
                                    <h4>{{$one->name}}</h4>
                                </div>
                                <div class='product__price'>
                                    <p>{!!$one->price!!}</p>
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
        </div>
    </section>
    <section class='product'>
        <div class='container'>
            <div class='row'>
                <div class='product__nav'>
                    <ul class='product__menu'>
                        <li><a href='#'>desktop</a></li>
                    </ul>
                </div>
                @foreach($objs as $one)
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class='product__wrapper'>
                        <div class="product__item">
                            <div class='product__img'>
                                <a href="#"><img src="{{$one->img}}"></a>
                            </div>
                            <div class='product__tools'>
                                <div class='product__headline'>
                                    <h4><a href="#">{{$one->name}}</a></h4>
                                </div>
                                <div class='product__price'>
                                    <p>{!!$one->price!!}</p>
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
        </div>
    </section>
    <section class="brand">

    </section>]
    @endsection
