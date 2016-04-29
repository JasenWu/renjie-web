<?php include 'global/globalFunction.php';?>
<?php include 'layout/header.php';?>


 <?php
 	$aid = $_GET['aid'];//文章IDdd
    $page = $_GET['page'];//页面编号

 

 	//文章祥情
     $resultTitle =  mysqli_query($con, "SELECT * FROM dede_archives WHERE id = ".$aid);

     $rowTitle = mysqli_fetch_array($resultTitle);
 	 $resultDetails = mysqli_query($con, "SELECT body FROM dede_addonarticle WHERE aid = ".$aid);
	 $rowDetails = mysqli_fetch_array($resultDetails);

     echo "<h1>". $rowTitle['title']."</h1>";
	 echo $rowDetails['body'];

    // while($row = mysqli_fetch_array($result))
    //   {
    //   echo $row['body'];  
    //   }


echo '<br/>第'.$page.'页';
 ?>
 <a href="javascript:window.history.go(-1)">返回</a>

 

 <?php include 'layout/footer.php';?> 