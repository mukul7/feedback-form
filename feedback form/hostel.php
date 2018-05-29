<?php
session_start();
if(!isset($_SESSION["ro"]))
header('location:loglogin.php'); 
$now=time();
if($now>$_SESSION['expire'])
{
	echo "<script>alert('session is expired');</script>";
	session_destroy();
	header('location:loglogin.php');
}
?>	<html>
<head><title>hostel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="hostel.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script>
    function f(){
        location.href="thank-you.html";
    }
</script>
</head>
<body>
<div class="container">
    <div id="head" class="row text-center">
      <h1>  Welcome <?php echo $_SESSION["fn"]." ".$_SESSION["ln"]; ?>!!</h1>
    </div>
    <div class="row nav">
            <div class="topnav">
                <a class="active" href="loglogin.html">Home</a>
                <a href="https://www.chitkara.edu.in/?s=hostel">Hostel</a>
                <a href="https://www.chitkara.edu.in/?s=day+scholar">Day Scholar</a>
                <a href="https://www.chitkara.edu.in/">About</a>
                <a href="creators.html">Creators</a>
              </div>
        </div>
    <br><br><br>
    <div class="row">
        <div class="col-sm-6">
            <div class="fix">
                <img class="myimg" src="4.jpg">
                <center><br>
                </center><br><br>
                </div>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
        <form action="question.php" method="post">
            <table>
                <tr>
                    <table>
                    <tr><td>Q.1 How is the food?</td></tr>
                    <tr><td><input type="radio" value="Good" name="opt1">good<br>
                        <input type="radio" value="Very good" name="opt1">very good<br>
                        <input type="radio" value="Okay" name="opt1">okay<br>
                        <input type="radio" value="Bad" name="opt1">bad<br></td></tr>
                </table>
                </tr>
                <br><br>
                <tr>
                        <table>
                                <tr><td>Q.2 How is the internet facility?</td></tr>
                                  <tr><td><input type="radio" value="Good" name="opt2">good<br>
                        <input type="radio" value="Very good" name="opt2">very good<br>
                        <input type="radio" value="Okay" name="opt2">okay<br>
                        <input type="radio" value="Bad" name="opt2">bad<br></td></tr>
                            </table>
                </tr>
                <br><br>
                <tr>
                        <table>
                                <tr><td>Q.3 how is the security?</td></tr>
                                  <tr><td><input type="radio" value="Good" name="opt3">good<br>
                        <input type="radio" value="Very good" name="opt3">very good<br>
                        <input type="radio" value="Okay" name="opt3">okay<br>
                        <input type="radio" value="Bad" name="opt3">bad<br></td></tr>
                            </table>
                </tr>
                <br><br>
                <tr>
                        <table>
                                <tr><td>Q.4 how is the cleanliness?</td></tr>
                                  <tr><td><input type="radio" value="Good" name="opt4">good<br>
                        <input type="radio" value="Very good" name="opt4">very good<br>
                        <input type="radio" value="Okay" name="opt4">okay<br>
                        <input type="radio" value="Bad" name="opt4">bad<br></td></tr></table>
                </tr>
                <br><br>
                <tr>
                        <table>
                                <tr><td>Q.5 how are the rooms?</td></tr>
  <tr><td><input type="radio" value="Good" name="opt5">good<br>
                        <input type="radio" value="Very good" name="opt5">very good<br>
                        <input type="radio" value="Okay" name="opt5">okay<br>
                        <input type="radio" value="Bad" name="opt5">bad<br></td></tr>                            </table>
                </tr>
                <br><br>
                <tr>
                        <table>
                                <tr><td>Q.6 how are the sport facilities?</td></tr>
                                  <tr><td><input type="radio" value="Good" name="opt6">good<br>
                        <input type="radio" value="Very good" name="opt6">very good<br>
                        <input type="radio" value="Okay" name="opt6">okay<br>
                        <input type="radio" value="Bad" name="opt6">bad<br></td></tr></table>
                </tr>
            </table>
            <br><br>
            <table>
                <tr><td>
                    Comments:
                </td></tr>
                <tr><td>
                    <textarea rows="7" cols="50" ></textarea>
                    <br><br>
                </td></tr>
            </table>
            <table>
            <tr><td><button onClick="f()">SUBMIT</button></td>
            <td><button>RESET</button></td>
        </tr>
        </table>
        </form>
        </div>
       
    </div>
    <br><br> 
    <div class="row bottom">

    </div>
</div>
</body>
</html>
