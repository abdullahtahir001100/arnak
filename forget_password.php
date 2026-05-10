<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Forget Password</title>
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
                            <h3>Forgot Password?</h3>
                            <p>Enter your email address associated with your account</p>
                        </div>
                        <form action="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="txtGrp">
                                        <div class="icos">
                                            <img src="images/sms.svg" alt="">
                                        </div>
                                        <input type="email" class="txtBox" name="email" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="cta">
                                        <button class="webBtn">Submit</button>
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