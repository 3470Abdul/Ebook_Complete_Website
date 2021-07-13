<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Index.css File -->
    <link rel="stylesheet" type="text/css" href="css/index.css" />

    <!-- Fonts.css File -->
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <?php
    include '_topBar.php';
    include '_navbar.php';
?>
    <?php
    include 'components/links.php';
    include 'db/connection.php';

    $getAllCategories = "SELECT users.user_first_name, users.user_last_name, posts.* FROM posts LEFT OUTER JOIN users on posts.post_auther = users.user_id LEFT OUTER JOIN categories ON posts.category = categories.code WHERE categories.category LIKE '%" . $_GET['category'] . "%'";
    $categories = mysqli_query($connection, $getAllCategories);
    ?>
</head>

<body>
    <div class="">
        <div class="container-fluid px-5 mt-4">
       
            <div class="row">
                <?php
                while ($row = mysqli_fetch_assoc($categories)) {
                ?>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="divs border px-5 pb-4" onclick="postDetails(<?php echo $row['post_id'] ?>)">
                            <!-- <div class="px-5 py-3"> -->
                                <img src="images/posts/<?php echo $row['post_image']; ?>" width="100%" height="250" />
                            <!-- </div> -->
                            <hr>
                            <div>
                                <p class="mb-0" style="color:orange;"><?php echo substr($row['post_date'], 0, 10) ?></p>
                                <p class="text-justify" style="word-wrap: break-word;">
                                    <?php if (strlen($row['post_desc']) > 55) {
                                        echo substr($row['post_desc'], 0, 52) . ' ...';
                                    } else {
                                        echo $row['post_desc'];
                                    } ?>
                                </p>
                                <div class="d-flex justify-content-between align-items-center mb-0 pb-0">
                                    <p class="text-secondary mb-0 pb-0"><?php echo $row['user_first_name'] . ' ' . $row['user_last_name'] ?></p>
                                    <p class="mb-0 pb-0">$<?php echo $row['post_price'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        function postDetails(id) {
                            window.location.href = 'postDetails.php?id=' + id;
                        }
                    </script>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <?php include '_Footer.php';?>
</body>

</html>