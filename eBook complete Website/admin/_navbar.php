<nav class="navbar navbar-expand-lg navbar-light py-0 bg-white" style="z-index: 999;">
    <button class="navbar-toggler ml-auto my-1" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
                <a class="nav-link d-block px-3" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-block px-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Products
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="products.php">Add New Post</a>
                    <a class="dropdown-item" href="view_product.php">View All Post</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-block px-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Competition
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="OrganizeACompetition.php">Organize A Competition</a>
                    <a class="dropdown-item" href="view_competitions.php">Previous Competitions</a>
                </div>
            </li>
            <?php
            if (strlen($_SESSION['LoginRole']) !== 0 && $_SESSION['LoginRole'] === 'Admin') {
            ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-block px-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="addNewCategory.php">Add New Category</a>
                        <a class="dropdown-item" href="view_categories.php">View All Categories</a>
                    </div>
                </li>
            <?php
            }
            ?>
            <?php
            if (strlen($_SESSION['LoginRole']) !== 0 && $_SESSION['LoginRole'] === 'Admin') {
            ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-block px-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Authers
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="addAuther.php">Add New Auther</a>
                    </div>
                </li>
            <?php
            }
            ?>
            <li class="nav-item">
                <a class="nav-link d-block px-3" href="profile.php?id=<?php echo $_SESSION['ID'] ?>">Profile</a>
            </li>
            <?php
            if (strlen($_SESSION['LoginRole']) !== 0 && $_SESSION['LoginRole'] === 'Admin') {
            ?>
                <li class="nav-item">
                    <a class="nav-link d-block px-3" href="messages.php">Messages</a>
                </li>
            <?php
            }
            ?>
            <?php
            if (strlen($_SESSION['LoginRole']) !== 0 && $_SESSION['LoginRole'] === 'Admin') {
            ?>
                <li class="nav-item">
                    <a class="nav-link d-block px-3" href="requests.php">Requests</a>
                </li>
            <?php
            }
            ?>
            <li class="nav-item">
                <a class="nav-link d-block px-3" href="/PHP-project/index.php"><b>Go To Website</b></a>
            </li>
        </ul>
    </div>
</nav>