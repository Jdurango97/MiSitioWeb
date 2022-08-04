<HTML>
    <HEAD>
        <TITLE>HTML - PHP</TITLE>
    </HEAD>
    <BODY>
        <H1>Ejemplo Estructura "WHILE" en PHP</H1>
        <?php 
$numero1 = $_POST['numero1']; 
$numero2 = $_POST['numero2']; 
$numero3 = $_POST['numero3']; 
$numero4 = $_POST['numero4']; 
$numero5 = $_POST['numero5']; 
 
$cont = 1; 
$suma = 0; 
 
  while ($cont <= 5) 
    { 
     if ($cont == 1)            { $suma = $suma + $numero1;}       elseif  ($cont == 2)  
      { $suma = $suma + $numero2;}             elseif  ($cont == 3)  
      { $suma = $suma + $numero3;}      elseif  ($cont == 4)  
      { $suma = $suma + $numero4;}            elseif  ($cont == 5)  
      { $suma = $suma + $numero5;} 
 
     $cont++;     } 
echo "La suma de lo numeros ingresados es: $suma </Br></Br>"; 
$prom = $suma/5; 
echo "El Promedio de los numeros ingresados es: $prom"; echo "</BR></BR>"; $fecha  = date ("d/m/Y"); echo "Fecha del Calulo : $fecha"; 
 
echo ("</BR></BR>");     
echo "<a href='../ejemplo5.html'>Volver<a>"; 
 
?> 
</FORM>
</BODY>
</HTML>