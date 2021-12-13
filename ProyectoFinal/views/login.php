<!DOCTYPE html>

<html>
<head>
<title>INGRESAR SISTEMA DE GESTION DE PAGOS</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">


</head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" style="margin-left:500px; border:none" href="">LOGIN - Institucion Educativa Experimental</a>
     
      <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav mr-auto">
          
        </ul>
        <form class="form-inline my-2 my-lg-0">
        
        </form>
      </div>
    </nav>

    <!--LOGIN-->

     <div class="container" >

 <br></br>
            <img id="profile-img" class="profile-img-card" src="/ProyectoFinal/imagenes/usuario.png"/ width=13% height=20% />
         	<form class="form-signin" method="POST" action="login.php">

<label>Usuario</label>
<input type="text" name="cargo"  class="form-control" placeholder="usuario">
<label>Clave</label>
<input type="password" name="clave" class="form-control" placeholder="escriba su clave">

              


          
                    
                    <label>
                        <input type="checkbox" value="remember-me"> Olvide mi contraseña
                    </label>
                     
            
                <input type="submit" class="btn btn-info" name="login" value="INGRESAR AL SISTEMA" >

               
       
    </div>

    
    <footer class="page-footer font-small" style="background-color: #343A40; color: #FFF; margin-top: 150px">

     
    </footer>
    




</form>

</body>


</html>