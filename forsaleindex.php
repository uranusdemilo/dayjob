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
      font-weight:bold;
      font-size:20px;
      padding-left:10px;padding-bottom:15px;padding-top:20px;
      font-face:verdana;
   }
   
   .describetext{
      font-size:14;
      padding-left:10px;padding-bottom:5px;padding-top:10px;
      font-face:verdana;
   }
   .bodylink{
      padding-left:10px;
      paddint-bottom:10px;
   }
   #pageheader{
      font-weight:bold;
      font-size:25px;
      padding-left:10px;padding-bottom:20px;padding-top:30px;
      font-face:verdana;
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
   <div class="col-sm-2" id = "sidebar" style="background-color:lightgray">
   </div>
   <div class="col-sm-10">
      <div id = "pageheader">Used Equiptment and Borderline Junk Marketplace</div>
      <div id = "headergraphic" style = "padding-left:30px;padding-bottom:20px"></div>
      <div class = "row">
         <div class = "col-sm-4">
            <p class="describeheader">Used PCs</p>
            <div class="describetext">
               Click below to check out my current inventory of dirt-cheap, affordable systems.  All
               opened up, inspected, and given something of a rigorous once-over to verify perfect 
               (or something approaching it at least) working order.  In the event something <I>isn't</I>
               fixed, I'll list in the description with a buyer beware clause.
            </div>
         </div>
         <div class = "col-sm-4">
            <p class="describeheader">Used Hard Drives</p>
            <div class="describetext">
               All hard drives listed herin have been formatted and checked for
               errors at one time or another during the time that I've had them, and all have formatted
               clean without any bad sectors or lost clusters.  No mega-monster drives in here, but lots
               that will aid in piecing together a light duty system for kids, freinds, or an odd project.
            </div>
         </div>
      </div>
      <div class = "row">
         <div class = "col-sm-4">
            <a href='./forsale.php?pagetitle=PCs for Sale&table=pcs' class="bodylink">Click here to view the used PC inventory</A>;
         </div>
         <div class = "col-sm-4">
            <a href='./forsale.php?pagetitle=Hard Drives for Sale&table=hdds' class="bodylink">Click here for hard drives</A>
         </div>
      </div>
      <div class = "row">
         <div class = "col-sm-4">
            <p class="describeheader">Used PC Cards</p>
            <div class="describetext">
               They're all lumped together in here...Video, Network, Sound, SCSI...just about
               anything your heard desires (well, that might be stretching it..) Everything
               here was either a clean pull from a working machine, or something I pulled out
               of a dead PC and tested to make sure it worked. 
            </div>
         </div>
         <div class = "col-sm-4">
            <p class="describeheader">Used Power Supplies</p>
            <div class="describetext">
               I've tested all of these by bringing a mainboard through POST, verifying
               the internal fan works, and blasing out any large clumps of dust with compressed
               air.  Lookin' for one?  I might have it....a helluva lot cheaper than local retailers 
               sell them for<BR>
            </div>
         </div>
      </div>
      <div class = "row">
         <div class = "col-sm-4">
            <a href='./forsale.php?pagetitle=Cards For Sale&table=cards' class="bodylink">Click here for PC Cards</A>
         </div>
         <div class = "col-sm-4">
            <a href='./forsale.php?pagetitle=Power Supplies for Sale&table=ps' class="bodylink">Click here for power supplies</A>
         </div>
      </div>
      <div class = "row">
         <div class = "col-sm-4">
            <p class="describeheader">Used Monitors</p>
            <div class="describetext">
               I usually have one monitor in stock, as I don't have room to stockpile these things.
               If you need a bunch of monitors, give me a call and I can pass you the name and number 
               of the last person that tried to pawn a bunch of them onto me. Also, garage sales in 
               Noe Valley are a great source of monitors that are alot cheaper than the one I've got 
               here. Want one now? Click below... 
            </div>
         </div>
         <div class = "col-sm-4">
            <p class="describeheader">Used Networking Gear</p>
            <div class="describetext">
               Most everything here is a corporate throwaway that I've gleaned from my clients, but
               hey! Not everyone needs the latest and greatest gigabit technology! Lots of stuff here 
               that could be a big help to someone who wants to share a DSL circuit on the cheap.  Some
               it, I'll be thankfull just to get rid of...
            </div>
         </div>
      </div>
      <div class = "row">
         <div class = "col-sm-4">
            <a href='./forsale.php?pagetitle=Monitors for Sale&table=mon' class="bodylink">Click here to view used Monitors</A>
         </div>
         <div class = "col-sm-4">
            <a href='./nw.php' class="bodylink">Click here for Networking Gear</A>
         </div>
      </div>
      <div class = "row">
         <div class = "col-md-8">
            <div id = "footer"></div>
         </div>
      </div>
   </div>
</div>
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
document.getElementById("headergraphic").innerHTML="<IMG SRC='./images/2805.jpg'>";
</script>
</body>
</html>