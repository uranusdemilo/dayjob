<!DOCTYPE html>
<html>
<head>
<?php
include("./dblib.inc");
print("<title>$_GET[service]</title>");
?>
<meta charset="UTF-8"> 
<link rel="stylesheet" type="text/css" href="./css/fbstyle.css" />
<link rel="stylesheet" type="text/css" href="./css/fbmenu.css" />
<link rel="stylesheet" href="./css/bootstrap.min.css">
<script src=".scripts/jquery.min.js"></script>
<script src="./scripts/bootstrap.min.js"></script>
<script src="./scripts/lib.js"></script>
<style>
   .describeheader {
      font-weight:bold; font-size:20px; font-face:verdana;
      padding-left: 10px; padding-bottom:15px; padding-top:10px;
   }
   .describetext {
      font-size:14px; font-face:verdana;
      padding-left:10px; padding-bottom:15px; padding-top:10px;
   }
   #sidebar{
      float:left;
      width:160px;
      background-color:lightgray;
      padding:none;
      }
</style>
</head>
<body>
<div id="headerGraphic" style="background-color:#7babda"></div>
<div id="headerMenu" style="menu"></div>
<div class = "row">
   <div class = "col-sm-2">
      <div id="sidebar"></div> 
   </div>
   <div class = "col-sm-10">
      <?php
      print("<div class='describeheader'>$_GET[service]</div>");
      print("<div class='describetext'>");
      $textout=file_get_contents("./text/$_GET[text]");
      print("$textout");
      print("</div>");
      ?>
   </div>
</div>
<?php
footer();
?>
<script>
document.getElementById("headerGraphic").innerHTML="<img src='./images/fbheadersvc.jpg'>";
document.getElementById("headerMenu").innerHTML=menuBar();
document.getElementById("sidebar").innerHTML=sideBar();
</script>
</body>
</html>