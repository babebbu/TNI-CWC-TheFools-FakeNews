<?php
	require('session.php');
	require("connection.php");
    
	$myusername = mysqli_real_escape_string($conn, $_POST['username']);
	$mypassword = mysqli_real_escape_string($conn, $_POST['password']);

	$sql = "SELECT * FROM users WHERE username = '$myusername'";
	$result = mysqli_query($conn,$sql) or die("Error: " . mysqli_error($conn));

	$count = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
      
	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count == 1 && isValidUser($row, $myusername, $mypassword)) {
        if($row['id'] == 1) {
			$circular_length = 10;	
			$update_id = shell_exec("cat update_id.cache");
			$next = "echo " . (intval($update_id) % $circular_length + 1) . " > next_id.cache";
			shell_exec($next);
			$sql = "UPDATE admin_login_logs SET timestamp = CURRENT_TIMESTAMP WHERE id = $update_id;";
			$conn->query($sql);
			$_SESSION['user'] = "admin";
            header("Location: dashboard.php");
        } else {
            echo "You are not the real admin, You are just a garbage.";
        }
	} else {
        echo "Invalid credentials";
	}

	function isValidUser($result, $username, $password) : bool {
            return $result['username'] == $username
                && $result['password'] == password_verify($password, $result['password']);
	}
?>
