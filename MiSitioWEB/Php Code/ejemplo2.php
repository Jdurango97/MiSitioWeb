<html> 
<head> 
 	<title>HTML PHP</title> 
</head> 
<body> 
<H1>Pagina de Resultados</H1> 
 <?PHP     echo ("<P>Saludo con PHP:</P>"); 
    $sexo  = $_POST['sexo'];   
    $nombre = $_POST['nombre'];  
    $apellido = $_POST['apellido'];  
 
 	if ($sexo == 'F') 
 	{ 
 	 	$saludo = "Bienvenida, Señorita "; 
 	} 
 	elseif ($sexo == 'M') 
 	{ 
 	 	$saludo = "Bienvenido, Señor "; 
 	} 
 	else 
      { 
 	 	$saludo = "Hola, "; 
 	} 
 
 	$saludo = $saludo . $nombre . " " . $apellido; 
 	echo ($saludo); 
      echo ("</BR></BR>");     
      echo "<a href='../ejemplo2.html'>Volver<a>"; ?> 
 </body> 
</html> 
