<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css"
          integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style/main.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('style/basket.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('style/filter.css')}}" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Laravel_project</title>
</head>

<body>
<header class='header'>
    <div class="header_top">
        <div class='container'>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="account__item">
                        <ul class="accaunt__tools">
                            <li>
                                <a href="#"><i class="fas fa-home"></i>Home</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-user"></i>my accaunt</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-shopping-cart"></i>shopping cart</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-check"></i>checkout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="btn__setting">
                        <div class="lenguage__btn">
                            <div class="btn-group">
                                <button type="button" class="btn btn-danger dropdown-toggle btn__white"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Lenguage
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">En</a>
                                    <a class="dropdown-item" href="#">Rus</a>
                                </div>
                            </div>
                        </div>

                        <div class="cash__btn">
                            <div class="btn-group">
                                <button type="button" class="btn btn-danger dropdown-toggle btn__white"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Cash
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Doller</a>
                                    <a class="dropdown-item" href="#">Rub</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_middle">
        <div class='container'>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="logo">
                        <a href="#"><img src="{{asset('img/logo1.png')}}"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="tools">
                        @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                <a href="{{ url('/index') }}">Home</a>
                                @else
                                    <a href="{{ route('login') }}">Login</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                    @endif
                                    @endauth
                            </div>
                        @endif
                        <div class='buy__tools'>
                            <div class='buy__items'>
                                <a href="#"><i class="far fa-edit"></i></a>
                            </div>
                            <div class='buy__items'>
                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div id="basket">
                            <table id="bascets">
                                <tbody>
                                <tr style="display: none;" class="hPb">
                                    <td>Выбрано:</td>
                                    <td><span id="totalGoods">0</span> товаров</td>
                                    <td>Сумма: $&asymp; </td>
                                    <td><span id="totalPrice">0</span> руб.</td>
                                </tr>
                                <tr style="display: table-row;" class="hPe">
                                    <td colspan="2">Корзина пуста</td>
                                </tr>
                                <tr>
                                    <td><a style="display: none;" id="clearBasket" href="#">Очистить</a></td>
                                    <td><a style="display: none;" id="checkOut" href="{{asset('basket')}}">Оформить</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_bottom">
        <div class='container'>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="menu__categories">
                        <div class='show__menu' id='show'><i class="fas fa-bars"></i></div>
                        <div class='hide__menu' id='hide'><span>&times;</span></div>
                        <ul class="menu__item">
                            <li><a href="{{asset('/posts/')}}">Catalog</a></li>
                            @foreach($cat_objs as $obj)
                                @if($obj)
                                    <li><a href="{{asset('/posts/'.$obj->id)}}">{{$obj->name}}</a></li>
                                @else
                                    <p>problem</p>
                                @endif
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class='search_item'>
                        <form action="" method="GET">
                            <input type="text" name="search" class="search" value="" placeholder="Search Your Item">
                            <input type="submit" class="sub__search" name="sub__search" value="">
                        </form>
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('img/logo1.png')}}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
@yield("content")
<footer class='footer'>
    <div class="footer__top">
        <div class='container'>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class='footer__info'>
                        <h4>information</h4>
                        <hr>
                        <ul class="footer__item">
                            <li><a href='#'>about us</a></li>
                            <li><a href='#'>customar service</a></li>
                            <li><a href='#'>privat police</a></li>
                            <li><a href='#'>site map</a></li>
                            <li><a href='#'>contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class='footer__info'>
                        <h4>why buy from us</h4>
                        <hr>
                        <ul class="footer__item">
                            <li><a href='#'>about us</a></li>
                            <li><a href='#'>shipping & returns</a></li>
                            <li><a href='#'>international shipping</a></li>
                            <li><a href='#'>affiliates</a></li>
                            <li><a href='#'>group sales</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class='footer__info'>
                        <h4>my account</h4>
                        <hr>
                        <ul class="footer__item">
                            <li><a href='#'>sign in</a></li>
                            <li><a href='#'>view cart</a></li>
                            <li><a href='#'>my wish list</a></li>
                            <li><a href='#'>track my order</a></li>
                            <li><a href='#'>help</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class='footer__info'>
                        <h4>contact</h4>
                        <hr>
                        <ul class="footer__item">
                            <li><i class="fas fa-map-marker-alt"></i> belarus, minsk</li>
                            <li>russianov street 32/1-162</li>
                            <li><i class="fas fa-mobile-alt"></i> +375(29)279-65-36</li>
                            <li>+375(29)141-33-04</li>
                            <li><i class="far fa-envelope"></i> malyshok91@mail.ru</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wrapper__card__seti">
                        <div class="btn__card__seti">
                            <a href="#">we accept</a>
                        </div>
                        <div class='card__seti__img'>
                            <a href="#"><img src="{{asset('img/mastercard.png')}}"></a>
                            <a href="#"><img src="{{asset('img/visa.png')}}"></a>
                            <a href="#"><img src="{{asset('img/cirrus.png')}}"></a>
                            <a href="#"><img src="{{asset('img/express.png')}}"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wrapper__card__seti">
                        <div class="btn__card__seti">
                            <a href=" #">fallow us</a>
                        </div>
                        <div class='card__seti__img'>
                            <a href="#"><img src="{{asset('img/facebook.png')}}"></a>
                            <a href="#"><img src="{{asset('img/g+.png')}}"></a>
                            <a href="#"><img src="{{asset('img/twit.png')}}"></a>
                            <a href="#"><img src="{{asset('img/be.png')}}"></a>
                            <a href="#"><img src="{{asset('img/freepick.png')}}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="copiright">
                        <p>copright by @ilyushin</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    window.onload = function () {
        document.querySelector('.show__menu').onclick = showM;
        document.querySelector('.hide__menu').onclick = hideM;
        var overflowMenu = document.createElement('div');
        document.onkeydown = function (event) {
            if (event.code == 'Escape') hideM();
        }
        function showM(e) {
            document.querySelector('.hide__menu').style.display = 'block';
            document.querySelector('.menu__item').style.display = 'block';
            overflowMenu.className = "overflow__menu";
            document.body.appendChild(overflowMenu);
        }

        function hideM(e) {
            overflowMenu.remove();
            document.querySelector('.menu__item').style.display = 'none';
            document.querySelector('.hide__menu').style.display = 'none';
        }

        overflowMenu.onclick = function () {
            document.querySelector('.menu__item').style.display = 'none';
            document.querySelector('.hide__menu').style.display = 'none';
            overflowMenu.remove();
        }
    }

</script>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery.cookie.js')}}"></script>
<script src="{{asset('js/cart.js')}}"></script>
@section('scripts')
@show
</body>

</html>