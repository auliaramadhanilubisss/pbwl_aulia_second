<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="styleSignIn.css">
    <script src="https://kit.fontawesome.com/a4e07e2ceb.js" crossorigin="anonymous"></script>
    {{-- CSS --}}
</head>

<body>
    {{-- LOGO --}}
    <div class="logo-container">
        <img src="images/LOGO-TUGAS-APSI.png" alt="My Logo" class="logo">
    </div>
    {{-- AKHIR LOGO --}}
    <center>
        {{-- FORM SIGN IN --}}
        <h1 style="color: white;">Sign In Noraebang Easy</h1>
        <h1 style="margin-bottom: 50px;"></h1>
        <p class="tulis" style="color: white;" style="border-radius: 10px;" >Email Address Or Username </p>
    <form method="POST" action="{{ route('login') }}">
    @csrf
        <table>
            <tr>
                <td>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </td>
            </tr>
        </table>

        <p class="tulis" style="color: white;">Password</p> 
        <table>
            <tr>
                <td>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </td>
            </tr>
        </table>
        
        <br>

        <div>
            <button type="submit" class="btn">NEXT</button>
        </div>

        <div class="akun">
            <p>Don't have an account?</p>
            <a href="register">Sign Up</a>
        </div>
    </form>
        {{-- AKHIR FORM SIGN IN --}}
    </center>
</body>

</html>