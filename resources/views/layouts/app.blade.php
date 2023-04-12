<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">


@include('layouts.head')

<body>
<div class="super_container">
   @include('layouts.navigation')

   @yield('content')

   @include('layouts.footer')
</div>
</body>
</html>
