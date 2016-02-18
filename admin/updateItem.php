<?php
$fsconnect=mysqli_connect("localhost","dbagent","patches","forsale");
$itemInfoQuery = "select * from " . $_GET['dbtable'] . " where item = " . $_GET['item'];
$tableColumnQuery = "select COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_SCHEMA='forsale' AND TABLE_NAME='" . $_GET['dbtable'] . "'";
$tableColumnResult = $fsconnect->query($tableColumnQuery);
$i=1;
$columnNamesArray = array();
$itemInfo = array();
$itemEditQuery = "update " . $_GET['dbtable'] . " set ";
$columnNames = $tableColumnResult->fetch_row();
while($columnNames = $tableColumnResult->fetch_row()){
   $columnNamesArray[$i] = $columnNames[0];
   $itemEditQuery = $itemEditQuery . $columnNames[0] . "='" . $_GET['data' . $i] . "',";
   $i++;
}
$itemEditQuery = rtrim($itemEditQuery,",");
$itemEditQuery = $itemEditQuery . " where item='" . $_GET['item'] . "';";   
echo $itemEditQuery;
$tableColumnResult = $fsconnect->query($itemEditQuery);
?>