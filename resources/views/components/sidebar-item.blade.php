@props(['icon', 'route'])

<li class="nav-item">
    <a wire:navigate href="{{ route($route) }}" class="nav-link {{ Route::is($route) ?  'active' : '' }}">
        <i class="fa-solid {{ $icon }} nav-icon"></i>
        <p>@lang('sidebar.'.$route)</p>
    </a>
</li>
