
<?php

function xsidebar()
{
print("<H3 class='sidebar'>Navigation</H3>
   - <A class='sidebar' HREF='./dayjob.html'>Home Page</A><BR><BR>
     <H3 class='sidebar'>Company Information</H3>
   - <A HREF='/about.php'><sidebarlink> About Flying Bovine</sidebarlink></A><BR>
   - <A HREF='/contact.php'><sidebarlink>Contact Info</sidebarlink></A>
   <BR>
   <H3 class='sidebar'>Services</H3>
      - <A HREF='./describe.php?service=System Tune Up Services&text=tuneup.txt'><sidebarlink>Tune-Up</sidebarlink></A><BR>
      - <A HREF='./describe.php?service=System Tune Up Services&text=tuneup.txt'><sidebarlink>Troubleshooting</sidebarlink></A><BR>
      - <A HREF='./describe.php?service=System Rebuild Services&text=rebuild.txt'><sidebarlink>Rebuild</sidebarlink></A><BR>
      - <A HREF='./describe.php?service=System Upgrade Services&text=upgrades.txt'><sidebarlink>Upgrades</sidebarlink></A><BR>
      - <A HREF='./dropin.php$service=Drop In Replacements&text=dropin.txt'><sidebarlink>Drop-in Replacements</sidebarlink></A><BR>
      - <A HREF='./gross.php'><sidebarlink>G.R.O.S.S. Database Applications</sidebarlink></A><BR><BR>
   <H3 class='sidebar'><A HREF='./forsaleindex.php'>Items For Sale</A></H3>
      - <A HREF='./pcforsale.php'><sidebarlink>PC's For Sale</sidebarlink></A><BR>
      - <A HREF='./hdds.php'><sidebarlink>Hard Drives</sidebarlink></A><BR>
      - <A HREF='./cards.php'><sidebarlink>PC Cards</sidebarlink></A><BR>
      - <A HREF='./ps.php'><sidebarlink>Power Supplies</sidebarlink></A><BR>
      - <A HREF='./mon.php'><sidebarlink>Monitors</sidebarlink></A><BR>
      - <A HREF='./nw.php'><sidebarlink>Networking Stuff</sidebarlink></A><BR><BR>
   <H3 class='sidebar'>Self-Help Links</H3>
      - <FONT SIZE=1><A HREF='./virus/virus.php'>Manual Adware + Virus Removal</A><BR>
   <BR><BR>
   <DIV ALIGN='CENTER'><A HREF='./login.php'>
   <img src='./images/bikesign.gif' border=0>
   </A></DIV>
");
}

function imsidebar()
{
echo"<FONT FACE='ARIAL' SIZE=2><DIV ALIGN='CENTER'>
<B><U>Inventory<BR>Management</U></DIV></B><BR>";
echo"- <A HREF='./index.php'><FONT SIZE=1>Home Page</A><BR><BR>";
echo"- <A HREF='./pcim.php'><FONT SIZE=1>PC Management</A><BR><BR>";
echo"<FONT SIZE=2><DIV ALIGN='CENTER'><B><U>System Components</U></DIV></B><BR>";
echo"- <A HREF='./mbim.php'><FONT SIZE=1>Mainboards</A><BR>";
echo"- <A HREF='./hdim.php'><FONT SIZE=1>Hard Drives</A><BR>";
echo"- <A HREF='./memim.php'>Memory</A><BR>";
echo"- <A HREF='./cardim.php'>Cards</A><BR>";
echo"- <A HREF='./nwim.php'>Networking</A><BR>";
echo"- <A HREF='./psim.php'><FONT SIZE=1>Power Supplies</A><BR><BR>";
echo"<FONT SIZE=2><DIV ALIGN='CENTER'><B><U>Items For Sale</U></DIV></B><BR><BR>";
echo"- <FONT SIZE=1><A HREF='./pcforsale.php'>PC's For Sale</A><BR><BR>";
echo"<FONT SIZE=2><DIV ALIGN='CENTER'><B><U>System Categories</U></DIV></B><BR>";
echo"- <A HREF='./impc.php'><FONT SIZE=1>PC's and Servers</A><BR>";
echo"- <A HREF='./mac.php'>Macintosh</A><BR>";
echo"<BR>";
echo"</FONT>";
}

function footer()
{
/*echo"<BR><DIV ALIGN='CENTER'><FONT SIZE=2>";*/
echo"<div style='text-align:center;font-weight:bold;padding-top:30px;padding-bottom:5px'>";
echo"Flying Bovine Computing Services</div>";
echo"<div  style='text-align:center'>3770 24th Street, #202</div>";
echo"<div  style='text-align:center'>San Francisco, CA.</div>";
echo"<div  style='text-align:center'>94114<BR></div>";
}


function textout($ifile)
{
while(!feof($file))
	{
	$lineout=fgets($ifile,255);
	print("$lineout");
	}

}

function getsearchdates()
{
numbermenu(1,12,bmonth);
numbermenu(1,31,bday);
numbermenuwd(2002,2005,2003,byear);
echo" TO ";
numbermenu(1,12,emonth);
numbermenu(1,31,eday);
numbermenuwd(2002,2005,2003,eyear);
}

function datecrunch($month,$day,$year)
{
$uxdate=$year;
$uxdate.='-';
$uxdate.=$month;
$uxdate.='-';
$uxdate.=$day;
return($uxdate);
}

function uxdatecvt($uxdate)
{
$mdy=split("[-]",$uxdate,4);
$date=$mdy[1];
$date.='-';
$date.=$mdy[2];
$date.='-';
$date.=$mdy[0];
return($date);
}
?>
