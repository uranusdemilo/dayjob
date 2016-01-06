function menuBar(){
   return("<ul id='menu'>" +
	"<li><a href='./dayjob.html'>Home</a></li>" +
	"<li><a href='#'>Company Info</a>" +
		"<ul>" +
			"<li><a href='./about.php'>About</a></li>" +
			"<li><a href='./contact.php'>Contact Info</a></li>" +
		"</ul>" +
	"</li>" +
	"<li><a href='#'>Services</a>" +
		"<ul>" +
			"<li><a href='http://192.168.1.236/fbnew/describe.php?service=System%20Tune%20Up%20Services&text=tuneup.txt'>Tune-Up</a></li>" +
			"<li><a href='http://192.168.1.236/fbnew/describe.php?service=System%20Tune%20Up%20Services&text=tuneup.txt'>Troubleshooting</a></li>" +
			"<li><a href='#'>Repair</a></li>" +
			"<li><a href='http://192.168.1.236/fbnew/describe.php?service=System%20Rebuild%20Services&text=rebuild.txt'>Rebuild</a></li>" +
			"<li><a href='http://192.168.1.236/fbnew/describe.php?service=System%20Upgrade%20Services&text=upgrades.txt'>Upgrades</a></li>" +
			"<li><a href='#'>Drop-in Replacements</a></li>" +
		"</ul>" +
	"</li>" +
	"<li><a href='#'>Self-Help</a>" +
		"<ul>" +
			"<li><a href='#'>Virus Removal</a></li>" +
			"<li><a href='#'>Dead Laptop</a></li>" +
		"</ul>" +
	"</li>" +
	"<li><a href='#'>Contact</a>" +
		"<ul>" +
			"<li><a href='#'>Email</a></li>" +
			"<li><a href='#'>Office</a></li>" +
			"<li><a href='#'>Neighborhood Bar</li>" +
		"</ul>" +
	"</li>" +
"</ul>");
}

function sideBar(){
return("<p><h5 style='text-align:center'>Navigation</h5></p>" +
      "- <sidebarlink><A HREF='./dayjob.html'>Home Page</A></sidebarlink><BR>" +
     "<h5 style='text-align:center'>Company Info</h5>" +
     "- <A HREF='./about.php'><sidebarlink> About Flying Bovine</sidebarlink></A><br>" +
     "- <A HREF='./contact.php'><sidebarlink>Contact Info</sidebarlink></A>" +
   "<BR>" +
   "<h5 style='text-align:center'>Services</h5>" +
      "- <A HREF='./describe.php?service=System Tune Up Services&text=tuneup.txt'>" +
        "<sidebarlink>Tune-Up</sidebarlink></A><BR>" +
      "- <A HREF='./describe.php?service=System Tune Up Services&text=tuneup.txt'>" +
	"<sidebarlink>Troubleshooting</sidebarlink></A><BR>" +
      "- <A HREF='./describe.php?service=System Rebuild Services&text=rebuild.txt'><sidebarlink>Rebuild</sidebarlink></A><BR>" +
      "- <A HREF='./describe.php?service=System Upgrade Services&text=upgrades.txt'><sidebarlink>Upgrades</sidebarlink></A><BR>" + 
      "- <A HREF='./describe.php?service=Drop In Replacements&text=dropin.txt'><sidebarlink>Drop-in Replacements</sidebarlink></A><BR>" +
   "<a href='./forsaleindex.php'><h5 style='text-align:center'>Items For Sale</h5></a>" +
      "- <A HREF='./forsale.php?pagetitle=PCs for Sale&table=pcs'><sidebarlink>PC's For Sale</sidebarlink></A><BR>" +
      "- <A HREF='./forsale.php?pagetitle=Hard Drives for Sale&table=hdds'><sidebarlink>Hard Drives</sidebarlink></A><BR>" +
      "- <A HREF='./forsale.php?pagetitle=Cards For Sale&table=cards'><sidebarlink>PC Cards</sidebarlink></A><BR>" +
      "- <A HREF='./forsale.php?pagetitle=Power Supplies for Sale&table=ps'><sidebarlink>Power Supplies</sidebarlink></A><BR>" +
      "- <A HREF='./forsale.php?pagetitle=Monitors for Sale&table=mon'><sidebarlink>Monitors</sidebarlink></A><BR>" +
      "- <A HREF='./forsale.php?pagetitle=Other Stuff for Sale&table=other'><sidebarlink>Other Stuff</sidebarlink></A><BR><BR>" +
   "<h5 style='text-align:center'>Self-Help Links</h5>" +
      "- <FONT SIZE=1><A HREF='./virus/virus.php'>Manual Adware + Virus Removal</A><BR>" +
   "<BR><BR>" +
   "<DIV ALIGN='CENTER'><A HREF='./login.php'>" +
   "<IMG SRC='./images/bikesign.gif' BORDER=0 style='padding-bottom:20px'>" +
   "</A></DIV>");}
   
   function jsfooter(){
      return("<div style='text-align:center;font-weight:bold;padding-top:30px;padding-bottom:5px'>" +
      "Flying Bovine Computing Services</div>" +
      "<div style='text-align:center'>3770 24th Street, #202</div>" +
      "<div style='text-align:center'>San Francisco, CA.</div>" +
      "<div style='text-align:center'>94114<BR></div>");
   }