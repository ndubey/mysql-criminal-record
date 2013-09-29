<?php

// store.php3 - by Florian Dittmer <dittmer@gmx.net>
// Example php script to demonstrate the storing of binary files into
// an sql database. More information can be found at http://www.phpbuilder.com/
?>

<html>
<head><title>Store binary data into SQL Database</title></head>
<body>

<?php
// code that will be executed if the form has been submitted:
$db_host = 'localhost'; 
$db_user = 'root'; 
$db_pwd = 'nandan';

mysql_connect($db_host,$db_user,$db_pwd);
mysql_select_db("forImg");

if ($submit) {

    // connect to the database
    // (you may have to adjust the hostname,username or password)

    //MYSQL_CONNECT("localhost","root","nandan");
    //mysql_select_db("forImg");
	//$db = mysql_connect("localhost", "root", "nandan");
	//mysql_select_db("forImg",$db);
// Connect to server and select databse.
//include 'library/config.php';
//include 'library/opendb.php';



    $data = addslashes(fread(fopen($form_data, "r"), filesize($form_data)));
    $result=MYSQL_QUERY("INSERT INTO binary_data (description,bin_data,filename,filesize,filetype) ".
        "VALUES ('$form_description','$data','$form_data_name','$form_data_size','$form_data_type')");

    $id= mysql_insert_id();
    print "<p>This file has the following Database ID: <b>$id</b>";

    MYSQL_CLOSE();

} else {

    // else show the form to submit new data:
?>

    <form method="post" action="<?php echo $PHP_SELF; ?>" enctype="multipart/form-data">
    File Description:<br>
    <input type="text" name="form_description"  size="40">
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
    <br>File to upload/store in database:<br>
    <input type="file" name="form_data"  size="40">
    <p><input type="submit" name="submit" value="submit">
    </form>

<?php

}

?>

</body>
</html>
