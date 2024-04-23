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
                <h1 class="card-title text-center">Sing up</h1>
                <p>Welcome to my page. To continue, Create an account</p>
            </div>
            <div class="card-body form-validation">
                <form id="form-register" method="post" class="form-valide" autocomplete="off">
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" name="email" required>
                        <label class="from-label" for="email">Email</label>
                    </div>
                    <div class="mb-3">
                        <input type="password" minlength="6" maxlength="12" class="form-control" id="password" name="password" required>
                        <label class="from-label" for="password">Password</label>
                    </div>
                    <div class="mb-3">
                        <input type="password" minlength="6" maxlength="12" class="form-control" id="password2" name="password2" required>
                        <label class="from-label" for="password2">Confirm your password</label>
                    </div>
                    <div class="d-flex justify-content-center ">
                        <button type="submit" id="btn-registrar" class="btn btn-primary btn-lg justify-content-center">Sing in</button>
                    </div>
                    <a href="<?php echo base_url() ?>/login">Do you already have an account? Log in</a>
                </form>

                <div class="position-fixed buttom-0 end-0 p-3" style="z-index:11">
                    <div id="toast-success" class="toast hide bg-success" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <strong class="me-auto">Register successfull</strong>
                            <small>Done</small>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div id="msj-toast-success" class="toast-body">
                            Registered
                        </div>
                    </div>
                </div>

                <div class="position-fixed buttom-0 end-0 p-3" style="z-index:11">
                    <div id="toast-error" class="toast hide bg-danger" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <strong class="me-auto">Error</strong>
                            <small>Failed</small>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div id="msj-toast-error" class="toast-body">
                            Something wrong ocurred
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="<?php echo base_url() ?>/public/js/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>/public/js/jquery.validate.min.js"></script>
        <script src="<?php echo base_url() ?>/public/js/popper.min.js"></script>
        <script src="<?php echo base_url() ?>/public/js/register.js"></script>
        <script src="<?php echo base_url() ?>/public/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>/public/js/bootstrap.bundle.min.js"></script>
        <script>
            var base_url = "<?php echo base_url()?>";
        </script>
    </div>
</body>

</html>