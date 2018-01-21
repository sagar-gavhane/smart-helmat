<?php
    require_once('config/database.php');
    require_once('functions/common_functions.php');
?>

    <?php include_once('partials/_header.php'); ?>

    <!-- navbar -->
    <?php include_once('partials/_navbar.php'); ?>

    <!-- container -->
    <div class="container">
        <div class="row no-gutters-xs">
            <!-- page heading -->
            <div class="col-xs-12 col-sm-12">
                <div class="row">
                    <h2 class="my-4 w-100">Register</h2>
                    <span class="d-block border-bottom"></span>
                </div>
            </div>
            <!-- register form -->
            <div class="col-xs-12 col-sm-4">
                <div class="row">
                    <form class="w-100" action="register_process.php" method="post">
                        <!-- first name -->
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input class="form-control" type="text" name="first_name" id="first_name" placeholder="Enter your first name" required>
                        </div>
                        <!-- last name -->
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input class="form-control" type="text" name="last_name" id="last_name" placeholder="Enter your last name" required>
                        </div>
                        <!-- device id -->
                        <div class="form-group">
                            <label for="device_id">Device ID</label>
                            <input class="form-control" type="text" name="device_id" value="<?= generate_device_id($conn, 6); ?>" id="device_id" readonly required>
                        </div>
                        <!-- email -->
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input class="form-control" type="email" name="email" id="email" placeholder="Enter your email" required>
                        </div>
                        <!-- password -->
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="Enter your password" required>
                        </div>
                        <!-- submit and clear -->
                        <div class="form-group">
                            <button class="btn btn-outline-primary" type="submit">
                                Register Me
                            </button>
                            <button class="btn btn-outline-secondary" type="reset">
                                Clear
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include_once('partials/_footer.php'); ?>