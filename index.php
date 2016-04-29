 <?php include 'global/globalFunction.php';?>
 <?php include 'layout/header.php';?>
 <div class="cool-effect-list">
 
 <?php


   // echo  cfg_dbhost."|". cfg_dbuser."|".cfg_dbpwd."|".cfg_dbname;

 $resultTitle = mysqli_query($con, "SELECT * FROM dede_archives WHERE arcrank = 0 and typeid=1   ORDER BY pubdate DESC");
 

    while($row = mysqli_fetch_array($resultTitle)){
       
 		$time = getFormatTime($row['pubdate']);//获取时间
 		 
 		$imgSrc = $row['litpic'] ?: '/images/logo.jpg';
 		 
      	echo '<div class="row list">'
//				.'<div class="col-md-3">'
//		         	 .'<img  class="list-img img-responsive" src='.$imgSrc.' />'
//		        .'</div>'
				.'<div class="col-md-12">'
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
 
</div>






 
 

 <?php include 'layout/footer.php';?> 