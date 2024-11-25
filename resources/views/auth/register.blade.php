<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="styleSignUp.css">
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
    <div class="login">
        {{-- FORM SIGN IN --}}
        <h1 class="judul">Register to start Listening</h1>
        <h1></h1>
        <p class="tulis" style="color: white;" style="border-radius: 10px;" >Full Name </p>
    <form method="POST" action="{{ route('register') }}">
    @csrf
        <table>
            <tr>
                <td>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </td>
            </tr>
        </table>

        <p class="tulis" style="color: white;">Email Address</p> 
        <table>
            <tr>
                <td>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </td>
            </tr>
        </table>

        <p class="tulis" style="color: white;">New Password</p> 
        <table>
            <tr>
                <td>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </td>
            </tr>
        </table>

        <p class="tulis" style="color: white;">Confirm Your Password</p> 
        <table>
            <tr>
                <td>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </td>
            </tr>
        </table>
        
        <br>

        <div>
            <button type="submit" class="btn">NEXT</button>
        </div>

        <div class="akun">
            <p>Already Have an Account?</p>
            <a href="login">Sign In</a>
        </div>
    </form>
        {{-- AKHIR FORM SIGN IN --}}
    </div>
    </center>
</body>

</html>