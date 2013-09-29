<html>
<head>
<title>Demo of Database Image in a page</title>
</head>
<body>
Here is your picture:<br>
<img src=picscript.php?imname=potwoods><br>
Example by Well House Consultants
</body>
</html>


<?php
mysql_connect("localhost","root","nandan");
mysql_select_db("img");
$image = stripslashes($_REQUEST[imname]);
$rs = mysql_query("select * from im_library where filename=\"".
addslashes($image).".jpg\"");
$row = mysql_fetch_assoc($rs);
$imagebytes = $row[imgdata];
header("Content-type: image/jpeg");
print $imagebytes;
?>