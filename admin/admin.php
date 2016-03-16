<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"> 
<link rel="stylesheet" type="text/css" href="../css/fbstyle.css" />
<link rel="stylesheet" type="text/css" href="../css/fbmenu.css" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="../scripts/lib.js"></script>
<style>
   .describeheader {
      font-weight:bold;font-size:20px;
      padding-left:20px;padding-bottom:15px;padding-top:10px;
      font-face:imapct;
   }
   #sidebar{
      float:left;
      width:160px;
      background-color:lightgray;
      padding:none;
      }
   
   .selectbox{
      padding-top:20px;
      padding-bottom:20px;
   }
   .editbutton{
      padding-right:20px;
   }
</style>
</head>
<body>
<div id="headerGraphic" style="background-color:#7babda"></div>
<div id="headerMenu" style="menu"></div>
<div class = "row">
   <div class="col-sm-2" id = "sidebar" style="background-color:lightgray"></div>
   <div class="col-sm-10">
      <div class="selectbox">
         <span style="font-weight:bold;padding-right:20px;">Select A Category</span>
         <span><select id="category1" onchange=showCategory()></span>
            <option selected value = "select">Select Category</option>
            <option value = "pcs">PCs</option>
            <option value = "hdds">Hard Drives</option>
            <option value = "ps">Power Supplies</option>
            <option value = "cards">Cards</option>
         </select>
      </div>
      <div id="itemList"></div>
      <div id="editPanel" style="padding-top:20px;"></div>
      <div id="uploadDialog"></div>
      <div id="responsePanel" style="padding-top:20px;"></div>
   </div>
</div>
<div id="footer"></div>

<script>
document.getElementById("headerGraphic").innerHTML="<img src='../images/fbheadersvc.jpg'>";
document.getElementById("headerMenu").innerHTML=menuBar('/dayjob');
document.getElementById("sidebar").innerHTML=sideBar('/dayjob');
document.getElementById("footer").innerHTML=jsfooter();

function showCategory(){
   document.getElementById("itemList").innerHTML="";
   var ddtext = document.getElementById("category1").value;
   itemhttp = new XMLHttpRequest();
   itemhttp.onreadystatechange = function() {
      if (itemhttp.readyState == 4 && itemhttp.status == 200) {
         document.getElementById("itemList").innerHTML = itemhttp.responseText;
      }
   };
   itemhttp.open("GET","./selectItem.php?table="+ddtext,true);
   itemhttp.send();
   document.getElementById("editPanel").innerHTML="";
   document.getElementById("responsePanel").innerHTML="";
   document.getElementById("uploadDialog").innerHTML="";
}

function editItem(table,item){
   edithttp = new XMLHttpRequest();
   edithttp.onreadystatechange = function(){
      if (edithttp.readyState == 4 && edithttp.status == 200) {
         document.getElementById("editPanel").innerHTML = edithttp.responseText;
      }
   };
   edithttp.open("GET","./editItem.php?dbtable=" + table + "&item=" + item,true);
   edithttp.send();
   document.getElementById("responsePanel").innerHTML="";
}

function newItem(table,numcols){
   edithttp = new XMLHttpRequest();
   edithttp.onreadystatechange = function(){
      if (edithttp.readyState == 4 && edithttp.status == 200) {
         document.getElementById("editPanel").innerHTML = edithttp.responseText;
      }
   };
   edithttp.open("GET","./newItem.php?dbtable=" + table,true);
   edithttp.send();
   document.getElementById("uploadDialog").innerHTML="";
   document.getElementById("responsePanel").innerHTML="";
}

function writeNewItem(table,numCols){
   writeNewItemhttp = new XMLHttpRequest();
   writeNewItemhttp.onreadystatechange = function(){
      if (writeNewItemhttp.readyState == 4 && writeNewItemhttp.status == 200) {
         document.getElementById("responsePanel").innerHTML = writeNewItemhttp.responseText;
      }
   };
   var newItemData = [];
   var dbPhpUrl = "./addNewItem.php?dbtable=" + table;
   for(i=1;i<numCols;i++){
         newItemData[i] = document.getElementById("data" + i).value;
         dbPhpUrl = dbPhpUrl + "&data" + i + "=" + newItemData[i]; 
   }
   writeNewItemhttp.open("GET",dbPhpUrl,true);
   writeNewItemhttp.send();
   setTimeout(showCategory,500);
}

