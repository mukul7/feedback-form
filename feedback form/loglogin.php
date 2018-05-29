 <?php 
 session_start();
 $_SESSION['start']=time();
  
 $_SESSION['expire']=$_SESSION['start']+300;
 ?>
 <html>
<head><title>login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="icon.png">
  <script >
  function depart(srt)
  {
	  
	       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("dep").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "dept.php?q="+srt, true);
        xmlhttp.send();
    
		  
  }
  
  </script>
    <style>
        .col-sm-5{
            min-height: 487px;
            min-width: 457px;
        }
    #main{
        background-color: #4caf50;
    }
    input{
    font-family: Arial, Helvetica, bold;
    border:0;
    padding: 0;
    outline: 0;
    
    width:100%;
    height:25px;
    opacity: 0.7;
    transition-duration: 0.4s;
    text-align: center;
    font-size: 18px;
    font-family: arial,bold;
}
input:focus{
    opacity:0.6;
    border: 2px solid green;
    height:35px;
   
    
}

table{
    border-collapse: separate;
    border-spacing: 0 15px;
    
}
button{
    padding: 0;
    border:2px solid white;
    height:100px;
    width:200px;
    background-color: #4caf50;
    color:white;
    transition-duration: 1s;
    font-size: 24px;
}
button:hover{
    color:#4caf50;
    background-color: white;
    border:2px solid #4caf50;
}
#first{
    background-image: url('fbp1.jpg');
    border-radius: 50%;
color:green;
}
table{
    top:25%;
    left:10%;
    position: relative;
}

    </style>        
        
</head>
<body>
<div class="container">
<div class="row text-center" id="main">
        <h1>FeedBack Form</h1>
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
<div class="row middle" style="height:30px;"></div>
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-5" id='first'>
        <br><br><br> 
        <h1 id='1'><br>&nbsp; &nbsp;Welcome To FeedBack.</h1>
    </div>
    <div class="col-sm-5"><center>
    <form action="loginf.php" method="post">
            <table cellspacing="5px">
            <tr><td><input type='text' placeholder="First Name" name="firstname" required></td></tr>
            <tr><td><input type='text' placeholder="Last Name" name="lastname" required></td></tr>
            <tr><td><input type='text' placeholder="Father's Name" name="father" required></td></tr>
            <tr><td><input type='text' placeholder="Roll Number" name="roll" required></td></tr>
            <tr><td><select onChange="depart(this.value)" name="cour" required><option>Select course</option>
            <option value="B.tech">B.tech</option><option  value="BCA">BCA</option><option  value="Pharmacy">Pharmacy</option><option value="Diploma">Diploma</option></select></td></tr>
            <tr><td><select id="dep" name="dept" required><option >First choose course</option></select></td></tr>
            <tr><td><center><input type="submit" value="Move To FeedBack"></button></center></td></tr>
        </table></center>
        </form>
    </div>
    <div class="col-sm-2"></div>
</div>
    
</div>

</div>
</body>
</html>
