<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/styles.css')}}">
    <title>PingPong Game</title>
</head>

<body>

    <canvas id="game"></canvas>

    <!-- Audio ch. -->
    <audio id="backgroundMusic" autoplay loop>
        <source src="background_music.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <script src="{{asset('assets/main.js')}}"></script>
</body>

</html>
