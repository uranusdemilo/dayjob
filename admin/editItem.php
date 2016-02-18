<?php
$fsconnect=mysqli_connect("localhost","dbagent","patches","forsale");
$itemInfoQuery = "select * from " . $_GET['dbtable'] . " where item = " . $_GET['item'];
$itemColumnQuery = "select descr from colnames where name ='" . $_GET['dbtable'] . "'";
$itemResult = $fsconnect->query($itemInfoQuery);
$columnResult = $fsconnect->query($itemColumnQuery);
$specs = $itemResult->fetch_row();
$columnNames = $columnResult->fetch_row();
$cols=explode("?",$columnNames[0]);
$numCols=count($cols);
echo "<div style='font-weight:bold;'>
   Editing Item " . $_GET['dbtable'] . "-" . $_GET['item'] . "</div><BR>";
/*Begin Form*/   
echo "<form action=\"javascript:writeChanges('" . $_GET['dbtable'] . "','" . $_GET['item'] . "'," . $numCols . ")\" name=\"itemdata\" method=\"post\">";
echo "<table>";
for($i = 0;$i < $numCols; ++$i){
   echo "<tr><td>" . $cols[$i] . " -</td>
   <td style='padding-left:20px;'>";
   echo "<input ";
   if($i==0){
      echo(" disabled ");
   }
   echo "value='" . $specs[$i] . "' id='data" . $i;
   echo "'></td></tr>";
}
echo "</table>";
echo "<input type='hidden' id='numcols' value='" . $numCols . "'>";
echo "<div  style='padding-top:20px;'>
      <span  style='padding-right:30px;'><input type = 'submit' value='Write Changes'>
      </span>";
echo "<span><button type = 'button' 
   onclick=cancelChanges('" . $_GET['dbtable'] 
   . "','" . $_GET['item'] 
   . "')>Cancel</button></span></div>";
echo "</form>";
?>