<html> 
<head> 
 	<title>HTML PHP</title> 
</head> 
<body> 	
<H1>Pagina de Resultados</H1> 
<?PHP 
$ShoraNormal = $_POST['horaNormal'];
$ShoraExtra = $_POST['horaExtra'];
$Shora = $_POST['horas'];

echo "<h1>Datos ingresados:</h1>";
echo "Salario por hora normal: ".$ShoraNormal."<br>";
echo "Salario por hora extra: ".$ShoraExtra."<br>";
echo "Horas trabajadas :".$Shora."<br><br>";


$HoraNormal=40;

if($Shora > $HoraNormal){
    $HoraExtra = $Shora-$HoraNormal;
    $SalarioExtra = $ShoraExtra*$HoraExtra;
    $SalarioNormal = $ShoraNormal*$HoraNormal;
    $SalarioTotal = $SalarioExtra+$SalarioNormal;
}
else{
    $SalarioTotal = $ShoraNormal*$Shora;
}

$SalarioTotal = $SalarioTotal-($SalarioTotal*0.25);

echo "<h2>Tu salario total es: $SalarioTotal</h2>";

echo "<a href='../index.html'><Button> Volver </Button><a>";
?>
</body> 
</html> 
