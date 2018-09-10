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
<div id="meni2"><font color="black"><a href="onas.php">O nas</a></font></div>
<div id="meni3"><font color="black"><a href="prvaekipa.php">Prva ekipa</a></font></div>
<div id="meni4"><font color="black"><a href="mladi.php">Mladi</a></font></div>
<div id="meni5"><font color="black">Razporedi</font></div>
<div id="meni6"><font color="black">Vpis</font></div>
  

</div>
<div id="header">
<img src="portoval.jpg"  height="400" width="900">
</div>




<table>
  <tr>
    <th>Selekcija</th>
	<th>Ponedeljek</th>
	<th>Torek</th>
	<th>Sreda</th>
	<th>Četrtek</th>
	<th>Petek</th>
	<th>Sobota</th>
	<th>Nedelja</th>
    
  </tr>
<tr>
    <th>
	<?php
$query="SELECT Selekcija FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Selekcija'];
   
 
    
    
}

?></th>
    <td>		<?php
$query="SELECT Ponedeljek FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Ponedeljek'];
   
 
    
    
}

?></td>
	<td>		<?php
$query="SELECT Torek FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Torek'];
   
 
    
    
}

?></td>
	<td>		<?php
$query="SELECT Sreda FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Sreda'];
   
 
    
    
}

?></td>
	<td>	<?php
$query="SELECT Četrtek FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Četrtek'];
   
 
    
    
}

?></td>
	<td>	<?php
$query="SELECT Petek FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Petek'];
   
 
    
    
}

?></td>
	<td>	<?php
$query="SELECT Sobota FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Sobota'];
   
 
    
    
}

?></td>
	<td>	<?php
$query="SELECT Nedelja FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Nedelja'];
   
 
    
    
}

?></td>
  </tr>
  <tr>
  <tr>
    <th>
	<?php
$query="SELECT Selekcija FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Selekcija'];
   
 
    
    
}

?></th>
    <td>		<?php
$query="SELECT Ponedeljek FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Ponedeljek'];
   
 
    
    
}

?></td>
	<td>		<?php
$query="SELECT Torek FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Torek'];
   
 
    
    
}

?></td>
	<td>		<?php
$query="SELECT Sreda FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Sreda'];
   
 
    
    
}

?></td>
	<td>	<?php
$query="SELECT Četrtek FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Četrtek'];
   
 
    
    
}

?></td>
	<td>	<?php
$query="SELECT Petek FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Petek'];
   
 
    
    
}

?></td>
	<td>	<?php
$query="SELECT Sobota FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Sobota'];
   
 
    
    
}

?></td>
	<td>	<?php
$query="SELECT Nedelja FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Nedelja'];
   
 
    
    
}

?></td>
  </tr>
  <tr>
    <th>
	<?php
$query="SELECT Selekcija FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Selekcija'];
   
 
    
    
}

?></th>
    <td>		<?php
$query="SELECT Ponedeljek FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Ponedeljek'];
   
 
    
    
}

?></td>
	<td>		<?php
$query="SELECT Torek FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Torek'];
   
 
    
    
}

?></td>
	<td>		<?php
$query="SELECT Sreda FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Sreda'];
   
 
    
    
}

?></td>
	<td>	<?php
$query="SELECT Četrtek FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Četrtek'];
   
 
    
    
}

?></td>
	<td>	<?php
$query="SELECT Petek FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Petek'];
   
 
    
    
}

?></td>
	<td>	<?php
$query="SELECT Sobota FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Sobota'];
   
 
    
    
}

?></td>
	<td>	<?php
$query="SELECT Nedelja FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Nedelja'];
   
 
    
    
}

?></td>
  </tr>
  <tr>
    <th>
	<?php
$query="SELECT Selekcija FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Selekcija'];
   
 
    
    
}

?></th>
    <td>		<?php
$query="SELECT Ponedeljek FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Ponedeljek'];
   
 
    
    
}

?></td>
	<td>		<?php
$query="SELECT Torek FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Torek'];
   
 
    
    
}

?></td>
	<td>		<?php
$query="SELECT Sreda FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Sreda'];
   
 
    
    
}

?></td>
	<td>	<?php
$query="SELECT Četrtek FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Četrtek'];
   
 
    
    
}

?></td>
	<td>	<?php
$query="SELECT Petek FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Petek'];
   
 
    
    
}

?></td>
	<td>	<?php
$query="SELECT Sobota FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Sobota'];
   
 
    
    
}

?></td>
	<td>	<?php
$query="SELECT Nedelja FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Nedelja'];
   
 
    
    
}

?></td>
  </tr>
  <tr>
    <th>
	<?php
$query="SELECT Selekcija FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Selekcija'];
   
 
    
    
}

?></th>
    <td>		<?php
$query="SELECT Ponedeljek FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Ponedeljek'];
   
 
    
    
}

?></td>
	<td>		<?php
$query="SELECT Torek FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Torek'];
   
 
    
    
}

?></td>
	<td>		<?php
$query="SELECT Sreda FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Sreda'];
   
 
    
    
}

?></td>
	<td>	<?php
$query="SELECT Četrtek FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Četrtek'];
   
 
    
    
}

?></td>
	<td>	<?php
$query="SELECT Petek FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Petek'];
   
 
    
    
}

?></td>
	<td>	<?php
$query="SELECT Sobota FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Sobota'];
   
 
    
    
}

?></td>
	<td>	<?php
$query="SELECT Nedelja FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Nedelja'];
   
 
    
    
}

?></td>
  </tr>
    <th>
	<?php
$query="SELECT Selekcija FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Selekcija'];
   
 
    
    
}

?></th>
    <td>		<?php
$query="SELECT Ponedeljek FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Ponedeljek'];
   
 
    
    
}

?></td>
	<td>		<?php
$query="SELECT Torek FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Torek'];
   
 
    
    
}

?></td>
	<td>		<?php
$query="SELECT Sreda FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Sreda'];
   
 
    
    
}

?></td>
	<td>	<?php
$query="SELECT Četrtek FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Četrtek'];
   
 
    
    
}

?></td>
	<td>	<?php
$query="SELECT Petek FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Petek'];
   
 
    
    
}

?></td>
	<td>	<?php
$query="SELECT Sobota FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Sobota'];
   
 
    
    
}

?></td>
	<td>	<?php
$query="SELECT Nedelja FROM razpored2 WHERE ID='1'";

$result= mysqli_query($con,$query) or die('Error, query failed big time');

while($row=mysqli_fetch_array($result))
{
    echo $row['Nedelja'];
   
 
    
    
}

?></td>
  </tr>
  
</table>




<div id="noga">
<div id="noga1"></div>

 </div>
     </div>