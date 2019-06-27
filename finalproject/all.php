<?php
include("config/db.php");
@$get=$_GET['id'];
?>
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
	   <span>  Latest Post  </span>
	  </div>
	  </div>
	  </div>
	<div class="post">
	<?php
	if($get){
		$select="select * from news where cat='$get'";
		}
		else{
	$select="select * from news order by id Desc limit 0,3";
}
	$select_run=mysqli_query($con,$select);
	$count=mysqli_num_rows($select_run);
	if($count>0)
	{
		while($row=mysqli_fetch_array($select_run))
		{
		 $name=$row[ 'Name' ]; 	
		 $text=$row[ 'Text' ]; 	
		 $date=$row[ 'Date' ]; 	
		 $img=$row[ 'img' ]; 	
			
	
	?>
	<div class="row">
	<div class="col-md-4" style="border:0px solid">  
	<img src="img/<?php echo $img?>" class="img img-thumbnail" >
	</div>
	<div class="col-md-8">
   <h5 style="font-weight: bold;color: #333;color:blue"> <?php echo $name ?> </h5>
   
   <br>
    <p style="text-align:justify" ><?php echo $text ?>
	</p>
	</div>
	<br>
 </div>
 <br>
	<?php }}

else
{
	echo "<h4><center>Sorry No Post Available</center></h4>";
}

?>
	
 </div>
  
	 </div>
	

	<?php include("include/side.php");
	?>
	<div class="footer">
  <p>Copyright @ 2019  </p>
</div>
</div>
</div>
</body>
</html>

