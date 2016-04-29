 

<?php
 



$imgname = $_FILES["file"]["name"]; //获取上传的文件名称
$filetype = pathinfo($imgname, PATHINFO_EXTENSION);//获取后缀
$newname = date("Ymdhis").".".$filetype; //构建新名称
$path = $_POST['path'];//文件夹
 

 
if ($_FILES["file"]["size"] < 1200000000050)
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "demo: " . iconv('utf-8','gb2312',$_FILES["file"]["tmp_name"]) . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("demo/".$path ."/"  . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file(iconv('utf-8','gb2312',$_FILES["file"]["tmp_name"]),
      "demo/".$path ."/" .$newname);
      echo "Stored in: " . "demo/".$path ."/" . $newname;
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>
 