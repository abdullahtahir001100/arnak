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
                            <h3>Overview</h3>
                            <p>Manage all your accounts in one place</p>
                        </div>

                    </div>
                    <div class="income_body">
                        <div class="income_inner overview_inner ">
                            <div class="tabs_area">
                                <div class="first_part">
                                    <ul class="flex nav nav-tabs">
                                        <li class="cols active">
                                            <a href="#tab1" class=" a" data-toggle="tab">
                                                Needs
                                            </a>
                                        </li>
                                        <li class="cols">
                                            <a href="#tab2" class=" b" data-toggle="tab">
                                                Wants
                                            </a>
                                        </li>
                                        <li class="cols">
                                            <a href="#tab3" class=" c" data-toggle="tab">
                                                Savings
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div id="tab1" class="tab-pane fade a active in">
                                        <div class="hisogram">
                                            <h3>Expense percentage of income</h3>
                                            <canvas id="chart1"></canvas>
                                        </div>
                                        <div class="hisogram mobile_padding">
                                            <h3>Average expense per subcategory</h3>
                                            <canvas id="chart2"></canvas>
                                        </div>
                                    </div>
                                    <div id="tab2" class="tab-pane fade b">
                                        <div class="hisogram">
                                            <h3>Expense percentage of income</h3>
                                            <canvas id="chart1"></canvas>
                                        </div>
                                        <div class="hisogram">
                                            <h3>Average expense per subcategory</h3>
                                            <canvas id="chart2"></canvas>
                                        </div>
                                    </div>
                                    <div id="tab3" class="tab-pane fade c">
                                        <div class="hisogram">
                                            <h3>Expense percentage of income</h3>
                                            <canvas id="chart1"></canvas>
                                        </div>
                                        <div class="hisogram">
                                            <h3>Average expense per subcategory</h3>
                                            <canvas id="chart2"></canvas>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="second_part">
                                <div class="flex flexRow">
                                    <div class="cols col1">
                                        <div class="hisogram">
                                            <h3>Average income per source</h3>
                                            <canvas id="chart3"></canvas>
                                        </div>
                                    </div>
                                    <div class="cols col2">
                                        <div class="chart-container">
                                            <div class="hisogram mobile_margin">
                                                <h3>Average Yearly income expenses and balance</h3>
                                                <div class="imge">
                                                    <canvas id="pieChart1"></canvas>
                                                </div>
                                                <!-- <div style="width: 100%; height: 400px;">
                                                    <canvas id="myyPieChart"></canvas>
                                                </div> -->
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="inner_body">
                                <h4>Totals</h4>
                                <div class="flex flexRow">
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