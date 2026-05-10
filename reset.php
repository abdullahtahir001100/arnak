<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Reset</title>
        <?php include_once('includes/site-master.php') ?>
    </head>

    <body>
        <main class="back_bg">
            <section class="header_top">
                <div class="contain">
                    <div class="inner">
                        <div class="logo">
                            <a href="index.php"> <img src="images/logo-1.svg" alt=""></a>
                        </div>

                    </div>
                </div>
            </section>
            <section class="login_page">
                <div class="contain">
                    <div class="form_areea">
                        <div class="sec_heading">
                            <h3>Reset your password</h3>
                        </div>
                        <form action="">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="txtGrp">
                                        <div class="icos">
                                            <img src="images/key.svg" alt="">
                                        </div>
                                        <input type="Password" class="txtBox" name="New Password"
                                            placeholder="Your Password" id="password">
                                        <div class="eye_ico toggle-password">
                                            <img src="images/eye.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="txtGrp">
                                        <div class="icos">
                                            <img src="images/key.svg" alt="">
                                        </div>
                                        <input type="Password" class="txtBox" name="Confirm New Password"
                                            placeholder="Your Password" id="password">
                                        <div class="eye_ico toggle-password">
                                            <img src="images/eye.svg" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="cta">
                                        <button class="webBtn">Sign Up</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        <?php include_once('includes/commonjs.php') ?>
    </body>

</html>