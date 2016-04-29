 
 <?php include 'uploads/data/common.inc.php'; ?> 
 <?php include 'global/globalFunction.php';?>   


<?php 
	
   // echo  cfg_dbhost."|". cfg_dbuser."|".cfg_dbpwd."|".cfg_dbname;
 
	$searchVal = $_GET["searchVal"];
 
 
 

	//$result = mysqli_query($con, "SELECT * FROM dede_archives WHERE title =".$searchVal.""  );
 
 
	
    $result = mysqli_query($con, "SELECT * FROM dede_archives WHERE title LIKE '%$searchVal%'");
 
 
 
	
    while($row = mysqli_fetch_array($result)){
       
 		$time = getFormatTime($row['pubdate']);//获取时间
 		 
 		$imgSrc = $row['litpic'] ?: '/images/logo.jpg';
 		 
      	echo '<div class="row list">'
				.'<div class="col-md-3">'
		         	 .'<img  class="list-img img-responsive" src='.$imgSrc.' />'
		        .'</div>'
				.'<div class="col-md-9">'
					.'<h4>'
						.'<a href="details.php?aid='. $row['id'].'">'. $row['title'].'</a>'
						.'<span class="pull-right">'. $time.'</span>'
					.'</h4>'
					.'<p>'. $row['description'].'</p> '
				.'</div>'
			.'</div>'; 
      }
     
     
       
    //echo phpinfo();
    



 ?>