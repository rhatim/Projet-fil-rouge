<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo URLROOT; ?>/public/img/Logo_icon.png" type="image/png">
    <title><?php echo SITENAME; ?></title>
    <link href="//fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style-starter.css">
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center align-items-center ">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="auth-form-light text-center p-5">
                            <div class="brand-logo m-1">
                                <a href="<?php echo URLROOT; ?>/pages/index"><img src="<?php echo URLROOT; ?>/img/logolong.png" style="width: 250px;"></a>
                            </div>
                            <h4>Authentification</h4>
                            <?php if (!empty($data)) { ?>
                                <div class="alert alert-success mt-3 text-center">
                                    <?php echo $data['created']; ?>
                                </div>
                            <?php } ?>
                            <form action="<?php echo URLROOT; ?>/Admincontroller/login" method="POST" class="pt-3">
                                <div class="form-group py-3">
                                    <span class="invalidFeedback">
                                        <?php if (isset($data['emailError'])) echo $data['emailError']; ?>
                                    </span>
                                    <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group py-3">
                                    <span class="invalidFeedback">
                                        <?php if (isset($data['passwordError'])) echo $data['passwordError']; ?>
                                    </span>
                                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" required>
                                </div>
                                <div class="my-3">
                                    <button type="submit" name="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SE CONNECTER</button>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input"> Se souvenir de moi </label>
                                    </div>
                                    <a href="#" class="auth-link text-black">Mot de passe oublié?</a>
                                </div>
                                <div class="text-center mt-4 font-weight-light"> Vous n'avez pas de compte? <a href="<?php echo URLROOT; ?>/pages/index#contact" class="text-primary">Contacter-nous</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo URLROOT; ?>/js/bootstrap.min.js"></script>
</body>

</html>