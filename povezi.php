<?php


$con=mysqli_connect($server='localhost', $username='root', $password='');
mysqli_set_charset($con,'utf8');
if(!$con)
{
 die('Težava pri povezovanju'.mysqli_error());   
}

mysqli_select_db($con,"Novice");


?> 