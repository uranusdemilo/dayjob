<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"> 
<link rel="stylesheet" type="text/css" href="./css/fbstyle.css" />
<link rel="stylesheet" type="text/css" href="./css/fbmenu.css" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="./scripts/lib.js"></script>
<style>
   .describeheader {
      font-weight:bold;font-size:20px;
      padding-left:20px;padding-bottom:15px;padding-top:10px;
      font-face:imapct;
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
   <div class="col-sm-2" id = "sidebar" style="background-color:lightgray"></div>
   <div class="col-sm-10"></div>
</div>
<div id="footer"></div>
<!--<div style="text-align:center">
<p style="font-weight:bold;padding-top:40px">Flying Bovine Computing Services<p>
3770 24th Street, #202<BR>
San Francisco, CA.<BR>
94114<BR></DIV>
-->
<script>
document.getElementById("headerGraphic").innerHTML="<img src='./images/fbheadersvc.jpg'>";
document.getElementById("headerMenu").innerHTML=menuBar();
document.getElementById("sidebar").innerHTML=sideBar();
document.getElementById("footer").innerHTML=jsfooter();
</script>
</body>
</html>