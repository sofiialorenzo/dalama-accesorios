<div>
    <a {{ request()->routeIs($route) ?'active' : '' }} {!! request()->routeIs($route) ?'aria-current="page"' : '' !!}
        href="{{ route($route) }}">{{ $slot }}</a>
</div>
