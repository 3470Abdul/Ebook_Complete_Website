<?php

    include '../components/links.php';
    include '../db/connection.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $getThatPost = "DELETE FROM posts WHERE post_id = " . $id;
        $singlePost = mysqli_query($connection, $getThatPost);
        
        header('location: view_product.php');
    }

?>