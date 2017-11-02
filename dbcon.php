  <?php

$host = "localhost";
$usernm = "root";
$pw = "";
$dbnm = "accinv";

$con=mysqli_connect($host,$usernm,$pw,$dbnm);
 
if(mysqli_connect_errno($con))
{
		echo "Failed to connect:" .mysqli_connect_errno($con);
}
 
?>
