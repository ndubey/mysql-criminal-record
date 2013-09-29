
<?php

    $id = intval($_GET['show']);

    $result = mysql_query("SELECT ext, UNIX_TIMESTAMP(image_time), data
                             FROM {$table}
                            WHERE id=$id LIMIT 1");

    if (mysql_num_rows($result) == 0)
        die('no image');

    list($ext, $image_time, $data) = mysql_fetch_row($result);

    $send_304 = false;
    if (php_sapi_name() == 'apache') {
        // if our web server is apache
        // we get check HTTP
        // If-Modified-Since header
        // and do not send image
        // if there is a cached version

        $ar = apache_request_headers();
        if (isset($ar['If-Modified-Since']) && // If-Modified-Since should exists
            ($ar['If-Modified-Since'] != '') && // not empty
            (strtotime($ar['If-Modified-Since']) >= $image_time)) // and grater than
            $send_304 = true;                                     // image_time
    }


    if ($send_304)
    {
        // Sending 304 response to browser
        // "Browser, your cached version of image is OK
        // we're not sending anything new to you"
        header('Last-Modified: '.gmdate('D, d M Y H:i:s', $ts).' GMT', true, 304);

        exit(); // bye-bye
    }

    // outputing Last-Modified header
    header('Last-Modified: '.gmdate('D, d M Y H:i:s', $image_time).' GMT',
            true, 200);

    // Set expiration time +1 year
    // We do not have any photo re-uploading
    // so, browser may cache this photo for quite a long time
    header('Expires: '.gmdate('D, d M Y H:i:s',  $image_time + 86400*365).' GMT',
            true, 200);

    // outputing HTTP headers
    header('Content-Length: '.strlen($data));
    header("Content-type: image/{$ext}");

    // outputing image
    echo $data;
    exit();

?>
<html><head>
<title>Show image</title>
</head>
<body>
<?php
if (isset($msg)) // this is special section for
                 // outputing message
{
?>
<p style="font-weight: bold;"><?=$msg?>
<br>
<a href="<?=$PHP_SELF?>">reload page</a>
<!-- I've added reloading link, because
     refreshing POST queries is not good idea -->
</p>
<?php
}
?>
<h2>About images:</h2>
<form action="<?=$PHP_SELF?>" method="post">
<!-- This form is used for image deletion -->


</form>
<h2>About new image:</h2>
<form action="<?=$PHP_SELF?>" method="POST" enctype="multipart/form-data">
<label for="title">Title:</label><br>
<input type="text" name="title" id="title" size="64"><br><br>

<label for="photo">Photo:</label><br>
<input type="file" name="photo" id="photo"><br><br>

<label for="password">Password:</label><br>
<input type="password" name="password" id="password"><br><br>

<input type="submit" value="upload">
</form>
</body>
</html>
