<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <div class='product__wrapper'>
        <div class="product__item">
            <div class='product__img'>
                <img src="{{asset($one->img)}}">
            </div>
            <div class='product__tools'>
                <div class='product__headline'>
                    <h4>{{$one->name}}</h4>
                </div>
                <div class='product__price'>
                    <p>${!!$one->price!!}</p>
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
                            <a href='#' id="good-{{$one->id}}-{{$one->price}}" class="addCart"><i class="fas fa-shopping-cart"></i> add to cart</a>
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