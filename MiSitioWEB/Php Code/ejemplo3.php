<html> 
<head> 
 	<title>HTML PHP</title> 
</head> 
<body> 
<H1>Pagina de Resultados</H1> 
 <?PHP echo "<P>Tipo de archivo segun extension!</P>"; 
$extension = $_POST['extension'];   
 
switch ($extension) 
{    case ("PDF"): 
    $tipo = ".PDF es un Formato de Documento Portable";       break;          case ("DOCx"): 
    $tipo = ".DOCx es un Formato de Word 2007/2019";       break;     case ("XLSx"): 
      $tipo = ".XLSx es un Formato de Excel 2007/2019";         break;     case ("PPTx"): 
      $tipo = ".PPTx es un Formato de PowerPoint 2007/2019";         break;     case ("TXT"): 
      $tipo = ".TXT es un Formato de Documento de texto";         break;    case ("HTML"): 
      $tipo = ".HTML es un formato de Pagina Web";         break;    default: 
      $tipo = "Por Favor Seleccione una opción"; 
} 
echo ($tipo); 

echo ("</BR></BR>");     
echo "<a href='../ejemplo3.html'>Volver<a>"; 
?> 
</body> 
</html>

