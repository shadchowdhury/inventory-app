<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Meta -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>BLUEBELL</title>

    @include('layouts.css')

</head>

<body>

    <!-- ########## START: LEFT PANEL ########## -->
    @include('layouts.sidebar')
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    @include('layouts.navbar')
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <!-- br-pagebody -->
        @yield('content')
        <!-- footer -->
        @include('layouts.footer')
    </div>

    <!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    @include('layouts.script')
    @stack('body-scripts')
</body>

</html>
