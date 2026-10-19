<!DOCTYPE html>
<html lang="en">

<head>
   @include('Frontend.include.style')
</head>

<body>

   <!-- Magic Interactive Cursor Elements -->
<div class="magic-cursor-dot" id="cursorDot"></div>
<div class="magic-cursor-ring" id="cursorRing"></div>
<canvas id="magic-canvas"></canvas>


   @include('Frontend.include.header')

    <main>
      @yield('contant')
    </main>

   @include('Frontend.include.footer')

    @include('Frontend.include.mobile-nav')

   @include('Frontend.include.script')
</body>

</html>
