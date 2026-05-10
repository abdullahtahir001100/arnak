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
                            <h3>Budget Master</h3>
                            <p>Set your sights on financial freedom with clear, actionable goals.</p>
                        </div>

                    </div>
                    <div class="budget_body">
                        <div class="budget_inner">
                            <div class="first_part">
                                <ul class="flex four_box nav nav-tabs">
                                    <li class="cols active">
                                        <a href="#tab1" class="inner a" data-toggle="tab">
                                            <p>Income</p>
                                            <p>24882 USD</p>
                                        </a>
                                    </li>
                                    <li class="cols">
                                        <a href="#tab2" class="inner b" data-toggle="tab">
                                            <p>Needs</p>
                                            <p class="yellow">51%</p>
                                        </a>
                                    </li>
                                    <li class="cols">
                                        <a href="#tab3" class="inner c" data-toggle="tab">
                                            <p>Wants</p>
                                            <p class="green">49%</p>
                                        </a>
                                    </li>
                                    <li class="cols">
                                        <a href="#tab4" class="inner d" data-toggle="tab">
                                            <p>Savings</p>
                                            <p class="red">18%</p>
                                        </a>
                                    </li>
                                </ul>

                                <div class="flex two_box">
                                    <div class="cols">
                                        <div class="inner">
                                            <p>Monthly Balance</p>
                                            <p class="grey">4756 USD</p>
                                        </div>
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
                            </div>
                            <div class="tab-content">
                                <div id="tab1" class="tab-pane fade a active in">
                                    <div class="second_part">
                                        <div class="cta">
                                            <a href="" class="webBtn light_blue">Add new Expense</a>
                                        </div>
                                    </div>
                                    <div class="third_part">
                                        <div class="flex flex_three">
                                            <div class="cols">
                                                <div class="inner">
                                                    <div class="bold_area">
                                                        <h5>Rent</h5>
                                                        <div class="dots">
                                                            <img src="../images/fi-ss-menu-dots.svg" alt="">
                                                            <div class="dropdowns">
                                                                <ul>
                                                                    <li><a href="">Add</a></li>
                                                                    <li><a href="">View</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="colored_area">
                                                        <p>Allocated Budget</p>
                                                        <h4 class="yellow">5220.00 USD</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cols">
                                                <div class="inner">
                                                    <div class="bold_area">
                                                        <h5>Groceries</h5>
                                                        <div class="dots">
                                                            <img src="../images/fi-ss-menu-dots.svg" alt="">
                                                            <div class="dropdowns">
                                                                <ul>
                                                                    <li><a href="">Add</a></li>
                                                                    <li><a href="">View</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="colored_area">
                                                        <p>Allocated Budget</p>
                                                        <h4 class="green">600.00 USD</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cols">
                                                <div class="inner">
                                                    <div class="bold_area">
                                                        <h5>Utilities</h5>
                                                        <div class="dots">
                                                            <img src="../images/fi-ss-menu-dots.svg" alt="">
                                                            <div class="dropdowns">
                                                                <ul>
                                                                    <li><a href="">Add</a></li>
                                                                    <li><a href="">View</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="colored_area">
                                                        <p>Allocated Budget</p>
                                                        <h4 class="dark_blue">300.00 USD</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cols">
                                                <div class="inner">
                                                    <div class="bold_area">
                                                        <h5>Transportation</h5>
                                                        <div class="dots">
                                                            <img src="../images/fi-ss-menu-dots.svg" alt="">
                                                            <div class="dropdowns">
                                                                <ul>
                                                                    <li><a href="">Add</a></li>
                                                                    <li><a href="">View</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="colored_area">
                                                        <p>Allocated Budget</p>
                                                        <h4 class="purple">1200.00 USD</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cols">
                                                <div class="inner">
                                                    <div class="bold_area">
                                                        <h5>Rent</h5>
                                                        <div class="dots">
                                                            <img src="../images/fi-ss-menu-dots.svg" alt="">
                                                            <div class="dropdowns">
                                                                <ul>
                                                                    <li><a href="">Add</a></li>
                                                                    <li><a href="">View</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="colored_area">
                                                        <p>Allocated Budget</p>
                                                        <h4 class="dark_purple">300.00 USD</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cols">
                                                <div class="inner">
                                                    <div class="bold_area">
                                                        <h5>Insurance</h5>
                                                        <div class="dots">
                                                            <img src="../images/fi-ss-menu-dots.svg" alt="">
                                                            <div class="dropdowns">
                                                                <ul>
                                                                    <li><a href="">Add</a></li>
                                                                    <li><a href="">View</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="colored_area">
                                                        <p>Allocated Budget</p>
                                                        <h4 class="extra_purple">5220.00 USD</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab2" class="tab-pane fade b">
                                    <div class="second_part">
                                        <div class="cta">
                                            <a href="" class="webBtn light_blue">Add new Expense</a>
                                        </div>
                                    </div>
                                    <div class="third_part">
                                        <div class="flex flex_three">
                                            <div class="cols">
                                                <div class="inner">
                                                    <div class="bold_area">
                                                        <h5>Rent</h5>
                                                        <div class="dots">
                                                            <img src="../images/fi-ss-menu-dots.svg" alt="">
                                                            <div class="dropdowns">
                                                                <ul>
                                                                    <li><a href="">Add</a></li>
                                                                    <li><a href="">View</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="colored_area">
                                                        <p>Allocated Budget</p>
                                                        <h4 class="yellow">5220.00 USD</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cols">
                                                <div class="inner">
                                                    <div class="bold_area">
                                                        <h5>Groceries</h5>
                                                        <div class="dots">
                                                            <img src="../images/fi-ss-menu-dots.svg" alt="">
                                                            <div class="dropdowns">
                                                                <ul>
                                                                    <li><a href="">Add</a></li>
                                                                    <li><a href="">View</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="colored_area">
                                                        <p>Allocated Budget</p>
                                                        <h4 class="green">600.00 USD</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cols">
                                                <div class="inner">
                                                    <div class="bold_area">
                                                        <h5>Utilities</h5>
                                                        <div class="dots">
                                                            <img src="../images/fi-ss-menu-dots.svg" alt="">
                                                            <div class="dropdowns">
                                                                <ul>
                                                                    <li><a href="">Add</a></li>
                                                                    <li><a href="">View</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="colored_area">
                                                        <p>Allocated Budget</p>
                                                        <h4 class="dark_blue">300.00 USD</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cols">
                                                <div class="inner">
                                                    <div class="bold_area">
                                                        <h5>Transportation</h5>
                                                        <div class="dots">
                                                            <img src="../images/fi-ss-menu-dots.svg" alt="">
                                                            <div class="dropdowns">
                                                                <ul>
                                                                    <li><a href="">Add</a></li>
                                                                    <li><a href="">View</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="colored_area">
                                                        <p>Allocated Budget</p>
                                                        <h4 class="purple">1200.00 USD</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cols">
                                                <div class="inner">
                                                    <div class="bold_area">
                                                        <h5>Rent</h5>
                                                        <div class="dots">
                                                            <img src="../images/fi-ss-menu-dots.svg" alt="">
                                                            <div class="dropdowns">
                                                                <ul>
                                                                    <li><a href="">Add</a></li>
                                                                    <li><a href="">View</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="colored_area">
                                                        <p>Allocated Budget</p>
                                                        <h4 class="dark_purple">300.00 USD</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cols">
                                                <div class="inner">
                                                    <div class="bold_area">
                                                        <h5>Insurance</h5>
                                                        <div class="dots">
                                                            <img src="../images/fi-ss-menu-dots.svg" alt="">
                                                            <div class="dropdowns">
                                                                <ul>
                                                                    <li><a href="">Add</a></li>
                                                                    <li><a href="">View</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="colored_area">
                                                        <p>Allocated Budget</p>
                                                        <h4 class="extra_purple">5220.00 USD</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab3" class="tab-pane fade c">
                                    <div class="second_part">
                                        <div class="cta">
                                            <a href="" class="webBtn light_blue">Add new Expense</a>
                                        </div>
                                    </div>
                                    <div class="third_part">
                                        <div class="flex flex_three">
                                            <div class="cols">
                                                <div class="inner">
                                                    <div class="bold_area">
                                                        <h5>Rent</h5>
                                                        <div class="dots">
                                                            <img src="../images/fi-ss-menu-dots.svg" alt="">
                                                            <div class="dropdowns">
                                                                <ul>
                                                                    <li><a href="">Add</a></li>
                                                                    <li><a href="">View</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="colored_area">
                                                        <p>Allocated Budget</p>
                                                        <h4 class="yellow">5220.00 USD</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cols">
                                                <div class="inner">
                                                    <div class="bold_area">
                                                        <h5>Groceries</h5>
                                                        <div class="dots">
                                                            <img src="../images/fi-ss-menu-dots.svg" alt="">
                                                            <div class="dropdowns">
                                                                <ul>
                                                                    <li><a href="">Add</a></li>
                                                                    <li><a href="">View</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="colored_area">
                                                        <p>Allocated Budget</p>
                                                        <h4 class="green">600.00 USD</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cols">
                                                <div class="inner">
                                                    <div class="bold_area">
                                                        <h5>Utilities</h5>
                                                        <div class="dots">
                                                            <img src="../images/fi-ss-menu-dots.svg" alt="">
                                                            <div class="dropdowns">
                                                                <ul>
                                                                    <li><a href="">Add</a></li>
                                                                    <li><a href="">View</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="colored_area">
                                                        <p>Allocated Budget</p>
                                                        <h4 class="dark_blue">300.00 USD</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cols">
                                                <div class="inner">
                                                    <div class="bold_area">
                                                        <h5>Transportation</h5>
                                                        <div class="dots">
                                                            <img src="../images/fi-ss-menu-dots.svg" alt="">
                                                            <div class="dropdowns">
                                                                <ul>
                                                                    <li><a href="">Add</a></li>
                                                                    <li><a href="">View</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="colored_area">
                                                        <p>Allocated Budget</p>
                                                        <h4 class="purple">1200.00 USD</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cols">
                                                <div class="inner">
                                                    <div class="bold_area">
                                                        <h5>Rent</h5>
                                                        <div class="dots">
                                                            <img src="../images/fi-ss-menu-dots.svg" alt="">
                                                            <div class="dropdowns">
                                                                <ul>
                                                                    <li><a href="">Add</a></li>
                                                                    <li><a href="">View</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="colored_area">
                                                        <p>Allocated Budget</p>
                                                        <h4 class="dark_purple">300.00 USD</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cols">
                                                <div class="inner">
                                                    <div class="bold_area">
                                                        <h5>Insurance</h5>
                                                        <div class="dots">
                                                            <img src="../images/fi-ss-menu-dots.svg" alt="">
                                                            <div class="dropdowns">
                                                                <ul>
                                                                    <li><a href="">Add</a></li>
                                                                    <li><a href="">View</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="colored_area">
                                                        <p>Allocated Budget</p>
                                                        <h4 class="extra_purple">5220.00 USD</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab4" class="tab-pane fade d">
                                    <div class="second_part">
                                        <div class="cta">
                                            <a href="" class="webBtn light_blue">Add new Expense</a>
                                        </div>
                                    </div>
                                    <div class="third_part">
                                        <div class="flex flex_three">
                                            <div class="cols">
                                                <div class="inner">
                                                    <div class="bold_area">
                                                        <h5>Rent</h5>
                                                        <div class="dots">
                                                            <img src="../images/fi-ss-menu-dots.svg" alt="">
                                                            <div class="dropdowns">
                                                                <ul>
                                                                    <li><a href="">Add</a></li>
                                                                    <li><a href="">View</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="colored_area">
                                                        <p>Allocated Budget</p>
                                                        <h4 class="yellow">5220.00 USD</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cols">
                                                <div class="inner">
                                                    <div class="bold_area">
                                                        <h5>Groceries</h5>
                                                        <div class="dots">
                                                            <img src="../images/fi-ss-menu-dots.svg" alt="">
                                                            <div class="dropdowns">
                                                                <ul>
                                                                    <li><a href="">Add</a></li>
                                                                    <li><a href="">View</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="colored_area">
                                                        <p>Allocated Budget</p>
                                                        <h4 class="green">600.00 USD</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cols">
                                                <div class="inner">
                                                    <div class="bold_area">
                                                        <h5>Utilities</h5>
                                                        <div class="dots">
                                                            <img src="../images/fi-ss-menu-dots.svg" alt="">
                                                            <div class="dropdowns">
                                                                <ul>
                                                                    <li><a href="">Add</a></li>
                                                                    <li><a href="">View</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="colored_area">
                                                        <p>Allocated Budget</p>
                                                        <h4 class="dark_blue">300.00 USD</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cols">
                                                <div class="inner">
                                                    <div class="bold_area">
                                                        <h5>Transportation</h5>
                                                        <div class="dots">
                                                            <img src="../images/fi-ss-menu-dots.svg" alt="">
                                                            <div class="dropdowns">
                                                                <ul>
                                                                    <li><a href="">Add</a></li>
                                                                    <li><a href="">View</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="colored_area">
                                                        <p>Allocated Budget</p>
                                                        <h4 class="purple">1200.00 USD</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cols">
                                                <div class="inner">
                                                    <div class="bold_area">
                                                        <h5>Rent</h5>
                                                        <div class="dots">
                                                            <img src="../images/fi-ss-menu-dots.svg" alt="">
                                                            <div class="dropdowns">
                                                                <ul>
                                                                    <li><a href="">Add</a></li>
                                                                    <li><a href="">View</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="colored_area">
                                                        <p>Allocated Budget</p>
                                                        <h4 class="dark_purple">300.00 USD</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cols">
                                                <div class="inner">
                                                    <div class="bold_area">
                                                        <h5>Insurance</h5>
                                                        <div class="dots">
                                                            <img src="../images/fi-ss-menu-dots.svg" alt="">
                                                            <div class="dropdowns">
                                                                <ul>
                                                                    <li><a href="">Add</a></li>
                                                                    <li><a href="">View</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="colored_area">
                                                        <p>Allocated Budget</p>
                                                        <h4 class="extra_purple">5220.00 USD</h4>
                                                    </div>
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
        <?php include_once('../includes/commonjs.php') ?>
    </body>

</html>