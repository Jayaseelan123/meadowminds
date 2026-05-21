<!DOCTYPE html>
<html lang="en">
@include('includes.header')
<body>
    <div class="bg-circles">
        <div class="circle circle-1"></div>
        <div class="circle circle-2"></div>
    </div>

    @include('includes.navbar')

    @yield('content')

    @include('includes.footer')
</body>
</html>
