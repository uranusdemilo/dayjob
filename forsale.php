<!DOCTYPE html>
<html>
<head>
<?php
include("./dblib.inc");
print("<title>$_GET[pagetitle]</title>");
$fsconnect=mysqli_connect("localhost","dbagent","patches","forsale");
$dbquery="select * from " . $_GET['table'];
$colquery = "select descr from colnames where name = '" . $_GET['table'] . "'";
$result = $fsconnect->query($dbquery);
$colresult = $fsconnect->query($colquery);
$colString = $colresult->fetch_row();
$colArray = explode("?",$colString[0]);
?>
<meta charset="UTF-8"> 
<link rel="stylesheet" type="text/css" href="./css/fbstyle.css" />
<link rel="stylesheet" type="text/css" href="./css/fbmenu.css" />
<link rel="stylesheet" href="./css/bootstrap.min.css">
<!--<script src=".scripts/jquery.min.js"></script>*-->
<script src="./scripts/jquery-1.11.3.min.js"></script>
<script src="./scripts/bootstrap.min.js"></script>
<script src="./scripts/lib.js"></script>
<style>
   .describeheader{
      font-weight:bold; font-size:20px; font-face:verdana;
      padding-bottom:15px; padding-left:40px; padding-top:20px;
   }
   .describetext {
      font-size:14px; font-face:verdana;
      padding-top:10px; padding-left:40px; padding-bottom:15px;
   }
   .itemtext {
      font-size:12px; font-face:verdana;
      padding-top:10px;
   }
   .describeimg {
      padding-top:10px;
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
      print("<div class='describeheader'>" . $_GET['pagetitle'] .  "</div>'");
         print("<div class = 'describetext'>");
         $itemnumber = 1;
         $itemCount = 1;
         while($specs = $result->fetch_row()){
            print("<div class = 'row' id = 'item" . $itemCount . "' style='display:none'>");
            echo("<div class = 'col-sm-3' style='padding-top:20px'>");
               echo "<div>" . $colArray[0] . ": " . $_GET['table'] . "-" . $specs[0] . "</div>";
               $i=1;
               while($i<count($colArray)):
                  echo "<div>" . $colArray[$i] . ": " . $specs[$i] . "</div>";
                  $i++;
               endWhile;
            echo("</div>");
            echo("<div class = 'col-sm-3'>");
               echo("<img class='describeimg' src = './images/forsale/" . $_GET['table'] . "-" . $specs[0] . ".jpg'>");
            echo("</div>");
            echo("<div class = 'col-sm-3'>");
               if(file_exists('./text/' . $_GET['table'] . '-' . $specs[0] . '.txt')){
                     echo "<div class = 'itemtext'>";
                     $textout=file_get_contents("./text/" . $_GET['table'] . '-' . $specs[0] . ".txt");
                     echo "$textout";
                     echo "</div>";
               }
            echo("</div>");
          echo("</div>");
          $itemCount++;
         }
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
<?php
$delayIncrement = 500;
for($c=1; $c <= $itemCount ; $c++){
   echo "$(document).ready(function(){	
      $('#item" . $c . "').delay(" . $c * 200 . ").fadeIn(1000);
   });";
}
?>
</script>
</body>
</html>