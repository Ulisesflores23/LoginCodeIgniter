<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LoginExamen</title>

    <link href="<?php echo base_url() ?>/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/public/css/styles.css" rel="stylesheet">
</head>

<body class="container">
    <div class="vh-100 d-flex col-xs-12  col-sm-6col-md-8 justify-content-md-end align-items-center">
        <div class="card">
            <div class="card-header mt-3">
                <img src="<?php echo base_url() ?>/public/img/login.png" class="card-img-top imgLogin" alt="imagen login">
                <h1 class="card-title text-center">Log in</h1>
                <p>Welcome to my page. To continue, Create an account</p>
            </div>
            <div class="card-body form-validation justify-content-center">
                <form id="form-log" method="post" class="form-validate justify-content-center" autocomplete="off">
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" name="email" required>
                        <label class="from-label" for="email">Email</label>
                    </div>
                    <div class="mb-3">
                        <input type="password" minlength="6" maxlength="12" class="form-control" id="password" name="password" required>
                        <label class="from-label" for="password">Password</label>
                    </div>
                    <div class="d-flex justify-content-center ">
                        <button type="submit" id="btn-log" class="btn btn-primary btn-lg justify-content-center">Log in</button>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe" name="remember_me">
                        <label class="form-check-label" for="rememberMe">Recuérdame</label>
                    </div>
                    <a href="<?php echo base_url() ?>/register">Create an account</a>
                </form>
            </div>
        </div>

        <script src="<?php echo base_url() ?>/public/js/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>/public/js/jquery.validate.min.js"></script>
        <script src="<?php echo base_url() ?>/public/js/popper.min.js"></script>
        <script src="<?php echo base_url() ?>/public/js/login.js"></script>
        <script src="<?php echo base_url() ?>/public/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>/public/js/bootstrap.bundle.min.js"></script>
        <script>
            var base_url = "<?php echo base_url() ?>";
        </script>
    </div>
</body>

</html>