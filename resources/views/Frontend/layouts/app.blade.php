<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{asset('assets/images/logo-16x16.png')}}" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Argon - Social Network</title>

     <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
    <link href="{{ asset('assets/css/boxicons.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/components.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/media.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/chat.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css" rel="stylesheet')}}">
    <link href="{{ asset('assets/css/components.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/messenger.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/media.css')}}" rel="stylesheet">
    <script src="{{ asset('assets/js/load.js')}}" type="text/javascript"></script>
    <link href="https://vjs.zencdn.net/7.4.1/video-js.css" rel="stylesheet">
</head>
<body class="newsfeed">
    <div class="container-fluid" id="wrapper">
        <div class="row newsfeed-size">
            <div class="col-md-12 newsfeed-right-side">

                  @include('Frontend.partials.header')

                <div class="row newsfeed-right-side-content mt-3">
                    
                    @include('Frontend.partials.left_sidebar')

                    @yield('content')

                    @include('Frontend.partials.right_sidebar')
            </div>
        </div>
    </div>
</div>

   <!-- JS -->
<script src="{{ asset('assets/js/jquery/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>


<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/js/components/components.js') }}"></script>

<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
</body>
</html>
