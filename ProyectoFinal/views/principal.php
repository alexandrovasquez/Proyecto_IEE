    <?php
    session_start();
    ?>
    <html>
    	    <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <title>SISTEMA DE MATRICULA</title>
        </head>
        <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-danger">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <input type="submit" align="rigth" value="INICIO" class="btn btn-danger" onclick = "location='/ProyectoFinal/views/principal.php/'"/>
                        <input type="submit" align="rigth" value="ALUMNO" class="btn btn-danger" onclick = "location='/ProyectoFinal/controllers/alumno.php/'"/>
                        <input type="submit" align="rigth" value="APODERADO" class="btn btn-danger" onclick = "location='/ProyectoFinal/controllers/apoderado.php/'"/>
	  <input type="submit" align="rigth" value="PAGO" class="btn btn-danger" onclick = "location='/ProyectoFinal/controllers/pago.php/'"/>
	  
                    </ul>

    <input type="submit" style="margin-left:850px; border:none" align="rigth" value="SALIR" class="btn btn-danger" onclick = "location='/ProyectoFinal/index.php/'"/>
                   
                    </div>
                </div>

            </nav>
    <img src="/../ProyectoFinal/imagenes/IEE_01.jpg"/ width=100% height=80%/>
    <div class="footer-copyright text-center py-3">INGENIERÍA DE SISTEMAS E INFORMÁTICA - PROMOCIÓN 2017
            <br>
            <a href="https://www.uns.edu.pe/" target="_blank"> UNIVERSIDAD NACIONAL DEL SANTA</a>
          </div>

    	</body>
    </html>