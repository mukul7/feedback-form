<?php
session_start();
$q1=$_REQUEST["opt1"];
$q2=$_REQUEST["opt2"];
$q3=$_REQUEST["opt3"];
$q4=$_REQUEST["opt4"];
$q5=$_REQUEST["opt5"];
$q6=$_REQUEST["opt6"];
$q7=$_SESSION["ro"];
$conn=new mysqli("localhost","root","","feedback");
$no=time();
if($no>$_SESSION["expire"])
{
	echo "session is expired you will be redirected in 5 seconds.";
	session_destroy();
$sql2="DELETE * from login where roll no=$q7";
mysqli_query($conn,$sql2);
header("refresh:5,url=hd.html");
	
	
}
else{
$sql1="INSERT INTO question VALUES('$q1','$q2','$q3','$q4','$q5','$q6','$q7')";
 if ($conn->query($sql1) === TRUE) {

	echo "<script>
	alert('feedback saved');

	window.location.href='hd.html';
	</script>";
	session_destroy();
}
}


?>