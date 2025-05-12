<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'DNK'; ?></title>
    <link rel="stylesheet" href="<?php echo isset($css) ? $css : ' DNK'; ?>">
    <link rel="stylesheet" href="./assets/css/index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyNursingLaboratory</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
        <!-- <link rel="stylesheet" href="/assets/css/index.css"> -->
<style>
    .dropdown{
        position: relative;
        cursor: pointer;
    }
    .elementor-item{
        cursor: pointer;
    }

    .dropdown ul{
        display:none;
        flex-direction:column;
        position: absolute;
        left:0px;
        top:100%;
        width: 100%;
        list-style: none;
        margin:0px;
        width: 150px;
        padding: 10px;
        background-color: #000;
    }
    .dropdown:hover .user_dropdown{
        display:flex;
    }
    .dropdown ul li{
        text-align:left;
        cursor: pointer;
    }
    .user_dropdown a{
        padding:0px;
        width: 100%;
        cursor: pointer;
    }
    </style>
</head>
<body>
    <header>
    <div class="container-heading">
        <div class="top-header">
            <div class="icon-wrapper">
                <!-- <div class="bar"></div> -->
                <div class="bar"></div>
                <!-- <div class="bar"></div> -->
            </div>

            <div class="main-heading">
                <a href="<?= $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] ?>/shop/index.php">

                <img width="300" height="35"
                   
                    class="attachment-full size-full wp-image-1877 lazyloaded" alt="my logo"
                 src="https://websitedemos.net/brandstore-02/wp-content/uploads/sites/150/2018/12/logo1@2x-free-img.png">
                    </a>
                </div>

            <div class="right-heading">
                <div class="four-text">
                    <a href="<?= $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] ?>/shop/products/category/category.php" class="elementor-item" tabindex="0">SHOP NOW</a>
                    <a href="#" class="elementor-item" tabindex="0">ABOUT US</a>
                    <a href="#" class="elementor-item" tabindex="0">CONTACT</a>
                    <?php if (isset($_SESSION['username'])): ?>
                        <span class="elementor-item dropdown">
                        Hi <?= htmlspecialchars($_SESSION['username']) ?>
                            <ul class="user_dropdown">
                                <li>
                                <a href="<?= $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] ?>/shop/admin/dashboard.php" class="elementor-item">My dashboard</a>
                    </li>
                    <li>
                                <a href="<?= $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] ?>/shop/admin/allOrder.php" class="elementor-item">My Orders</a>
                    </li>
                    </ul>
                        </span>
               
            <?php else: ?>
                <a href="<?= $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] ?>/shop/auth/login.php" class="elementor-item" tabindex="0">LOGIN</a>
            <?php endif; ?>
                </div>

                <div class="icon-right">
                    <a class="elementor-icon" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 704.081 796 200 200" height="35px" viewBox="704.081 796 200 200" width="35px"><path d="m891.876 977.909-6.938-125.811h-34.661v-10.157c0-25.333-20.608-45.941-45.94-45.941s-45.94 20.609-45.94 45.941v10.157h-36.161l-5.969 126.355-.006.219c-.049 4.547 1.758 9.01 4.955 12.239 3.198 3.233 7.641 5.089 12.19 5.089h141.351c4.688 0 9.228-1.953 12.453-5.36 3.224-3.407 4.925-8.047 4.666-12.731zm-121.497-135.968c0-18.725 15.233-33.959 33.958-33.959 18.724 0 33.958 15.234 33.958 33.959v10.157h-67.917v-10.157zm108.128 140.461c-.973 1.026-2.339 1.615-3.751 1.615h-141.351c-1.37 0-2.707-.558-3.672-1.534-.942-.95-1.483-2.257-1.492-3.597l5.423-114.806h24.731v15.173c0 3.309 2.682 5.991 5.991 5.991s5.991-2.682 5.991-5.991v-15.173h67.917v15.173c0 3.309 2.682 5.991 5.991 5.991s5.99-2.682 5.99-5.991v-15.173h23.321l6.313 114.49c.081 1.41-.431 2.807-1.402 3.832z"/></svg>
                        <span class="elementor-button-icon" data-counter="0">0</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </header>