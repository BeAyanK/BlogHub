<?php 


    include 'connection.php';
    $conn = mysqli_connect($host, $user, $password, $db);
    if (!$conn) {
        echo "connection failed";
    }

    if (isset($_REQUEST["new_post"])) {
        $title = $_REQUEST["title"];
        $content = $_REQUEST["blog"];

        $sql = "INSERT INTO data(title, blog) VALUES('$title', '$content')";
        mysqli_query($conn, $sql);

        echo $sql;
        exit();
    }

    

?>