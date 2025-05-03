<div class="catalog content__element" id="catalog" x-data="{section: 'france'}">
    <div class="catalog__tabs">
        <span class="catalog__tabs__span">Репродукции</span>
        <div class="catalog__tabs__buttons">
            <x-catalog.tab class="catalog__tabs__btn" text="Франция" key="france"/>
            <x-catalog.tab class="catalog__tabs__btn" text="Германия" key="germany"/>
            <x-catalog.tab class="catalog__tabs__btn" text="Англия" key="england"/>
        </div>
    </div>
    <template x-if="section=='france'">
        @include('block.catalog.france')
    </template>
    <template x-if="section == 'germany'">
        @include('block.catalog.germany')
    </template>
    <template x-if="section == 'england'">
        @include('block.catalog.england')
    </template>
</div>

