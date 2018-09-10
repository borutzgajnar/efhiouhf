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
<div id="meni4"><font color="black"><a href="mladi.php">Mladi</a></font></div>
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
<center><h4>U13</h4></center>
<hr style="margin-top:-18px; ">
<hr style="margin-top:25px; color:green;">
<h3 style="color:grey; margin-top:10px;";>EKIPA 2014/15</h3>
<hr style="margin-top:10px; ">
<h5>GOLMANI</h5>
<div id="igralci">
<div id="vrsta">
<?php
$query="SELECT Stevilka,Ime,Pozicija FROM Igralci  WHERE Vrsta='1' && Pozicija='Golman'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
echo "<div id='boxigralec'>";
 echo "<div id='boxigralec1'>";
 echo "</div>";
 echo "<div id='boxigralec2'>";
 echo "<div id='boxigralec3'>";
 
$css="margin-top:30px; ";
    echo "<h2 style=$css >".$row['Stevilka']."</h2>";
	
   
 echo "</div>";
echo "<div id='boxigralec4'>";

 echo "<h4>".$row['Ime']."</h4>";
	$css1="margin-top:-15px; ";
	echo  "<p style=$css1 >".$row['Pozicija']."</p>";
echo "</div>";
echo "</div>";
echo "</div>";

}
?>

</div>
<?php
$query="SELECT Stevilka,Ime,Pozicija FROM Igralci WHERE Vrsta='2' && Pozicija='Golman'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
echo "<div id='vrsta'>";
echo "<div id='boxigralec'>";
 echo "<div id='boxigralec1'>";
 echo "</div>";
 echo "<div id='boxigralec2'>";
 echo "<div id='boxigralec3'>";
 
$css="margin-top:30px; ";
    echo "<h2 style=$css >".$row['Stevilka']."</h2>";
	
   
 echo "</div>";
echo "<div id='boxigralec4'>";

 echo "<h4>".$row['Ime']."</h4>";
	$css1="margin-top:-15px; ";
	echo  "<p style=$css1 >".$row['Pozicija']."</p>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";
}
?>

</div>



<h5 style="margin-top:60px;">BRANILCI</h5>
<div id="igralci">
<div id="vrsta">
<?php
$query="SELECT Stevilka,Ime,Pozicija FROM Igralci  WHERE Vrsta='1' && Pozicija='Obramba'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
echo "<div id='boxigralec'>";
 echo "<div id='boxigralec1'>";
 echo "</div>";
 echo "<div id='boxigralec2'>";
 echo "<div id='boxigralec3'>";
 
$css="margin-top:30px; ";
    echo "<h2 style=$css >".$row['Stevilka']."</h2>";
	
   
 echo "</div>";
echo "<div id='boxigralec4'>";

 echo "<h4>".$row['Ime']."</h4>";
	$css1="margin-top:-15px; ";
	echo  "<p style=$css1 >".$row['Pozicija']."</p>";
echo "</div>";
echo "</div>";
echo "</div>";

}
?>

</div>
<?php
$query="SELECT Stevilka,Ime,Pozicija FROM Igralci WHERE Vrsta='2' && Pozicija='Obramba'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
echo "<div id='vrsta'>";
echo "<div id='boxigralec'>";
 echo "<div id='boxigralec1'>";
 echo "</div>";
 echo "<div id='boxigralec2'>";
 echo "<div id='boxigralec3'>";
 
$css="margin-top:30px; ";
    echo "<h2 style=$css >".$row['Stevilka']."</h2>";
	
   
 echo "</div>";
echo "<div id='boxigralec4'>";

 echo "<h4>".$row['Ime']."</h4>";
	$css1="margin-top:-15px; ";
	echo  "<p style=$css1 >".$row['Pozicija']."</p>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";
}
?>

</div>

 <h5 style="margin-top:60px;">VEZISTI</h5>
<div id="igralci">
<div id="vrsta">
<?php
$query="SELECT Stevilka,Ime,Pozicija FROM Igralci  WHERE Vrsta='1' && Pozicija='Vezist'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
echo "<div id='boxigralec'>";
 echo "<div id='boxigralec1'>";
 echo "</div>";
 echo "<div id='boxigralec2'>";
 echo "<div id='boxigralec3'>";
 
$css="margin-top:30px; ";
    echo "<h2 style=$css >".$row['Stevilka']."</h2>";
	
   
 echo "</div>";
echo "<div id='boxigralec4'>";

 echo "<h4>".$row['Ime']."</h4>";
	$css1="margin-top:-15px; ";
	echo  "<p style=$css1 >".$row['Pozicija']."</p>";
echo "</div>";
echo "</div>";
echo "</div>";

}
?>

</div>
<?php
$query="SELECT Stevilka,Ime,Pozicija FROM Igralci WHERE Vrsta='2' && Pozicija='Vezist'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
echo "<div id='vrsta'>";
echo "<div id='boxigralec'>";
 echo "<div id='boxigralec1'>";
 echo "</div>";
 echo "<div id='boxigralec2'>";
 echo "<div id='boxigralec3'>";
 
$css="margin-top:30px; ";
    echo "<h2 style=$css >".$row['Stevilka']."</h2>";
	
   
 echo "</div>";
echo "<div id='boxigralec4'>";

 echo "<h4>".$row['Ime']."</h4>";
	$css1="margin-top:-15px; ";
	echo  "<p style=$css1 >".$row['Pozicija']."</p>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";
}
?>

</div>

 <h5 style="margin-top:60px;">NAPADALCI</h5>
<div id="igralci">
<div id="vrsta">
<?php
$query="SELECT Stevilka,Ime,Pozicija FROM Igralci  WHERE Vrsta='1' && Pozicija='Napadalec'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
echo "<div id='boxigralec'>";
 echo "<div id='boxigralec1'>";
 echo "</div>";
 echo "<div id='boxigralec2'>";
 echo "<div id='boxigralec3'>";
 
$css="margin-top:30px; ";
    echo "<h2 style=$css >".$row['Stevilka']."</h2>";
	
   
 echo "</div>";
echo "<div id='boxigralec4'>";

 echo "<h4>".$row['Ime']."</h4>";
	$css1="margin-top:-15px; ";
	echo  "<p style=$css1 >".$row['Pozicija']."</p>";
echo "</div>";
echo "</div>";
echo "</div>";

}
?>

</div>
<?php
$query="SELECT Stevilka,Ime,Pozicija FROM Igralci WHERE Vrsta='2' && Pozicija='Napadalec'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
echo "<div id='vrsta'>";
echo "<div id='boxigralec'>";
 echo "<div id='boxigralec1'>";
 echo "</div>";
 echo "<div id='boxigralec2'>";
 echo "<div id='boxigralec3'>";
 
$css="margin-top:30px; ";
    echo "<h2 style=$css >".$row['Stevilka']."</h2>";
	
   
 echo "</div>";
echo "<div id='boxigralec4'>";

 echo "<h4>".$row['Ime']."</h4>";
	$css1="margin-top:-15px; ";
	echo  "<p style=$css1 >".$row['Pozicija']."</p>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";
}
?>

</div>
<div id="noga">
<div id="noga1"></div>

 </div>
     </div>
    </body>
 
     
    </body>
</html>
