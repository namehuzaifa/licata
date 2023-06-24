<!DOCTYPE html>
<html lang="en">

    @include('components.admin.head')
    @yield('style')

    <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static @auth login @endauth" data-open="click" data-menu="vertical-menu-modern" data-col="">
        @include('components.admin.menu')

        @yield('content')

        @include('components.admin.footer')
        @include('components.admin.scripts')
        @yield('scripts')
    </body>

</html>
