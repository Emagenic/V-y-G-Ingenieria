<?php include("../../../Conexion.php"); 
 $listado = "select * from proyectos where id = '$_GET[id]' ";
	$sentencia = mysql_query($listado,$conn);
	if($rs=mysql_fetch_array($sentencia,$mibase)){
		$idservicio= $rs["id"];
		$titulo = str_replace("\r\n","<br>",$rs["titulo"]); 
		$completa = str_replace("\r\n","<br>",$rs["completa"]); 
	
	}
	
?>
<!doctype html><html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
<title>VyG ingenier�a y construcci�n</title>
<link rel="stylesheet" type="text/css" href="../../../css/style.css"/>
<link rel="stylesheet" type="text/css" href="../../../css/estilos.css"/>
<link href="../../../font/stylesheet.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="../../../imagenes/icon.png">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script type="text/javascript" src="../../../js/script3.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

        <!-- load Galleria -->
    <script src="../../galleria-1.2.8.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
</head>
<body>
<div id="linea_sup"></div>
<header>
	<div id="headerimgs">
	  	<div id="headerimg1" class="headerimg"></div>
		<div id="headerimg2" class="headerimg"></div>
	</div>
  	<div id="nav-outer"><img src="../../../images/logo.jpg" width="270" height="61"></div>
	<div class="botonera" id="headernav-outer">
		<div id="sep_izq"></div>
    	<div class="botonera" id="nosotros"><a href="../../../index.php" class="botonera">NOSOTROS</a></div>
    	<div id="servicios"><a href="../../../servicios.php" class="botonera">SERVICIOS</a></div>
    	<div id="proyectos"><a href="../../../proyectos.php" class="botonera">PROYECTOS</a></div>
    	<div id="responsabilidad"><a href="../../../responsabilidad.php" class="botonera">RESPONSABILIDAD SOCIAL</a></div>
    	<div id="contacto"><a href="../../../contacto.php" class="botonera">CONTACTO</a></div>
    </div>
</header>
<div id="section"> 
	<div id="contenido_section">
	  
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="35">&nbsp;</td>
      </tr>
    </table>
<table width="950" border="0" cellspacing="0" cellpadding="0">
            
        
        
      <tr>
	      <td> 
              <div class="content"><!-- Adding gallery images. We use resized thumbnails here for better performance, but it�s not necessary -->

        <div class="content" id="galleria">
  <?php 
$listado = "select * from  galeria_servicio where servicio = '$idservicio'";
$sentencia = mysql_query($listado,$conn);
while($rs=mysql_fetch_array($sentencia,$mibase)){
	if ($rs["Tipo"]=="imagen"){
?>
		<a href="../../galeria/<?php echo $rs["id"]; ?>.jpg">
        <img data-title="" data-description="Kangoo Fitness" src="../../galeria/<?php echo $rs["id"]; ?>.jpg">
        </a>
<?php } else { ?>
         <a href="<?php echo $rs["url"]; ?>">
         <img data-title=""
         src="../../galeria/<?php echo $rs["id"]; ?>.jpg">
<?php }} ?>           
        </div>

        <p class="cred"></p>
    </div>
    <script>

    // Load the classic theme
    Galleria.loadTheme('galleria.classic.min.js');

    // Initialize Galleria
    Galleria.run('#galleria');

    </script>
          
          </td>
        </tr>
	    
      </table>
      
      
      
	</div>
</div>
<footer> 
	<div id="footer">
   	  <div id="redes_sociales"> 
        	<div id="twitter"></div>
            <div id="facebook"></div>
      </div>
      		<div class="texto_pie" id="pie">todos los derechos reservados a ingenieriavyg -  contacto@ingenieriavyg.cl<br>
sitio web desarrollado por emagenic.cl</div>
	  </div>
</footer>
</body>
</html>