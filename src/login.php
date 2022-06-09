<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/PROYECTO/style/login.css">
    <title>Document</title>

</head>
<body>
    <div class="header">
        <a class="cabezilla" href="http://">
            <img src="/PROYECTO/ICON/home.svg" alt="home" >
        </a>
    </div>
    <div class="login">
    <section class="form-container">
        <img src="/PROYECTO/ICON/home2.jpeg" alt="perfil" class="logo" >
        <h1 class="form-title">INICIAR SECCION</h1>
        <form class="form-formulario" method="post" action="/PROYECTO/function/validacion.php"  >
                <label for="pasword" class="label">USUARIO</label>
                <input type="email" id="password" name="correo" class="input input-password" name="password">
                <label for="pasword" class="label">CONTRASEÑA</label>   
                <input type="password" id="password" name="contra" placeholder="******************" class="input input-password" name="password">
                <input type="submit" 
                value="Entrar" class="primary-button login-button" >
        </form>
        <a href="#" class="registro">Registrarse</a>
    </section>
    </div> 
</body>
</html>