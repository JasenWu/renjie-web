 </div>
 </div>
 </div>
 </div>
 </div>
 <footer class="footer">
 <div class="container">
 <div class="row">
 <div class="col-md-12 text-center">
 <?php 
 
 
     $resultSystem = mysqli_query($con, "SELECT value FROM dede_sysconfig WHERE aid = 28");
	 $resultSystemRow = mysqli_fetch_array($resultSystem);
	 //var_dump($resultSystemRow['value']);
	 echo $resultSystemRow['value']; 
 
	 
	 
?>
 
 
 

 </div>
 </div>
 </div>
 </footer>

   <script type="text/javascript" src="js/global/jquery.js"></script>

 
 
    <script type="text/javascript" src="bootstrap/dist/js/bootstrap.js"></script>

   
   <?php
     mysqli_close($con);
   ?>
   
   <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1256197754'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/stat.php%3Fid%3D1256197754%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
  	<script type="text/javascript" src="js/main.js"></script>
 
 </body>

 </html>