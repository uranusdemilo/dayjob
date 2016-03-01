<?php
$fsconnect=mysqli_connect("localhost","dbagent","patches","forsale");
$itemAddQuery = "insert into " . $_GET['dbtable'] . " values('',";
$tableColumnQuery = "select COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_SCHEMA='forsale' AND TABLE_NAME='" . $_GET['dbtable'] . "'";
$tableColumnResult = $fsconnect->query($tableColumnQuery);
$i=1;
$columnNamesArray = array();
$itemInfo = array();
$columnNames = $tableColumnResult->fetch_row();
while($columnNames = $tableColumnResult->fetch_row()){
   $columnNamesArray[$i] = $columnNames[0];
   $itemAddQuery = $itemAddQuery . "'" . $_GET['data' . $i] . "',";
   $i++;
}
$itemAddQuery = rtrim($itemAddQuery,",");
$itemAddQuery = $itemAddQuery  . ");";   
echo $itemAddQuery;
$tableColumnResult = $fsconnect->query($itemAddQuery);
?>