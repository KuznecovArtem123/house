<div class="catalog content__element">
    <div class="catalog__tabs">
        <span class="catalog__tabs__span">Репродукции</span>
        <div class="catalog__tabs__buttons">
            <x-catalog.tab class="catalog__tabs__btn" text="Франция"/>
            <x-catalog.tab class="catalog__tabs__btn" text="Германия"/>
            <x-catalog.tab class="catalog__tabs__btn" text="Англия"/>
        </div>
    </div>
    <div class="catalog__cards">
        <x-catalog.card class="catalog__card" src="{{asset('img/catalog/card_1.jpg')}}" author="Марсель Руссо" name="Охота Амура" property="Холст, масло (50х80)" cost="14 500 руб"/>
        <x-catalog.card class="catalog__card" src="{{asset('img/catalog/card_2.jpg')}}" author="Анри Селин" name="Дама с собачкой" property="Акрил, бумага (50х80)" cost="16 500 руб"/>
        <x-catalog.card class="catalog__card" src="{{asset('img/catalog/card_3.jpg')}}" author="Франсуа Дюпон" name="Процедура" property="Цветная литография (40х60)" cost="20 000 руб"/>
        <x-catalog.card class="catalog__card" src="{{asset('img/catalog/card_4.jpg')}}" author="Луи Детуш" name="Роза" property="Бумага, акрил (50х80)" cost="12 000 руб"/>
        <x-catalog.card class="catalog__card" src="{{asset('img/catalog/card_5.jpg')}}" author="Франсуа Дюпон" name="Птичья трапеза" property="Цветная литография (40х60)" cost="22 500 руб"/>
        <x-catalog.card class="catalog__card" src="{{asset('img/catalog/card_6.jpg')}}" author="Пьер Моранж" name="Пейзаж с рыбой" property="Цветная литография (40х60)" cost="20 000 руб"/>
    </div>
</div>
