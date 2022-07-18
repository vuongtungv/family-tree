<!DOCTYPE html>
<html lang="en">

{{--add header --}}
@include('client.layouts.header')


<body>
    @include('client.layouts.menu_top')


    @yield('client_content')


    @include('client.layouts.footer')
</body>



</html>
