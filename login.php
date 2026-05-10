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
                            <p>Don’t have an account? <a href="">Sign up</a></p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="login_page">
                <div class="contain">
                    <div class="form_areea">
                        <div class="sec_heading">
                            <h3>Welcome Back</h3>
                            <p>Please log in to your account</p>
                        </div>
                        <form action="">
                            <div class="row">
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
                                            <img src="images/key.svg" alt="">
                                        </div>
                                        <input type="Password" class="txtBox" name="Password"
                                            placeholder="Your Password" id="password">
                                        <div class="eye_ico toggle-password">
                                            <img src="images/eye.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="txtGrp text-right">
                                        <p><a href="forget_password.php">Forget Your Password</a></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="cta">
                                        <button class="webBtn">Login</button>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="new_link">
                                        <p>Or login with</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="cta">
                                        <button class="webBtn">
                                            <div class="google"><img src="images/google.svg" alt=""></div>Sign in with
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