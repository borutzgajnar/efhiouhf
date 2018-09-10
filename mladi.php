<?php include("povezi.php");?>

<!DOCTYPE html>
<html>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="https://borutzgajnar.github.io/css/4.css" />


</head>
<body>
<div id="wrapper"> 
<div id="logo">
<div id="logo-levo">
<img src="logo.gif"  height="120" width="150">
</div>
<div id="logo-desno">
<img src="logo2.jpg"  height="75" width="200">
</div>
</div>

<div id="meni">
 
<div id="meni1"><font color="black"><a href="prikaz.php">Domov</a></font></div>
<div id="meni2"><font color="black"><a href="onas.php">O nas</a></font></div>
<div id="meni3"><font color="black"><a href="prvaekipa.php">Prva ekipa</a></font></div>
<div id="meni4"><font color="black">Mladi</font></div>
<div id="meni5"><font color="black"><a href="razpored.php">Razpored</a></font></div>
<div id="meni6"><font color="black">Vpis</font></div>
  

</div>
<div id="header">
<div id="header1">
</div>
<div id="header2">
<div id="u19"><font color="white" ><a href="u19.php">U19</a></font></div>
<div id="u17"><font color="white"><a href="u17.php">U17</a></font></div>
<div id="u15"><font color="white"><a href="u15.php">U15</a></font></div>
<div id="u13"><font color="white"><a href="u13.php">U13</a></font></div>
<div id="u11"><font color="white"><a href="u11.php">U11</a></font></div>
<div id="u9"><font color="white"><a href="u9.php">U9</a></font></div>


</div>
<div id="header3">
</div>
</div>
<h4 style="margin-top:40px;margin-left:250px;";>MLADI</h4>
<hr style="margin-top:-18px; ">
<div id="tekme">


<div id="tekme1">
<center><h2>Razpored tekem </h2></center>
</div>

<?php
$query="SELECT razpored FROM razpored WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo "<h3><center>".$row['razpored']."</center></h3>";
       
}

?>
<div id="tekme2">
<div id="tekme21">
<div id="logo-poravnava">
<img src="logo3.jpg"  height="80" width="80">


NK Maribor
</div>
</div>
<div id="tekme22">
<br><center><h1>VS</h1></center>

</div>
<div id="tekme23">
<div id="logo-poravnava">
<img src="logo3.jpg"  height="80" width="80">
NK Maribor
</div>
</div>

</div>
<?php
$query="SELECT razpored FROM razpored WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo "<h3><center>".$row['razpored']."</center></h3>";
       
}

?>
<div id="tekme2">
<div id="tekme21">
<div id="logo-poravnava">
<img src="logo3.jpg"  height="80" width="80">
NK Maribor
</div>
</div><div id="tekme22">
<br><center><h2>VS</h2></center>

</div><div id="tekme23">
<div id="logo-poravnava">
<img src="logo3.jpg"  height="80" width="80">
NK Maribor
</div>

</div>

</div>

</div>

<div id="novice">
<img src="slika.jpg"  height="300" width="600">
<?php
$query="SELECT Naslov,Vsebina FROM Novice WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo "<h3>".$row['Naslov']."</h3>";
    echo "<p>".$row['Vsebina']."</p>";
 
    
    
}

?>
</div>


<div id="novice1">

<img src="slika.jpg"  height="300" width="600">


<?php
$query="SELECT Naslov,Vsebina FROM Novice WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo "<h3>".$row['Naslov']."</h3>";
    echo "<p>".$row['Vsebina']."</p>";
 
    
    
}

?>
</div>
<div id="lestvica">
<div id="lestvica1">
<h1 >LESTVICA<h1>
</div>

<div id="lestvica2">
<?php
$query="SELECT Mesto FROM LESTVICA ";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo "<h3>".$row['Mesto']."</h3>";
    
 
    
    
}

?>
</div>
<div id="lestvica3">
<?php
$query="SELECT*FROM Ime ";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo "<h3>".$row['Ime']."</h3>";
    
 
    
    
}

?>
</div>
<div id="lestvica4">
<?php
$query="SELECT tekme from LESTVICA ";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo "<h3>".$row['tekme']."</h3>";
    
 
    
    
}

?>

</div>
<div id="lestvica5">
<?php
$query="SELECT točke FROM LESTVICA ";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo "<h3>".$row['točke']."</h3>";
	
    
 
    
    
}?>
</div>
</div>
<div id="novice2">
<img src="slika.jpg"  height="300" width="600">


<?php
$query="SELECT Naslov,Vsebina FROM Novice WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo "<h3>".$row['Naslov']."</h3>";
    echo "<p>".$row['Vsebina']."</p>";
 
    
    
}

?>
</div>
<div id="novice3">
<img src="slika.jpg"  height="300" width="600">


<?php
$query="SELECT Naslov,Vsebina,Avtor FROM Novice WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo "<h3>".$row['Naslov']."</h3>";
	
    echo "<p>".$row['Vsebina']."</p>";
	echo "<p>".$row['Avtor']."</p>";
 
    
    
}

?>
</div>












</div>
<div id="noga">
<div id="noga1"></div>

 </div>
     
    </body>
 
     
    </body>
</html>
