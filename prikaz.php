<?php include("povezi.php");?>

<!DOCTYPE html>
<html>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="4.css" />


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
 
<div id="meni1"><font color="black">Domov</font></div>
<div id="meni2"><font color="black"><a href="onas.php">O nas</a></font></div>
<div id="meni3"><font color="black"><a href="prvaekipa.php">Prva ekipa</a></font></div>
<div id="meni4"><font color="black"><a href="mladi.php">Mladi</a></font></div>
<div id="meni5"><font color="black"><a href="razpored.php">Razpored</a></font></div>
<div id="meni6"><font color="black">Vpis</font></div>
  

</div>
<div id="header">
<img src="slika.jpg"  height="400" width="900">
</div>
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
$query="SELECT Mesto FROM lestvica  ";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo "<h3>".$row['Mesto']."</h3>";
     echo "<tr>";
 
    
    
}

?>
</div>
<div id="lestvica3">
<?php
$query="SELECT ime FROM lestvica ";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo "<h3>".$row['ime']."</h3>";
    echo "<tr>";
 
    
    
}

?>
</div>
<div id="lestvica4">
<?php
$query="SELECT tekme FROM lestvica  ";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo "<h3>".$row['tekme']."</h3>";
    
 
    
    
}

?>

</div>
<div id="lestvica5">
<?php
$query="SELECT točke FROM lestvica  ";

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