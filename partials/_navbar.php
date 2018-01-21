<nav class="navbar fixed-top navbar-expand-sm navbar-dark" style="background-color: #37474F;">
    <div class="container">
        <a class="navbar-brand" href="#">
            Project
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primaryNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="primaryNavbar">
        <ul class="navbar-nav ml-auto">
            <?php if(isset($_SESSION['secure']) && isset($_SESSION['user_logged'])): ?>
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    Logout
                </a>
            </li>
            <?php else: ?>
            <li class="nav-item">
                <a class="nav-link" href="login.php">
                    Login
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">
                    Register
                </a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>