<?php
include("config/db.php");
?>

<!Doctype html>
<html>
<head>
  <meta charset="UTF-8">
   <meta name="Author" content="Dhananchezhiyan">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
 <link rel="stylesheet" href="css/fontawesome.min.css" type="text/css">
 <link rel="stylesheet" href="css/style.css" type="text/css">

</head>
<body class="main">
<div class="container"  style="background:white"> 
<header class="navbar navbar-inverse navbar-fixed-top" style="background-color:black">
  <div class="container">
        <a class="navbar-brand  navbar-fixed-left" href="#" style="cursor: pointer"> Infiniti Software Solutions </a>
		<ul class="nav navbar-header">
      <li class="active">  <a href="index.php">&nbsp Home </a> </li>
          <li><a href="about.php">&nbsp About</a></li>
     <li><a href="contacts.php ">&nbsp Contacts </a></li>
    </ul>
	</div>
    </header>
    <div class="row">
	 <div class="col-md-8">
	 <h2 class="heading"> Infiniti Articals </h2>
	 
	 </div>
	 </div>
	 <br>
	 <div class="container"  style="background:white"> 
<nav class="navbar navbar-inverse " style="background-color:black">
  <div class="container-fluid">
       	<ul class="nav navbar-header  ">
      <li class="active"><a href="index.php">&nbsp Latest News</a></li>
     	      <li><a href="all.php">&nbsp All News</a></li>
     	      <li> <a href="logout.php">&nbsp Logout</a></li>

    </ul>
	</div>
	</nav>
	</div>
	<div class="row">
	 <div class="col-md-8">
	<br>
 <div class="col-md-4"> 
	 <div class="line1">
	  <div class="left">
	   <span> &nbsp Contacts US </span>
	  </div>
	  </div>

	  <br>
	  <br>

	  <form action="contacts.php" method="POST">
	  <label for="name"> Write Your Name </label>
	  <input id="name" type="text" name="name" required class="form-control"> <br>
 
 	  <label for="email"> Write Your Email </label>
	  <input id="name" type="text" name="email" required class="form-control"> <br>
 
 	  <label for="msg"> Write Your Comments </label>
	  <textarea class="form-control" name="msg" id="msg"></textarea> <br>

	  <button  name="submit" class="btn btn-success"> Send </button>

	  </form>
	  
	  <?php
	  
	  If(isset($_POST['submit'])){
		  $name=$_POST['name'];
          $email=$_POST['email'];
		   $msg=$_POST['msg'];
		  
		  $insert="insert into contact(name,email,msg) values('$name','$email','$msg')";
		  $run_in=mysqli_query($con,$insert);
		  if(run_in){
			  echo "<script>alert('your message has been sent')</script>";
	  }
	  else{
	  echo "<script>alert('your message has been not sent')</script>";
	  }
  }
	  ?>
	  
	  </div>
	  <br>
	  <br>
	
<br> <br> 
	
	<div class="footer">
  <p>Copyright @ 2019 </p>
</div>
</div>
</div>
</body>
</html>
