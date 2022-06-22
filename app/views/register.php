<?php
require APPROOT . '/views/includes/head.php';
// var_dump($data);
?>
<div id="section-landing">
    <?php
    require APPROOT . '/views/includes/navigation.php';
    ?>

    <div>
        <div class="banner-content">
            <div class="container">
                <div style="height:100px;">
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 d-flex justify-content-center align-item-center">
                        <div class="col-md-9">
                            <form action="<?php echo URLROOT; ?>/Studentscontroller/register" method="POST">
                                <!-- Username input -->
                                <div class="form-outline d-flex mb-2">
                                    <div class="px-1">
                                        <span class="invalidFeedback">
                                            <?php if (isset($data['nomError'])) echo $data['nomError']; ?>
                                        </span>
                                        <input type="text" placeholder="Entrer votre Nom" name="nom" id="form2Example1" class="form-control" />
                                        <label class="form-label text-light" for="form2Example1">Nom</label>
                                    </div>
                                    <div class="px-1">
                                        <span class="invalidFeedback">
                                            <?php if (isset($data['nomError'])) echo $data['prénomError']; ?>
                                        </span>
                                        <input type="text" placeholder="Entrer votre Prénom" name="prénom" id="form2Example1" class="form-control" />
                                        <label class="form-label text-light" for="form2Example1">Prénom</label>
                                    </div>
                                </div>
                                <div class="form-outline d-flex mb-2">
                                    <div class="px-1">
                                        <span class="invalidFeedback">
                                            <?php if (isset($data['nomError'])) echo $data['emailError']; ?>
                                        </span>
                                        <input type="email" placeholder="Entrer votre adresse email" name="email" id="form2Example1" class="form-control" />
                                        <label class="form-label text-light" for="form2Example1">Email</label>
                                    </div>
                                    <div class="px-1">
                                        <span class="invalidFeedback">
                                            <?php if (isset($data['nomError'])) echo $data['phoneError']; ?>
                                        </span>
                                        <input type="text" placeholder="Entrer votre Numéro de Tél" name="phone" id="form2Example1" class="form-control" />
                                        <label class="form-label text-light" for="form2Example1">Téléphone</label>
                                    </div>
                                </div>
                                <div class="form-outline mb-2">
                                    <div class="px-1">
                                        <span class="invalidFeedback">
                                            <?php if (isset($data['nomError'])) echo $data['adresseError']; ?>
                                        </span>
                                        <input type="text" placeholder="Entrer votre adresse" name="adresse" id="form2Example1" class="form-control" />
                                        <label class="form-label text-light" for="form2Example1">Adresse</label>
                                    </div>
                                    <div class="px-1">
                                        <span class="invalidFeedback">
                                            <?php if (isset($data['nomError'])) echo $data['dateError']; ?>
                                        </span>
                                        <input type="date" placeholder="Entrer votre Date de naissance" name="date" id="form2Example1" class="form-control" />
                                        <label class="form-label text-light" for="form2Example1">Date de naissance</label>
                                    </div>
                                </div>
                                <div class="form-outline d-flex mb-2">
                                    <div class="px-1">
                                        <span class="invalidFeedback">
                                            <?php if (isset($data['nomError'])) echo $data['passwordError']; ?>
                                        </span>
                                        <input type="password" placeholder="Entrer un Mot de Passe" name="password" id="form2Example1" class="form-control" />
                                        <label class="form-label text-light" for="form2Example1">Mot de Passe</label>
                                    </div>
                                    <div class="px-1">
                                        <span class="invalidFeedback">
                                            <?php if (isset($data['nomError'])) echo $data['confirmPasswordError']; ?>
                                        </span>
                                        <input type="password" placeholder="Entrer le même Mot de Passe" name="confirmPassword" id="form2Example1" class="form-control" />
                                        <label class="form-label text-light" for="form2Example1">Confirmer Mot de Passe</label>
                                    </div>
                                </div>

                                <div class="row mb-2">
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
                                    <button type="submit" name="submit" value="submit" class="btn btn-style" style="padding: 10px 46px 12px;">Sign up</button>
                                </div>
                                <!-- login buttons -->
                                <div class="text-center mt-3">
                                    <p class="text-light">Already a member? <a class="text-info" href="<?php echo URLROOT; ?>/users/login">Let's login!</a></p>
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
                                <h4>Let's Sign Up</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>