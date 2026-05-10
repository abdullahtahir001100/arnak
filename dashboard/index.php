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
                            <h3>Welcome Back! <strong>Aley Gilbert</strong></h3>
                            <p>Manage all your accounts in one place</p>
                        </div>
                        <div class="sec_area">
                            <form action="">
                                <select name="" id="" class="input">
                                    <option value="0">Month</option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="main_body">
                        <div class="inner_body">
                            <div class="flex">
                                <div class="cols">
                                    <div class="inner">
                                        <p>Total Income</p>
                                        <h5>$453,690</h5>
                                    </div>
                                </div>
                                <div class="cols">
                                    <div class="inner">
                                        <p>Total Expenses</p>
                                        <h5>$228,320</h5>
                                    </div>
                                </div>
                                <div class="cols">
                                    <div class="inner">
                                        <p>Total Balance</p>
                                        <h5>$453,690</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="expenses">
                                <div class="above_area">
                                    <div class="heading_up">
                                        <h4>All Expenses</h4>
                                    </div>
                                    <div class="sec_area">
                                        <div class="calender">
                                            <img src="../images/celender.svg" alt="">
                                        </div>
                                        <form action="">
                                            <select name="" id="" class="input-2">
                                                <option value="0">Month</option>
                                                <option value="1">Jan</option>
                                                <option value="2">Feb</option>
                                                <option value="3">Mrch</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">Jun</option>
                                                <option value="7">Jul</option>
                                                <option value="8">Augst</option>
                                                <option value="9">Sep</option>
                                                <option value="10">Oct</option>
                                                <option value="11">Nov</option>
                                                <option value="12">Dec</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <div class="flex short_cols">
                                    <div class="coll">
                                        <div class="inner">
                                            <p>Needs</p>
                                            <h4>$43475</h4>
                                        </div>
                                    </div>
                                    <div class="coll">
                                        <div class="inner">
                                            <p>Wants</p>
                                            <h4>$13,327</h4>
                                        </div>
                                    </div>
                                    <div class="coll">
                                        <div class="inner">
                                            <p>Savings</p>
                                            <h4>$12.131</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="chart-container">

                                    <div class="img">
                                        <canvas id="pieChart2"></canvas>
                                    </div>

                                </div>
                            </div>
                            <div class="flex">
                                <div class="cols">
                                    <div class="inner">
                                        <p>Net Worth</p>
                                        <h5>$90,00</h5>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include_once('../includes/commonjs.php') ?>
    </body>

</html>