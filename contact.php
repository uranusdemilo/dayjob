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
.contactinfo {
   font-face:verdana;
   padding-left:10px;
}
.contactbold {
   font-face:verdana;
   padding-left:10px;
   font-weight:bold;
}
</style>
</head>
<body>
<div id="headerGraphic" style="background-color:#7babda"></div>
<div id="headerMenu" style="menu"></div>
<div class="col-sm-2" id = "sidebar" style="background-color:lightgray"></div>
<div class="col-sm-10">
<!-- BEGIN CODE -->
   <div style="padding-left:10px;padding-top:10px;font-face:verdama;font-size:20px"><p>Contact Information</p></div>
   <div class = "contactbold">Michael Wyatt</div>
   <div><p class = "contactinfo" style="font-style:italic">Proprietor</p></div>
   <div class = "contactbold">Phone:</div>
   <div class = "contactinfo"><p>Home/Office/Shop:(415) 643-4468</p></div> 
   <div class = "contactbold">E-mail:</div>
   <div class = "contactinfo"><p>mwyatt@flyingbovine.com</p></div>
   <div class = "contactbold">Regular Mail</div>
   <div class = "contactinfo">Michael Wyatt</div>
   <div class = "contactinfo">c/o Flying Bovine Computing Services</div>
   <div class = "contactinfo">3770 24th St., #202</div>
   <div class = "contactinfo">San Francisco, CA</div>
   <div class = "contactinfo">94114</div>
   <div style="text-align:center">
   <p style="font-weight:bold;padding-top:40px">Flying Bovine Computing Services<p>
   3770 24th Street, #202<BR>
   San Francisco, CA.<BR>
   94114<BR></DIV>
</div>  
<script> 
document.getElementById("headerGraphic").innerHTML="<img src='./images/fbheadersvc.jpg'>";
document.getElementById("headerMenu").innerHTML=menuBar();
document.getElementById("sidebar").innerHTML=sideBar();
</script>
</body>
</html>