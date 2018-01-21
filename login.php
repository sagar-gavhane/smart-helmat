    <?php include_once('partials/_header.php'); ?>

    <!-- navbar -->
    <?php include_once('partials/_navbar.php'); ?>

    <!-- container -->
    <div class="container">
        <div class="row no-gutters-xs">
            <!-- page heading -->
            <div class="col-xs-12 col-sm-12">
                <div class="row">
                    <h2 class="my-4 w-100">Login</h2>
                    <span class="d-block border-bottom"></span>
                </div>
            </div>
            <!-- login form -->
            <div class="col-xs-12 col-sm-4">
                <div class="row">
                    <form class="w-100" action="login_process.php" method="post">
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
                                Login Me
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