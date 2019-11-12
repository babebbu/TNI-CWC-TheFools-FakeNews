<?php

require('session.php');

if(isset($_SESSION['user']) && $_SESSION['user'] == 'admin'):

?>
    
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin CP</title>
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="margin-top: 100px"> 
        <h1>Upload File</h1>
        <hr>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
	</form>
	<hr>
	<a href="logout.php">Logout</a>
    </div>
</body>

<?php
else:
    echo "Login required";
endif;

?>
