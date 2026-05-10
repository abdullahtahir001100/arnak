<!DOCTYPE html>
<html lang="en">

    <head>
        <title>login</title>
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
                        <div class="content">
                            <p>Already have an account? <a href=""> Login</a></p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="login_page">
                <div class="contain">
                    <div class="form_areea">
                        <div class="sec_heading">
                            <h3>Create Your Account</h3>
                            <p>Join us and start managing your finances</p>
                        </div>
                        <form action="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="txtGrp">
                                        <div class="icos">
                                            <img src="images/user.svg" alt="">
                                        </div>
                                        <input type="email" class="txtBox" name="email" placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="txtGrp">
                                        <div class="icos">
                                            <img src="images/sms.svg" alt="">
                                        </div>
                                        <input type="email" class="txtBox" name="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="txtGrp">
                                        <div class="icos">
                                            <img src="images/phone.svg" alt="">
                                        </div>
                                        <input type="email" class="txtBox" name="email" placeholder="Your Phone">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="txtGrp">
                                        <div class="icos">
                                            <img src="images/key.svg" alt="">
                                        </div>
                                        <input type="Password" class="txtBox" name="Your Password"
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
                                        <input type="Password" class="txtBox" name="Confirm Password"
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
                                <div class="col-md-12">
                                    <div class="new_link">
                                        <p>Or Sign Up with</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="cta">
                                        <button class="webBtn">
                                            <div class="google"><img src="images/google.svg" alt=""></div>Sign Up with
                                            google
                                        </button>
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