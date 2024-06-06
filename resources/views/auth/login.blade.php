<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/css/styles 2.css') }}">
    <title>Login</title>
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
            <div class="login-container" id="login">    
                <div class="top">
                    <span>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></span>
                    <header>Login</header>
                </div>
                <form class="form-horizontal mt-3" method="POST" action="{{ route('login') }}">
                @csrf
            
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
                        <input id="password" type="password" class="input-field @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                        <i class="bx bx-lock-alt"></i>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                
                    <div class="input-box">
                        <input type="submit" class="submit" value="Sign In">
                    </div>
                
                    <div class="two-col">
                        <div class="one">
                            <input type="checkbox" id="login-check" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="login-check"> Remember Me</label>
                        </div>
                        <div class="two">
                            <label><a href="#">Forgot password?</a></label>
                        </div>
                    </div>
                
                    {{-- <div class="form-group mb-0 row mt-2">
                        <div class="col-sm-5 mt-3">
                            <a href="{{ route('register') }}" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account</a>
                        </div>
                    </div> --}}
                </form>
            </div>
       </div>

   
    </div>
</body>

<!-- Mirrored from themesdesign.in/upcube/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 16:22:01 GMT -->
</html>


