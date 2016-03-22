<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>
<?php
$fsconnect=mysqli_connect("localhost","dbagent","patches","forsale");
$itemInfoQuery = "select * from " . $_GET['dbtable'] . " where item = " . $_GET['item'];
$itemColumnQuery = "select descr from colnames where name ='" . $_GET['dbtable'] . "'";
$itemResult = $fsconnect->query($itemInfoQuery); //selects all fields from an entry
$columnResult = $fsconnect->query($itemColumnQuery); //selects column labels
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
   echo "<input type='text' size='40' ";
   if($i==0){
      echo(" disabled ");
   }
   echo "value='" . $specs[$i] . "' id='data" . $i;
   echo "'></tr></td>";
}
if(file_exists("../images/forsale/" . $_GET['dbtable'] . "-" . $_GET['item'] . ".jpg")){
   echo "<tr><td>Image File -</td><td style='padding-left:20px'>" .
      "<input disabled size='40' value=" . $_GET['dbtable'] . "-" .
      $_GET['item'] . ".jpg></tr></td>";
}
else{
   echo "<tr><td>Image File -</td><td style='padding-left:20px'>" .
      "<input disabled size='40' value='" .  $_GET['dbtable'] . "-" . $_GET['item'] . ".jpg not found'></tr></td>";  
}
echo "</table>";
echo "<input type='hidden' id='numcols' value='" . $numCols . "'>";
//save button
echo "<div  style='padding-top:20px;'>
      <span class='editbutton'><input type = 'submit' value='Save'>
      </span>";
//cancel button
echo "<span class='editbutton'><button type = 'button' 
   onclick=cancelChanges('" . $_GET['dbtable'] 
   . "','" . $_GET['item'] 
   . "')>Cancel</button></span>";
//New Pic button
echo "<span class='editbutton'><button type = 'button' class='editbutton' "
   . "onclick='upLoadImageDialog()'>New Pic</button></span>";
//Delete Pic Button
echo "<span class='editbutton'><button type='button' onclick=deleteItem('" . $_GET['dbtable'] 
   . "','" . $_GET['item'] 
   . "')>Delete Pic</button></span></div>";
echo "</form>";
?>
</body>
</html>