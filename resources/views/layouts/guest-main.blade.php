<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>BlueBell</title>

    <!-- vendor css -->
    <link href="{{ asset('asset/lib/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('asset/css/bracket.css') }}">
</head>

<body>

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
        @yield('content')
    </div>


    <script src="{{ asset('asset/lib/jquery/jquery.min.js') }}.."></script>
    <script src="{{ asset('asset/lib/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <script src="{{ asset('asset/lib/bootstrap/js/bootstrap.bundle.min.js') }}.."></script>

</body>

</html>
