<!-- header -->
<header class="ease">
    <div class="contain">
        <div class="logo">
            <a href="index.php">
                <img src="images/logo.svg" alt="">
            </a>
        </div>
        <div class="toggle"><span></span></div>
        <nav class="ease" nav="">
            <ul id="nav">
                <li class="">
                    <a href="index.php" class="<?= ($page == 'index' || $page == '') ? 'active' : '' ?>">Home</a>
                </li>
                <li class="">
                    <a href="about.php" class="<?= ($page == 'about') ? 'active' : '' ?>">About Us</a>
                </li>
                <li class="">
                    <a href="" class="<?= ($page == 'contact') ? 'active' : '' ?>">Contact Us</a>
                </li>
                <li class="">
                    <a href="login.php" class="<?= ($page == '') ? 'active' : '' ?>">Login</a>
                </li>
                <li class="">
                    <a href="signup.php" class="webBtn">Sign Up</a>
                </li>

            </ul>
        </nav>
        <div class="clearfix"></div>
    </div>
</header>