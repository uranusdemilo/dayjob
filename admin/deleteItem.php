<?php
$fsconnect=mysqli_connect("localhost","dbagent","patches","forsale");
$i=1;
$itemDeleteQuery = "delete from " . $_GET['dbtable'] . " where item='" . $_GET['item'] . "';";   
echo $itemDeleteQuery;
$deleteColumnResult = $fsconnect->query($itemDeleteQuery);
?>