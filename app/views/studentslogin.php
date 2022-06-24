<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo URLROOT; ?>/public/img/Logo_icon.png" type="image/png">
    <title><?php echo SITENAME; ?></title>
    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style-starter.css">
</head>

<body>
    <!-- header -->
    <header id="site-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="<?php echo URLROOT; ?>/img/logolong.png" style="width: 200px;" alt=""></a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URLROOT; ?>/pages/index#abouts">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URLROOT; ?>/pages/index#sign">Teacher</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URLROOT; ?>/pages/index#sign">Student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URLROOT; ?>/pages/index#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- //header -->
    <section class="w3l-contact py-2" style="background-color: #212529;">
        <div class="container py-md-5 py-4">
            <div>
                <div class="banner-content">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 d-flex justify-content-center align-item-center">
                                <div class="col-md-9">
                                    <form action="<?php echo URLROOT; ?>/Studentscontroller/login" method="POST">
                                        <!-- Username input -->
                                        <div class="form-outline mb-4">
                                            <span class="invalidFeedback">
                                                <?php if (isset($data['emailError'])) echo $data['emailError']; ?>
                                            </span>
                                            <input type="text" placeholder="Entrer votre email" name="email" id="form2Example1" class="form-control" />
                                        </div>

                                        <!-- Password input -->
                                        <div class="form-outline mb-4">
                                            <span class="invalidFeedback">
                                                <?php if (isset($data['passwordError'])) echo $data['passwordError']; ?>
                                            </span>
                                            <input type="password" placeholder="Entrer votre mot de passe" name="password" id="form2Example2" class="form-control" />
                                        </div>

                                        <!-- 2 column grid layout for inline styling -->
                                        <div class="row mb-4">
                                            <div class="col d-flex justify-content-center">
                                                <!-- Checkbox -->
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                                    <label class="form-check-label text-light" for="form2Example31"> Remember me </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Submit button -->
                                        <div class="text-center">
                                            <button type="submit" name="submit" value="submit" class="btn btn-style" style="padding: 10px 46px 12px;">Log in</button>
                                        </div>
                                        <!-- Register buttons -->
                                        <div class="text-center mt-3">
                                            <p class="text-light">Not a member? <a class="text-info" href="<?php echo URLROOT; ?>/pages/studentsregister">Create an account!</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 right-banner-2 text-end position-relative mt-md-0 mt-5">
                                <div class="sub-banner-image mx-auto">
                                    <img src="<?php echo URLROOT; ?>/public/img/banner.png" style="width: 80%;" class="img-fluid position-relative" alt=" ">
                                </div>
                                <div class="banner-style-1 position-absolute">
                                    <div class="banner-style-2 position-relative text-white">
                                        <h4>Let's Log In</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer block -->
    <footer class="w3l-footer-29-main">
        <div class="footer-29 pb-2">
            <div class="container">
                <!-- copyright -->
                <p class="copy-footer-29 text-center pt-lg-2 pb-2">© 2021 IdealProf. All rights reserved.</p>
                <!-- //copyright -->
            </div>
        </div>
    </footer>
    <!-- //footer block -->
    <script src="<?php echo URLROOT; ?>/js/bootstrap.min.js"></script>
</body>

</html>