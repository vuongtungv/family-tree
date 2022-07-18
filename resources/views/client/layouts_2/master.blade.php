<!DOCTYPE html>
<html lang="en">

{{--add header --}}
@include('client.layouts_2.header')


<body class="{{ Route::currentRouteName() == 'client_detail_news' ? 'single' : ''}}">
    @include('client.layouts_2.menu_top')


    @yield('client_content_2')


    @include('client.layouts_2.footer')
</body>



</html>
