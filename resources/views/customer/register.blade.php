<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <link rel="shortcut icon" type="image/png" href="{{url('site')}}/image/Logo-mini.png" />
  <!--===============================================================================================-->
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600&display=swap"
        rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--===============================================================================================-->
  <script src="{{url('site')}}/js/jquery.js"></script>
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('site')}}/css/animsition.min.css" />
  <!--===============================================================================================-->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css'>
  <!--===============================================================================================-->
  <link rel="stylesheet" href="{{ url('site/css') }}/signup-user.css">
  <!--===============================================================================================-->

</head>
<body class="animsition">
  <div class="container">
  <img class='bg-sign-up' src="{{ url('site/image/bg-login.gif') }}"/>
<form action="" method="POST" class="main-form first">
  @csrf
  <div class="main-form__title">
    <h1>Đăng Ký</h1>
  </div>
  <div class="main-form__body">

    <input class="main-form__input" name='name' type="text" placeholder="Username" />
    @error('name')
    <small id="helpId" class="text-muted">{{ $message }}</small>
    @enderror
    <input class="main-form__input" name='email' type="email" placeholder="Email Address" />
    @error('email')
    <small id="helpId" class="text-muted">{{ $message }}</small>
    @enderror
    <input class="main-form__input" name='password' type="password" placeholder="Password" />
    @error('password')
    <small id="helpId" class="text-muted">{{ $message }}</small>
    @enderror
    <input class="main-form__input" name='confirm_password' type="password" placeholder="Repeat Password" />
    @error('confirm_password')
    <small id="helpId" class="text-muted">{{ $message }}</small>
    @enderror
    <div class="main-form__submit">
    <a href="{{route('customer.login')}}">
    <p>Đăng Nhập</p></a>
    <button class="btn">REGISTER</button>
    </div>


  </div>
</form>
</div>
    <!--===============================================================================================-->
    <script src="{{url('site')}}/js/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{url('site')}}/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{url('site')}}/js/loading.js"></script>
    <!--===============================================================================================-->

</body>
</html>
