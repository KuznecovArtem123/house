<div class="card {{$class}}">
    <div class="card__info">
        <img src="{{$src}}" alt="" class="card__img">
        <span class="card__author">{{$author}}</span>
        <span class="card__name">{{$name}}</span>
        <span class="card__property">{{$property}}</span>
    </div>
    <div class="card__buy">
        <span class="card__cost">{{$cost}}</span>
        <x-button class="card__button" text="В корзину" color="green"/>
    </div>
</div>