function writeChanges(table,item,numCols){
   changeItemhttp = new XMLHttpRequest();
   changeItemhttp.onreadystatechange = function(){
      if (changeItemhttp.readyState == 4 && edithttp.status == 200) {
         document.getElementById("responsePanel").innerHTML = changeItemhttp.responseText;
      }
   };
   var data1 = document.getElementById("data1").value;
   var itemData = [];
   var dbPhpUrl = "./updateItem.php?dbtable=" + table + "&item=" + item;
   for(i=1;i<numCols;i++){
         itemData[i] = document.getElementById("data" + i).value;
         dbPhpUrl = dbPhpUrl + "&data" + i + "=" + itemData[i]; 
   }
   changeItemhttp.open("GET",dbPhpUrl,true);
   changeItemhttp.send();
   setTimeout(showCategory,500);
}

function cancelChanges(table,item){
   cancelhttp = new XMLHttpRequest();
   cancelhttp.onreadystatechange = function(){
      if (cancelhttp.readyState == 4 && edithttp.status == 200) {
         document.getElementById("editPanel").innerHTML = edithttp.responseText;
      }
   };
   cancelhttp.open("GET","./editItem.php?dbtable=" + table + "&item=" + item,true);
   cancelhttp.send();
}

function upLoadImageDialog(){
   document.getElementById("uploadDialog").innerHTML="<form id='file-form' action='upload.php' method='post' enctype='multipart/form-data'>"
   + "<div style='font-weight:bold'>Select image to upload:</div>"
   +  "<input type='file' name='fileToUpload' id='file-ToUpload'>"
   +  "<input type='submit' value='Upload Image' name='submit'>"
   + "</form>";
   var form = document.getElementById('file-form');
   var fileToUpload = document.getElementById('file-ToUpload');
   var uploadButton = document.getElementById('upload-button');
   $("form").submit(function(event){
      event.preventDefault();
      var files = fileToUpload.files;
      var formData = new FormData(form);
      var file = files[0];
      formData.append('FILES[]',file,file.name);
      var uploadImagehttp = new XMLHttpRequest();
      uploadImagehttp.onreadystatechange = function() {
         if (uploadImagehttp.readyState == 4 && uploadImagehttp.status == 200) {
            document.getElementById("responsePanel").innerHTML = uploadImagehttp.responseText;
         }
      };
      uploadImagehttp.open('POST', 'upload.php', true);
      uploadImagehttp.send(formData);   
   }); 
}

//function upLoadImageDialog(){
//   imageDialogHttp = new XMLHttpRequest();
//   imageDialogHttp.onreadystatechange = function(){
//      if (imageDialogHttp.readyState == 4 && imageDialogHttp.status == 200) {
//         document.getElementById("uploadDialog").innerHTML = imageDialogHttp.responseText;
//      }
//   };
//   imageDialogHttp.open("GET","./uploadImageDialog.php",true);
//   imageDialogHttp.send();
//}

function uploadImage(fileToUpload){
   uploadhttp = new XMLHttpRequest();
   uploadhttp.onreadystatechange = function() {
      if (uploadhttp.readyState == 4 && uploadhttp.status == 200) {
         document.getElementById("responsePanel").innerHTML = uploadhttp.responseText;
      }
   };
   uploadhttp.open("POST","./upload.php",true);
   uploadhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   uploadhttp.send("fileToUpload=" + fileToUpload);
}

function deleteItem(table,item){
   edithttp = new XMLHttpRequest();
   edithttp.onreadystatechange = function(){
      if (edithttp.readyState == 4 && edithttp.status == 200) {
         document.getElementById("editPanel").innerHTML = edithttp.responseText;
      }
   };
   if(confirm('delete item ' + table + '-' + item + '?')){
      edithttp.open("GET","./deleteItem.php?dbtable=" + table + "&item=" + item,true);
      edithttp.send();
   }
   setTimeout(showCategory,500);
}


</script>
</body>
</html>