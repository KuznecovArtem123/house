<button class="tab {{$class}}" x-on:click="section='{{$key}}'" x-bind:class="section=='{{$key}}' ? 'tab-toggled' : 'tab'">
    <span class="tab__span" x-bind:class="section=='{{$key}}' ? 'tab-toggled__span' : 'tab__span'">{{$text}}</span>
</button>
