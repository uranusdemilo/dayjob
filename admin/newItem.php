<?php
$fsconnect=mysqli_connect("localhost","dbagent","patches","forsale");
$itemColumnQuery = "select descr from colnames where name ='" . $_GET['dbtable'] . "'";
$columnResult = $fsconnect->query($itemColumnQuery);
$columnNames = $columnResult->fetch_row();
$cols=explode("?",$columnNames[0]);
$numCols=count($cols);
echo "<div style='font-weight:bold;'>
   New Item</div><BR>";
/*Begin Form*/   
echo "<form action=\"javascript:writeNewItem('" . $_GET['dbtable'] . "'," . $numCols . ")\" name=\"itemdata\" method=\"post\">";
echo "<table>";
for($i = 0;$i < $numCols; ++$i){
   echo "<tr><td>" . $cols[$i] . " -</td>
   <td style='padding-left:20px;'>";
   echo "<input ";
   if($i==0){
      echo(" disabled ");
   }
   echo "id='data" . $i . "'></td></tr>";
}
echo "</table>";
echo "<input type='hidden' id='numcols' value='" . $numCols . "'>";
echo "<div  style='padding-top:20px;'>
      <span  style='padding-right:30px;'><input type = 'submit' value='Write Changes'>
      </span>";
echo "<span><button type = 'button')>Cancel</button></span></div>";
echo "</form>";
?>