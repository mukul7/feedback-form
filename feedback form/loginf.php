<?php
session_start();
$fn=$_REQUEST["firstname"];
$ln=$_REQUEST["lastname"];
$fan=$_REQUEST["father"];
$ro=$_REQUEST["roll"];
$co=$_REQUEST["cour"];
$de=$_REQUEST["dept"];
$no=time();
if($no>$_SESSION["expire"])
{
	echo "session is expired and you need to fill the credentials again.You are being redirected to the home page in 5 seconds";
	session_destroy();
	header("refresh:5,url=hd.html");
	
}
else
{
$conn = new mysqli("localhost", "root", "", "feedback");
 $sql = "INSERT INTO login VALUES('$fn', '$ln', '$fan','$ro','$co','$de')";
 if ($conn->query($sql) === TRUE) {
	 $_SESSION["ro"]=$ro;
	 $_SESSION["fn"]=$fn;
	 $_SESSION["ln"]=$ln;
    echo "<script>
	alert('New record created successfully');
	window.location.href='hostel.php';
	</script>";
 }
 

}
?>