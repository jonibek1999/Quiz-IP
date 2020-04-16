@if(Session::has('info'))
    @component('balloons.info')
        {{ Session::get('info') }}
    @endcomponent
@endif
