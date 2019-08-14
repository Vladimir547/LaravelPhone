
<form action="" method="GET">
    <div class='filter__text'></div>
    <div class='filter'>
        <label for="min__cash">Min $</label>
        <input type="text" name="min_cash" id="min__cash" class="min__cash" value="">
        <label for="min__cash">Max $</label>
        <input type="text" name="max_cash" id="max__cash" class="max__cash" value="">
    </div>
        <div class='fiter__menu'>
            <div class='filter__text'></div>
            <div class='filter'>
                <ul class='filter__items'>
                    @foreach($brands  as $br)
                        <li><input type="checkbox" name="{{$br-> brand -> name}}" id='{{$br-> brand -> name}}' value=''><label for="{{$br -> brand -> name}}">{{$br-> brand -> name}}  </label></li>
                    @endforeach
                </ul>
            </div>
            <div class="btn_filter">
                <input type="submit" name="sub__filter" class="sub_filter" id="sub__id" value="result">
            </div>

    </div>
</form>
