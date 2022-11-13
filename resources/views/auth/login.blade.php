<!DOCTYPE html>
<html>
<head>
  <title>Sistem Pakar Hipertensi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    *{
    box-sizing: border-box;
    margin:0;
    padding:0;
    font-family: 'Varela', sans-serif;
  }
  .container{
    width: 80%;
    height:80%;
    display: flex;
    margin:auto;
    align-items: center;
    justify-content: center;
  }



  .forms{
    width: 100%;
   display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: center;
  }

  .login-form{
    display:flex;
    flex-direction: column;
    width:75%;
  }

  .register-form{
    display:flex;
    flex-direction: column;
    width:75%;
    display: none;


  }

  input {
    padding:14px;
    margin-top:10px;
    margin-bottom: 10px;
    outline: none;
    border:none;
    border:1px solid rgb(146, 147, 148);
    border-radius:10px;
    width: 100%;

  }
  input:focus{
    border: 2px solid #2C73D2;

  }

  button{
    margin-top: 10px;
    padding:12px;
    border-radius:10px;
    outline: none;
    border:none;
    background-color: #0089BA;
    color:white;
    transition: 0.3s ease-in;
    text-transform: uppercase;
    animation: moveButton;
    animation-duration: 1.5s;
    width: 40%;
  }

  button:hover{
    background-color: #2C73D2;
  }

  h4{
    text-align: center;
    color: #845EC2;
    margin:10px;
    padding :5px;
    text-transform: uppercase;
  }
  .header{
    display:flex;
    flex-wrap: wrap;
    width: 75%;
    background-color:#845EC2;
    color:white;
    border-radius: 8px;

  }

  h3{
    flex-grow: 1;
    text-align: center;
    padding: 10px;
    transition: 0.5s ease-in;
    cursor: pointer;
    font-size: 1.1rem;
  }

  h2{
    text-align: center;
    padding: 10px;
    transition: 0.5s ease-in;
    cursor: pointer;
  }

  #login{
    border-right: 1px solid white;

  }

  img{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 30%;
  }

  .active{
    background-color: #B39CD0;
    color:white;
  }

  @keyframes moveButton{
    0% { transform: rotate(3deg);}
    25% { transform: rotate(7deg);}
    50% { transform: rotate(-7deg);}
    100% { transform: rotate(0deg);}
  }

  </style>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Varela&display=swap" rel="stylesheet">
</head>
<body>
<h2> SISTEM PAKAR DIAGNOSIS HIPERTENSI </h2>
<img src="https://media.istockphoto.com/vectors/medical-tonometer-and-high-blood-pressure-risk-of-hypertension-blood-vector-id1283776723?k=20&m=1283776723&s=170667a&w=0&h=Y8wVVi1ZOFt7CV163aT6PxK9NyVKWrh_YwIIP-12kW8=" alt="">
<div class="container">
<div class="forms">
<div class="header">
<h3 id="login" class="active">LOGIN</h3> <h3 id="register">REGISTER</h3>
</div>
<div class="login-form">
<form method="POST" action="{{ route('login') }}">
{{ csrf_field() }}
<h4>Please login below!</h4>
<input type="email" placeholder="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
<input type="password" placeholder="password" name="password" required>
@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
<button type="submit" style="margin-bottom: 10px;">Login</button>
</form>
</div>
@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
    <h6 style="font-size: 15px;">{{ $message }}</h6>
    </div>
@endif
<div class="register-form">
<form method="POST" action="{{ route('register') }}">
{{ csrf_field() }}
  <h4>Register now to enjoy benifits</h4>
  <input id="name" type="text" placeholder="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
  <input type="email" placeholder="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
  @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
  <input type="password" placeholder="password" name="password" required>
  @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
  <input id="password-confirm" type="password" placeholder="confirm password" name="password_confirmation" required autocomplete="new-password">
  <button type="submit">Register</button>
</form>
</div>
</div>
</div>

<script>
    document.querySelector("#register").addEventListener("click",openregform)
function openregform(){
  document.querySelector(".register-form").style.display="flex";
  document.querySelector(".login-form").style.display="none";
  document.querySelector("#register").className="active"
  document.querySelector("#login").className=""
}
document.querySelector("#login").addEventListener("click",openlogform)
function openlogform(){
  document.querySelector(".register-form").style.display="none";
  document.querySelector(".login-form").style.display="flex";
  document.querySelector("#register").className=""
  document.querySelector("#login").className="active"
}
</script>


</body>

</html>
