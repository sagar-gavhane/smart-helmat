<?php
    require_once('config/database.php');

    if(! $_SESSION['secure'] || ! $_SESSION['user_logged']){
        header('Location: login.php');
        exit();
    }
?>

    <?php include_once('partials/_header.php'); ?>

    <!-- navbar -->
    <?php include_once('partials/_navbar.php'); ?>

    <div class="container">
        <div class="row no-gutters-xs">
            <div class="col-xs-12 col-sm-12">
                <div class="row">
                    <h2 class="my-4">Dashboard</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include_once('partials/_footer.php'); ?>