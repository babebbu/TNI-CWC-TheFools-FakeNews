<?php

require('connection.php');

if(isset($_POST)) {

    $title = $_POST['title'];
    $content = htmlspecialchars($_POST['content']);
    
    $sql = "INSERT INTO news (title, content) VALUES ('$title', '$content');";
    $result = $conn->multi_query($sql);

    if($result === TRUE) {
        echo "เพิ่มข่าวใหม่แล้ว";
    } else {
        echo $conn->error;
    }
}

?>
