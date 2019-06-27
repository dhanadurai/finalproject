	<?php  
	include("config/db.php");
	?>
	<div class="col-md-4"> 
	 <div class="line">
	  <div class="right">
	   <span>  Latest Post  </span>
	  </div>
	  </div>
<br>
	  	  
	
	<?php
	$select="select * from news order by id Desc limit 0,1";
	$select_run=mysqli_query($con,$select);
	$count=mysqli_num_rows($select_run);
	if($count>0)
	{
		while($row=mysqli_fetch_array($select_run))
		{
			$id=$row['id'];
			$name=$row['Name'];
			$img=$row['img']; 
	?>
	<div class="row">
	<div class=col-md-4> <img class="rounded" src="img/<?php echo $img ?>" style="width: 100px;
	height: 80px padding: 5px;" > 
	</div>
	<div class=col-md-8> <br> <span class="side_post"><a href=viewcontent.php?id=<?php echo $id?>><?php echo $name?> </a> </span> </div>
	</div>
	<?php }}
 else
 {
	 echo "<h5><center>Sorry no post available</center></h5>";
	 }
	
	?>
	<br>


	
	<?php
	$select="select * from news order by id Desc limit 1,2";
	$select_run=mysqli_query($con,$select);
	$count=mysqli_num_rows($select_run);
	if($count>0)
	{
		while($row=mysqli_fetch_array($select_run))
		{
			$id=$row['id'];
			$name=$row['Name'];
			$img=$row['img']; 
	?>
 	  <div class="row">	
	<div class=col-md-4> <img class="rounded" src="img/<?php echo $img ?>" style="width: 100px;
	height: 80px padding: 5px;" > 
	</div>
	<div class=col-md-8> <br> <span class="side_post"><a href=viewcontent.php?id=<?php echo $id?>><?php echo $name?> </a> </span> </div>
	</div>
 <br>
 <?php } }
 else
 {
	 echo "<h5><center>Sorry no post available</center></h5>";
	 }
 ?>
 
 	 <div class="line">
	  <div class="right">
	   <span> Categories </span>
	  </div>
	  </div>
	  <div class="cat">
		  <?php
		  $cat="select * from cat order by id Desc";
		  $run_cat=mysqli_query($con,$cat);
		  $count_cat=mysqli_num_rows($run_cat);
		  if($count_cat>0)
		  {
			  while($row_cat=mysqli_fetch_array($run_cat)){
				  $id_cat=$row_cat['id'];
				  $name_cat=$row_cat['Name'];
				 
		  
		  ?>
	  <a href="all.php?id=<?php echo $id_cat?>"><?php echo $name_cat?> </a>
	 	 <?php } }
	 	 else{
			 echo "<center><h5>Sorry No Catagories Available</h5></center>";
			 }
	 	 ?>
	 	 </div> 
	
</div>
