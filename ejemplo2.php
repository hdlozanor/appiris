<html>
<head>
<link rel="stylesheet" href="css/ejemplo2.css">
</head>
 <body>
   <article>
		<div class="main">
			<div class="titulo">Ejemplo 2</div>
      <nav>
          <a href="index.php">Inicio</a>
 		  <a href="ejemplo2.php">Ejemplo2</a>
          <a href="ejemplo3.php">Ejemplo3</a>
          <a href="ejemplo4.php">Ejemplo4</a>
			</nav>
		</div>	
        <?php

        date_default_timezone_set('Europe/Madrid');

        // Obtener la fecha y hora actuales en el formato "d/m/Y H:i:s"
        $fecha_y_hora = date('d/m/Y H:i:s');

        // Imprimir la fecha y hora
        echo "La fecha y hora actuales son: " . $fecha_y_hora;
			
		?>
	<article>
   <body>
</html>