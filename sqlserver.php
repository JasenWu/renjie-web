<?php include 'global/globalFunction.php';?>
<?php include 'layout/header.php';?>
<div class="cool-effect-list">
 
 <?php 
	
   // echo  cfg_dbhost."|". cfg_dbuser."|".cfg_dbpwd."|".cfg_dbname;
	$result = mysqli_query($con, "SELECT * FROM dede_archives WHERE arcrank = 0 and typeid=2  ORDER BY pubdate ASC");
 $resultTotal =  mysqli_query($con, "SELECT count(*) FROM dede_archives  WHERE arcrank = 0 and typeid=2");
 $rowTotal = mysqli_fetch_array($resultTotal);
 echo  "一共为您查询到".$rowTotal[0]."条数据";
 $page = 0;
	
    while($row = mysqli_fetch_array($result)){
		$page++;
       
 		$time = getFormatTime($row['pubdate']);//获取时间
 		 
 		$imgSrc = $row['litpic'] ?: '/images/logo.jpg';
 		 
      	echo '<div class="row list">'
//				.'<div class="col-md-3">'
//		         	 .'<img  class="list-img img-responsive" src='.$imgSrc.' />'
//		        .'</div>'
				.'<div class="col-md-12">'
					.'<h4>'
						.'<a href="details.php?aid='. $row['id'].'&page='.$page.'">'. $row['title'].'</a>'
						.'<span class="pull-right">page'. $page.'</span>'
						//.'<span class="pull-right">'. $time.'</span>'
					.'</h4>'
					//.'<p>'. $row['description'].'</p> '
				.'</div>'
			.'</div>'; 
      }
     
       
//echo phpinfo();
    



 ?>
 
</div>






 
 

 <?php include 'layout/footer.php';?> 