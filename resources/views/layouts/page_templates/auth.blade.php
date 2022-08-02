<div class="wrapper">

    @include('layouts.navbars.auth')

    <div class="main-panel">
        @include('layouts.navbars.top_navs.auth')
        @yield('content')
        @include('layouts.footer')
    </div>
</div>