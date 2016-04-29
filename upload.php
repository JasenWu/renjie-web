 <?php include 'layout/header.php';?>  
 <?php include 'global/globalFunction.php';?>  

<form id="form" action="upload_file.php" method="post"
enctype="multipart/form-data" name="uploadfile" >

<div class="form-group">
    <label for="file" >Filename:</label>
    <input type="file" name="file" id="file" class="form-control" /> 
</div>
<div class="form-group">
    <label for="file" >Filepath:</label>
    <input type="text" name="path" class="form-control" />
</div>

 
<br />
<input type="submit" name="submit" value="Submit"  id="submit" />
</form>


 
 
   

 <?php include 'layout/footer.php';?> 
 <script>
// $("#submit").click(function(){

// 	console.log($("#form").serialize());
// 	$.ajax({
// 	    url:"upload_file.php",
// 	    type:'POST',
// 	    data:$("#form").serialize(),
// 	    success:function(){
// 		    alert("success")}
	    
// 		})
// });




</script>
 