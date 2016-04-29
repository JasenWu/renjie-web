<?php include 'kint-1.0.6/Kint.class.php';?>
<?php include 'uploads/data/common.inc.php'; ?>


<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/logo-small.jpg" />

    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>乐乐的空间</title>
    <!-- Bootstrap -->
    <link rel="stylesheet/less" href="style/myweb.less" />
    <script src="js/global/less-1.4.2.min.js"></script>
 
     
     
    <script type="text/javascript" src="syntaxhighlighter_3.0.83/scripts/shCore.js"></script>
	<script type="text/javascript" src="syntaxhighlighter_3.0.83/scripts/shBrushJScript.js"></script>
    <script type="text/javascript" src="syntaxhighlighter_3.0.83/scripts/shBrushSql.js"></script>
	<link type="text/css" rel="stylesheet" href="syntaxhighlighter_3.0.83/styles/shCoreDefault.css"/>
	<link type="text/css" rel="stylesheet" href="syntaxhighlighter_3.0.83/styles/shCoreMidnight.css"/>
	<style>
      .list a:visited{
          color:gray;
      }
    </style>

	
	<script type="text/javascript">SyntaxHighlighter.all();</script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Re,
    showMsg:”Collapse Code”c="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js">
</script>
<![endif]-->
</head>

<body>

<?php
$phpself = php_self();




?>

 
<header class="my-navbar">
    <div class="container">
    <div class="row">
        <div class="navbar-header">
            <a href="/" class="navbar-brand">乐乐的空间</a>


        </div>
        <ul class="pull-right nav-main">
            <li class="pull-left  <?php if($phpself =='index.php'){echo 'on';} ?>">
                <a href="index.php">html5</a>
            </li>
            <li class="pull-left <?php if($phpself =='sqlserver.php'){echo 'on';} ?>">
                <a href="sqlserver.php">sql server</a>
            </li>
            <li class="pull-left" style="padding-top:7px;">
                <input id="search" type="text" class="form-control" placeholder = "搜索" />
            </li>


        </ul>
        </div>
    </div>
</header>
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">