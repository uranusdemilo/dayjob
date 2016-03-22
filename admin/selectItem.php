<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>
<?php
$fsconnect=mysqli_connect("localhost","dbagent","patches","forsale");
$dbquery="select * from " . $_GET['table'];
$colquery = "select descr from colnames where name = '" . $_GET['table'] . "'";
$result = $fsconnect->query($dbquery);
echo "<table style='padding-top:20px;'>";
echo "<tr style='text-align:left;'>
      <th style='padding-bottom:20px;'>Item</th>
      <th style='padding-left:20px;padding-bottom:20px;'>Description</th>
      <th style='padding-left:40px;padding-bottom:20px;'>Action</th></tr>";
/*while($specs = $result->fetch_row()){
   echo "<tr><td style='padding-bottom:10px;'>" . $_GET['table'] . '-' . $specs[0] . " </td>
         <td style='padding-left:20px;padding-bottom:10px;' id=" . $_GET['table'] . '-' . $specs[0] . ">" . $specs[1] . " " . $specs[2] . "</td>
         <td  style='padding-left:40px;padding-bottom:10px;'><select> id='action" . $specs[0] . "'>
            <option value=''>Action</option>
            <option value=\"edit\" onclick=\"editItem('" . $_GET['table'] . "','" . $specs[0] . "')\">Edit</option>
            <option value=\"new\" onclick=\"newItem('" . $_GET['table'] . "')\">New Item</option>
            <option value='sold'>Mark Sold</option>
            <option value=\"dump\" onclick=\"deleteItem('" . $_GET['table'] . "','" . $specs[0] . "')\">Delete</option>
         </select>
         </td></tr>"; 
}*/
while($specs = $result->fetch_row()){
   echo "<tr><td style='padding-bottom:10px;'>" . $_GET['table'] . '-' . $specs[0] . " </td>
         <td style='padding-left:20px;padding-bottom:10px;padding-right:40px' id=" . $_GET['table'] . '-' . $specs[0] . ">" . $specs[1] . " " . $specs[2] . "</td>
         <td style='padding-bottom:10px;padding-left:20px;'>
            <img src=\"./icons/newitem.jpg\" class=\"itemIcon\" onclick=\"newItem('" . $_GET['table'] . "')\">
            <img src=\"./icons/editbutton.jpg\" class=\"itemIcon\" onclick=\"editItem('" . $_GET['table'] . "','" . $specs[0] . "')\">
            <img src=\"./icons/nukebutton.jpg\" class=\"itemIcon\" onclick=\"deleteItem('" . $_GET['table'] . "','" . $specs[0] . "')\">
         </td></tr>";   
}   
   echo "</table>";
?>
</body>
</html>