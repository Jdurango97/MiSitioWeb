<HTML>
    <HEAD>
    <TITLE>HTML - PHP</TITLE>
</HEAD>
<BODY>
    <H1>Ejemplo for en PHP</H1>
    <?PHP     echo "<P>El Conteo que usted seleciono es:</P>";  
 	   
    $seleccion = $_POST['seleccion']; 
    $numfinal = $_POST['numfinal'];     
     echo "</BR>";   
    $Conteo = "";  	switch ($seleccion) 
        { 
 	
      case ("1"):  //Consecutivo 
           for ($i=1; $i<=$numfinal; $i++)         
            {           
             $Conteo = $Conteo. " - ". $i;       
            }                       echo "$Conteo";             break;   
          
      case ("2"): //Pares 
         for ($i=1; $i<=$numfinal; $i++)         
          {    
            $res = $i % 2;   	 	   if ($res == 0) 
            {      
                $Conteo = $Conteo. " - ". $i;  
            }      
       }                     echo "$Conteo";           break;     
     
    case ("3"): //Impares 
      for ($i=1; $i<=$numfinal; $i++)         
       {    
          $res = $i % 2;   	 	   if ($res != 0) 
            {      
                $Conteo = $Conteo. " - ". $i;  
            }      
       }                     echo "$Conteo";           break; 
      default: 
       echo "Por Favor Seleccione una opcion"; 
  }  	echo "</BR></BR>"; 
   $fecha  = date ("d/m/Y");  	echo "Fecha del Calulo : $fecha"; 

   echo ("</BR></BR>");     
   echo "<a href='../ejemplo4.html'>Volver<a>"; 

?> 
</BODY> 
</HTML> 	 

