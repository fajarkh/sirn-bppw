<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials.style')
</head>

<body>

  <!-- ======= Header ======= -->
  @include('layouts.partials.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('layouts.partials.sidebar')
  <!-- End Sidebar-->

  <!-- ======= Main ======= -->
  <main id="main" class="main">
    <div class="pagetitle">
        <h1>@yield('title')</h1>
    </div>
    @yield('content')
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.partials.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('layouts.partials.scripts')

</body>

</html>