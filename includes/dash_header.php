<!-- header -->
<header class="dash_header">
    <div class="contain">
        <div class="logo">
            <a href="index.php">
                <img src="<?=$baseurl?>images/logo-2.svg" alt="">
            </a>
        </div>
        <div class="toggle"><span></span></div>
        <nav class="ease" nav="">
            <ul id="nav">
                <li class="">
                    <a href="index.php" class="<?= ($page == 'index' || $page == '') ? 'active' : '' ?>">Home</a>
                </li>
                <li class="">
                    <a href="income.php" class="<?= ($page == 'about') ? 'active' : '' ?>">income and Expences</a>
                </li>
                <li class="">
                    <a href="accounts.php" class="<?= ($page == 'contact') ? 'active' : '' ?>">Accounts</a>
                </li>
                <li class="">
                    <a href="goals.php" class="<?= ($page == '') ? 'active' : '' ?>">Savings</a>
                </li>
                <li class="">
                    <a href="budget.php" class="<?= ($page == '') ? 'active' : '' ?>">Budget Master</a>
                </li>
                <li class="">
                    <a href="overview.php" class="<?= ($page == '') ? 'active' : '' ?>">Overview</a>
                </li>

            </ul>
        </nav>
        <div class="proIco _dropDown">
            <div class="ico _dropBtn">
                <div class="image">
                    <img src="<?=$baseurl?>images/user-1.png" alt="">
                </div>
            </div>
            <div class="proDrop _dropCnt profileCnt">
                <ul class="dropLst">
                    <li>
                        <div class="user_header">
                            <h6>Abida Rehman</h6>
                        </div>
                    </li>
                    <li>
                        <a class="" href="">
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li><a href="">
                            <span>Logout</span></a></li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</header>