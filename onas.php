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
 
<div id="meni1"><font color="black"><a href="prikaz.php">Domov</a></font></div>
<div id="meni2"><font color="black">O nas</font></div>
<div id="meni3"><font color="black"><a href="prvaekipa.php">Prva ekipa</a></font></div>
<div id="meni4"><font color="black"><a href="mladi.php">Mladi</a></font></div>
<div id="meni5"><font color="black"><a href="razpored.php">Razpored</a></font></div>
<div id="meni6"><font color="black">Vpis</font></div>
  

</div>
<div id="header">
<img src="portoval.jpg"  height="400" width="900">
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

<?php
$query="SELECT Naslov,Vsebina,Vsebina2,Vsebina3,Vsebina4,Avtor FROM Novice WHERE ID='3'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo "<h1>".$row['Naslov']."</h1>";
    echo "<p>".$row['Vsebina']."</p>";
	echo "<p>".$row['Vsebina2']."</p>";
	echo "<p>".$row['Vsebina3']."</p>";
	echo "<p>".$row['Vsebina4']."</p>";
	
  echo "<h5>".$row['Avtor']."</h5>";
    
    
}

?>
</div>



<div id="noga">
<div id="noga1"> <hr>
<center>Copyright @ Matej Mlakar</center></div>

 </div>
     </div>

 
     
    </body>
</html>