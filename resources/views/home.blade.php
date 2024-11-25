<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noraebang Easy</title>

{{-- CSS --}}
    <link rel="stylesheet" href="styleLagu1.css">
    <script src="https://kit.fontawesome.com/a4e07e2ceb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/solid.min.css">
{{-- CSS --}}
</head>
<body>
    
    {{-- SIDEBAR --}}
    <div class="sidebar">
        <img src="images/logo-apsi.png" alt="Noraebang Easy" width="300px">
        <nav class="sidebar-nav">
            <h1>Your Collection</h1>
            <ul class="playlist">
                <li><i class="fas fa-music"></i>
                    <a class="nav-link" href="#">Your Playlist Name</a>
                </li>
                <p>Playlist Noraebang Easy</p>
                <li><i class="fas fa-music"></i>
                    <a class="nav-link" href="#">Your Playlist Name</a>
                </li>
                <p>Playlist Noraebang Easy</p>
                <li><i class="fas fa-music"></i>
                    <a class="nav-link" href="#">Your Playlist Name</a>
                </li>
                <p>Playlist Noraebang Easy</p>
                <li><i class="fas fa-music"></i>
                    <a class="nav-link" href="#">Your Playlist Name</a>
                </li>
                <p>Playlist Noraebang Easy</p>
            </ul>
            <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

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
                    </li>
            @endguest
         </ul>
    </nav>
    </div>
    {{-- NAVBAR --}}
    <div class="content">
        <header class="nav-head">
            <div>
            <i class="fa-solid fa-circle-chevron-left"></i>
            <i class="fa-solid fa-circle-chevron-right"></i>
            </div>
            <div class="box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="What do you want to play?">
            </div>
            <nav class="nav-set">
                <a href="#">Home</a>
                <a href="#">Search</a>
                <i class="fa-regular fa-bell"></i>
                <a href="#"><img src="{{url ('images/profil.jpg')}}" alt="Profile"></a>
            </nav>
        </header>
    {{-- MAIN CONTENT --}}
    <main>
        <div class="lagu">
            <h1>MIC DROP (feat. Desiigner) [Steve Aoki Remix]</h1>
            <p style="font-family: Altone Trial">Artist: <b>BTS</b> | Album: <b>Love Your Self : Her</b></p>
            <div class="lyrics">
                <img src="images/mic-drop.jpeg" alt="My Album">
                <div>
                    <p><strong>Pre-Chorus:</strong> San, Jongho, Hongjoong & Yunho</p>
                    <p>Neoneun yeogiseo meomchul tenga</p>
                    <p><strong>Geutorok weonadeon geoshi yeogie, oh-oh</strong></p>
                    <p>Oh, we must going on Gaja (Eh-oh-eh-oh-eh)</p>
                    <p>Gaja (Kkeuti gidarineun shijageuro)</p>
                </div>
            </div>
        </div>
    </main>
    <div class="footer">
        

    </div>
    </div>
</body>
</html>