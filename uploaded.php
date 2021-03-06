<?php
	/**
	 * Display image form database
	 *
	 * Retrive an image from mysql database if image id is provided.
	 *
	 * @example to display a image with image id 1, place <img src="image.php?id=1" > in your html file.
	 *
	 */
	
	// verify request id.
	if (empty($_GET['id']) || !is_numeric($_GET['id'])) {
		echo 'A valid image file id is required to display the image file.';
		exit;
	}
	
	$imageId = $_GET['id'];
	//echo "id is : $imageId";
	//connect to mysql database
	if ($conn = mysqli_connect('localhost', 'root', 'nandan', 'forImg')) {
		$data = mysqli_real_escape_string($conn, $data);
		$sql = "SELECT  data FROM person where Person_id = {$imageId}";
		//echo "SELECT  data FROM person where Person_id = {$imageId}";
		if ($rs = mysqli_query($conn, $sql)) {
			$imageData = mysqli_fetch_array($rs, MYSQLI_ASSOC);
			mysqli_free_result($rs);
		} else {
			echo "Error: Could not get data from mysql database. Please try again.";
		}
		//close mysqli connection
		mysqli_close($conn);
		
	} else {
		echo "Error: Could not connect to mysql database. Please try again.";
	}	
	
	if (!empty($imageData)) {
		//echo "got data displaying below";
		// show the image.
		//header("Content-type: {$imageData['type']}");
		echo $imageData['data'];
	}
	?>