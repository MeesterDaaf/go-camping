@extends('layouts.main')

@section('head')
    @yield('subhead')
@endsection

@section('content')
    @include('layouts.components.mobile-menu')
    <!-- BEGIN: Top Menu -->
    <nav class="top-nav">
        <ul>
            @foreach ($top_menu as $menuKey => $menu)
                <li>
                    <a href="{{ isset($menu['route_name']) ? route($menu['route_name']) : 'javascript:;' }}" class="{{ $first_level_active_index == $menuKey ? 'top-menu top-menu--active' : 'top-menu' }}">
                        <div class="top-menu__icon">
                            <i data-feather="{{ $menu['icon'] }}"></i>
                        </div>
                        <div class="top-menu__title">
                            {{ $menu['title'] }}  
                            @if (isset($menu['sub_menu']))
                                <i data-feather="chevron-down" class="top-menu__sub-icon"></i>
                            @endif
                        </div>
                    </a>
                    
                </li>
            @endforeach
        </ul>
    </nav>
    <!-- END: Top Menu -->
    <!-- BEGIN: Content -->
    <div class="wrapper wrapper--top-nav">
        <div class="wrapper-box">
            <!-- BEGIN: Content -->
            <div class="content">
                @yield('subcontent')
            </div>
            <!-- END: Content -->
        </div>
    </div>
    <!-- END: Content -->
@endsection