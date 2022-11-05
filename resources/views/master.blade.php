<!DOCTYPE html>
<html lang="en">
    @include('includes.meta')
    <head>
        <title>QR Code - @yield('title')</title>
        @include('includes.style')
    </head>
    <body class="color-custom" >
        <div>
            @include('includes.header')
            <div>
                @yield('body')
                @include('includes.footer')
            </div>
        </div>
        @include('includes.script')
    </body>
</html>