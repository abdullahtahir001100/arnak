<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Dashboard</title>
        <?php include_once('../includes/site-master.php') ?>
    </head>

    <body>
        <?php include_once('../includes/dash_header.php') ?>
        <main>
            <section class="dashboard_main">
                <div class="contain">
                    <div class="main_head">
                        <div class="sec_heading">
                            <h4>Saving Goals</h4>
                            <p>Set your sights on financial freedom with clear, actionable goals.</p>
                        </div>
                        <div class="second_part">
                            <div class="cta">
                                <!-- <a href="" class="webBtn light_blue">Set Budget Master</a> -->
                                <a href="javascript:void(0)" class="webBtn light_blue blue_shadow popBtn "
                                    data-popup="add_goal">Add
                                    Add new Goal</a>
                            </div>
                        </div>
                    </div>
                    <div class="goals_body">
                        <div class="goals_inner">
                            <div class="flex third_part flexRow">
                                <div class="cols">
                                    <div class="inner">
                                        <div class="dots">
                                            <img src="../images/fi-ss-menu-dots.svg" alt="">
                                            <div class="dropdowns">
                                                <ul>
                                                    <li><a href="">Edit</a></li>
                                                    <li><a href="">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="inner_cols">
                                            <div class="progressBar">
                                                <div class="bar">
                                                    <div class="progress-container">

                                                        <div class="progress-value" data-progress="0.65">
                                                            <div class="values">
                                                                <div class="percent">0%</div>
                                                                <div class="text">Buy a Car</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-details">
                                                    <ul>
                                                        <li>
                                                            <p>Target</p>
                                                            <h5>1700.0 USD</h5>
                                                        </li>
                                                        <li>
                                                            <p>Account</p>
                                                            <h5>Savings Account</h5>
                                                        </li>
                                                        <li>
                                                            <p>Current Balance</p>
                                                            <h5>1000 USD</h5>
                                                        </li>
                                                        <li>
                                                            <p>Deadline</p>
                                                            <h5>Dec 31, 2024</h5>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cols">
                                    <div class="inner">
                                        <div class="dots">
                                            <img src="../images/fi-ss-menu-dots.svg" alt="">
                                            <div class="dropdowns">
                                                <ul>
                                                    <li><a href="">Edit</a></li>
                                                    <li><a href="">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="inner_cols">
                                            <div class="progressBar">
                                                <div class="bar">
                                                    <div class="progress-container">
                                                        <div class="circle"></div>
                                                        <div class="progress-value" data-progress="0.80">
                                                            <div class="values">
                                                                <div class="percent">0%</div>
                                                                <div class="text">Buy a Car</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-details">
                                                    <ul>
                                                        <li>
                                                            <p>Target</p>
                                                            <h5>1700.0 USD</h5>
                                                        </li>
                                                        <li>
                                                            <p>Account</p>
                                                            <h5>Savings Account</h5>
                                                        </li>
                                                        <li>
                                                            <p>Current Balance</p>
                                                            <h5>1000 USD</h5>
                                                        </li>
                                                        <li>
                                                            <p>Deadline</p>
                                                            <h5>Dec 31, 2024</h5>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include_once('./popups.php') ?>
        <?php include_once('../includes/commonjs.php') ?>
    </body>

</html>