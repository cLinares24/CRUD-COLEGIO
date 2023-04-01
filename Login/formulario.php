<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style type="text/css">
      body {
        background-image: url('https://www.xtrafondos.com/wallpapers/vertical/arte-de-picos-poligonales-neon-3d-3577.jpg');
        background-size: cover;
        background-position: center;
        font-family: Arial, sans-serif;
      }
  
      .container {
        margin: 0 auto;
        width: 400px;
        padding: 20px;
        background-color: gray;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
  
      h2 {
        margin-top: 0px;
        font-size: 28px;
        font-weight: bold;
        color: #333;
      }
  
      input[type="email"], input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-top: 20px;
        margin-bottom: 10px;
        border-radius: 5px;
        border: none;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
        font-size: 16px;
      }
  
      input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
        font-size: 16px;
        margin-bottom: 20px;
      }
  
      a {
        text-decoration: none;
        color: #333;
      }
  
      .forgot-password {
        font-size: 14px;
        margin-bottom: 20px;
      }
  
      .login-with {
        font-size: 16px;
        margin-bottom: 10px;
      }
  
      .facebook-button, .instagram-button {
        display: inline-block;
        background-color: #fff;
        color: #333;
        padding: 10px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
        font-size: 16px;
        margin-right: 10px;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
      }
  
      .signup-link {
        font-size: 16px;
      }
    </style>
    

    <title>Hello, world!</title>
  </head>
  <body>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v16.0" nonce="b2KHXAZS"></script>

<div class="container">
            <div class="central">
                <div class="caja">
                    <div class="titulo">
                        Login Form
                    </div>
                    <form method="post" action="./db/functions.php" id="loginform">
                        <input class="inputs" type="email" name="usr" placeholder="Usuario" required>
                        <input class="inputs" type="password" placeholder="Contraseña" name="pas" required>
                        <a class="forgot">Forgot Password?</a>
                        <input class="login" type="submit" name="submit" value="submit">
                    </form>
                        <a class="login_with">Or login with</a>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <div class="fb-login-button btn btn-outline-primary me-md-2" data-width="50px" data-size="" data-button-type="" data-layout="" data-auto-logout-link="false" data-use-continue-as="false"></div>

              <a href="#" style="background: linear-gradient(to right, #833ab4, #fd1d1d, #fcb045); color: #fff; padding: 10px 20px; border-radius: 5px; font-size: 16px; text-decoration: none; display: inline-block;">
                <i class="fab fa-instagram " style="margin-right: 10px; color: #fff;"></i> Iniciar sesión con Instagram
            </a>
            </div>
                    <div class="inferior">
                    <a href="#">Dont have an account? Signup now</a>
                </div>
                </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>