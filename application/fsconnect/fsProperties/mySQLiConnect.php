<?php
/*** mysql hostname ***/
$Hostname = 'localhost';

/*** mysql username ***/
$Username = 'rndadmin';

/*** mysql password ***/
$Password = 'rndadmin';

/*** mysql database name ***/
$DbName ='rndmod1';

/*** create a new mysqli object ***/
$mysqli = @new mysqli($Hostname, $Username, $Password, $DbName);

?>

