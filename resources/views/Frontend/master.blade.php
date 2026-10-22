<!DOCTYPE html>
<html lang="en">

<head>
   @include('Frontend.include.style')
</head>

<body>


   @include('Frontend.include.header')

    <main>
      @yield('contant')
    </main>

   @include('Frontend.include.footer')

    @include('Frontend.include.mobile-nav')

   @include('Frontend.include.script')
</body>

</html>
