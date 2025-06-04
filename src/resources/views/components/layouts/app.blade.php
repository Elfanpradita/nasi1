<!DOCTYPE html>
<html lang="en-us">
<body>
    @include('components.partials.head')
    @include('components.partials.spin')
    @include('components.partials.nav')
    {{ $slot }}
    @include('components.partials.footer')
    @include('components.partials.up')
    @include('components.partials.js')
</body> 
</html>