<?php include("../../../Conexion.php"); 
 $listado = "select * from servicios where id = '$_GET[id]' ";
	$sentencia = mysql_query($listado,$conn);
	if($rs=mysql_fetch_array($sentencia,$mibase)){
		$idservicio= $rs["id"];
		$titulo = str_replace("\r\n","<br>",$rs["titulo"]); 
		$completa = str_replace("\r\n","<br>",$rs["completa"]); 
	
	}
	
?>
<!doctype html>
<html>
<head>
	<meta charset="iso-8859-1">
	<title>JRR Ingenieria</title>
	<link href="../../../estilos/estructura.css" rel="stylesheet" type="text/css">
	<link href="../../../estilos/letras.css" rel="stylesheet" type="text/css">
	<link href="../../../estilos/blueberry.css" rel="stylesheet" type="text/css">
    
      <style>

            /* Demo styles */
            html,body{}
            .content{
	width: 800px;
	font-family: "helvetica neue", arial, sans-serif;
	font-size: 12px;
	line-height: 1.4;
	height: 600px;
	margin-right: auto;
	margin-left: auto;
}

            p{margin:0 0 20px}
            .cred{margin-top:20px;font-size:11px;}

            /* This rule is read by Galleria to define the gallery height: */
            #galleria{
	height: 500px;
	background-color: #FFFFFF;
}
        body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
        #detallecontenido {
	background-color: #000;
	background-image: url(../../../imagenes/bg.png);
	background-repeat: no-repeat;
}
        </style>
        <link href="../../../css/estilos.css" rel="stylesheet" type="text/css">
        <style type="text/css">
        .texto1 {	font-family: Arial, Helvetica, sans-serif;
	color: #FFF;
	text-decoration: none;
	font-size: 12px;
}
        </style>

        <!-- load jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

        <!-- load Galleria -->
    <script src="../../galleria-1.2.8.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<script src="../../../jquery.blueberry.js"></script>
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-25790759-2']);
		  _gaq.push(['_setDomainName', 'emagenic.cl']);
		  _gaq.push(['_setAllowLinker', true]);
		  _gaq.push(['_trackPageview']);
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
		<script>
			$(window).load(function() {
			$('.blueberry').blueberry();
		});
	</script>
	<script type="text/javascript">
			function MM_swapImgRestore() { //v3.0
  			var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
		}
		function MM_preloadImages() { //v3.0
  			var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    		var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    		if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
		}
		function MM_findObj(n, d) { //v4.01
  			var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    		d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  			if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  			for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  				if(!x && d.getElementById) x=d.getElementById(n); return x;
			}
		function MM_swapImage() { //v3.0
  			var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   			if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
		}
	</script>
</head>
<body onLoad="MM_preloadImages('../../../imagenes/facebook_off.png','../../../imagenes/twitter_off.png','../../../imagenes/youtube_off.png')">
<header>
	<div id="contenidoheader">
    	<div id="logocontenidoheader"><img src="../../../imagenes/logotipo.png" width="225" height="120"></div>
    	<div id="menusup">
    		<ul> 
        		<li><a href="../../../index.php" class="botones">INICIO</a></li>
        		<li><a href="../../../nosotros.php" class="botones">NOSOTROS</a></li>
       		 	<li><a href="../../../servicios.php" class="botones">SERVICIOS</a></li>
        		<li><a href="../../../productos.php" class="botones">PRODUCTOS</a></li>
        		<li><a href="../../../ubicacion.php" class="botones">UBICACI&Oacute;N</a></li>
    			<li><a href="../../../contacto.php" class="botones">CONTACTO</a></li>
 			</ul>
    	</div>
	</div>
</header>
	<div id="content">
		<div class="blueberry">
      		<ul class="slides">
        		<li><img src="../../../imagenes/slide/1.jpg" /></li>
        		<li><img src="../../../imagenes/slide/2.jpg" /></li>
        		<li><img src="../../../imagenes/slide/3.jpg" /></li>
        		<li><img src="../../../imagenes/slide/4.jpg" /></li>
      		</ul>
    	</div>
  	</div>
<section>
<div class="titulo">Servicios</div>
<div class="subtitulo"></div>
<table width="950" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="30">&nbsp;</td>
  </tr>
  <tr>
    <td height="33" valign="top" class="subtitulo"><strong><?php echo $titulo; ?></strong></td>
  </tr>
  <tr>
    <td height="30" valign="top" class="texto"><p class="texto"><?php echo $completa; ?></p>
      <p class="texto">&nbsp;</p></td>
  </tr>
  <tr>
    <td valign="top">
    <div class="content"><!-- Adding gallery images. We use resized thumbnails here for better performance, but it’s not necessary -->

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
<br>
  </div>
  </div>
  
  
</section>
<footer>
	<div id="info_footer">
		<div class="texto_pie" id="pie_1"><br>
        	<p>Todos los derechos reservados<br>
            a JRR Ingenier&iacute;a Ltda.<br>
            <a href="http://www.emagenic.cl" class="texto_pie">Sitio web Desarrollado por Emagenic Ltda.</a></p>
     	</div> 
        <div class="texto_pie" id="pie_2"></div>
        <div id="pie_3">
			<div id="icon_face"><a href="https://www.facebook.com/jrringenieria" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Facebook','','../../../imagenes/facebook_off.png',1)"><img src="../../../imagenes/facebook_on.png" alt="Facebook" width="32" height="32" id="Facebook"></a></div>
			<div id="icon_twitt"><a href="http://www.twitter.com/jrringenieria" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Twitter','','../../../imagenes/twitter_off.png',1)"><img src="../../../imagenes/twitter_on.png" alt="Twitter" width="32" height="32" id="Twitter"></a></div>
			<div id="icon_yout"><a href="http://www.youtube.com/jrringenieria" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Youtube','','../../../imagenes/youtube_off.png',1)"><img src="../../../imagenes/youtube_on.png" alt="Youtube" width="32" height="32" id="Youtube"></a></div>
		</div>
	</div>
</footer>
</body>
</html>