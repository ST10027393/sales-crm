<header>
    <div>
        <div class="div-left">
            <a class="navbar-brand" href="#">
                <img class="logo-one" alt="Logo" src="logo 1.png">
            </a>
        </div>
        <div class="div-center">
            <a class="navbar-brand" href="#">
                <img class="logo-two" alt="Container World" src="logo 2.png">
            </a>
        </div>
    </div>
    <div>
        <nav>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Track Report</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sales.php">Sales</a>
                </li>
                <li class="nav-item">
                    <?php
                        // Check if the user is logged in or not
                        $loggedIn = false; // Set this value based on your authentication logic

                        if ($loggedIn) {
                            echo '<a class="nav-link" href="#">Welcome, User</a>';
                            echo '<a class="nav-link" href="logout.php">Log Out</a>'; // Replace "logout.php" with your actual logout URL
                        } else {
                            echo '<button class="login-button" id="loginButton">Log In</button>';
                        }
                    ?>
                </li>
            </ul>
        </nav>
    </div>
</header>
