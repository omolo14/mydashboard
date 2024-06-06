<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/css/styles 2.css') }}">
    <title>Registration</title>
</head>
<body style="background: url('{{ asset('assets/images/1.jpg') }}'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
 <div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <p>LOGO .</p>
        </div>
        {{-- <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="{{ route('welcome') }}" class="link active">Home</a></li>
            </ul>
        </div> --}}
    </nav>
    <div class="form-box">
        <div class="register-container" id="register">
            <div class="top">
                <span>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></span>
                    <header>Login</header>
                <span>Have an account? <a href="{{ route('login') }}">Login</a></span>
                <header>Sign Up</header>
            </div>
            <form class="form-horizontal mt-3" method="POST" action="{{ route('register') }}">
                @csrf

                
                <div class="input-box">
                    <input id="name" type="text" class="input-field @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                    <i class="bx bx-user"></i>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-box">
                    <input id="email" type="email" class="input-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                    <i class="bx bx-envelope"></i>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                

                <div class="input-box">
                    <input id="password" type="password" class="input-field @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                    <i class="bx bx-lock-alt"></i>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="input-box">
                    <input id="password-confirm" type="password" class="input-field" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                    <i class="bx bx-lock-alt"></i>
                </div>

                <div class="input-box">
                    <input type="submit" class="submit" value="Register">
                </div>

                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" id="register-check">
                        <label for="register-check"> Remember Me</label>
                    </div>
                    <div class="two">
                        <label><a href="#">Terms & conditions</a></label>
                    </div>
                </div>

                <div class="form-group mb-0 row mt-2"> 
                    <div class="col-sm-5 mt-3">
                        <a href="{{ route('login') }}" class="text-muted"><i class="mdi mdi-account-circle"></i> Log in</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>   





</body>
</html>
