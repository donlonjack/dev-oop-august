
    <nav class="navbar navber-expand-lg navbar-dark bg-dark">

        <div class="ms-auto">
            <ul class="navbar-nav me-3">
                <li class="nav-item col-4">
                    <a href="dashboard.php" class="nav-link">
                        <?= $_SESSION['username'];?>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../actions/logout.php" class="nav-link text-danger">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>
