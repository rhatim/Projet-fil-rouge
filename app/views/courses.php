<?php
require APPROOT . '/views/includes/header.php';
?>
<div class="d-flex" id="wrapper">
    <?php
    require APPROOT . '/views/includes/sidebar.php';
    ?>
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <?php
        require APPROOT . '/views/includes/wrapperheader.php';
        // needs connection to database
        ?>
        <div class="bg-yellow container-fluid px-4" style="height:85vh;">
            <div class="bg-whiter container-fluid">
                <div style="height:80vh;" class="container-fluid px-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="m-0 fw-bold">Courses List</h4>
                        <div class="d-flex justify-content-center align-items-center">
                            <?php if ($_SESSION['role'] == 'Teacher' || $_SESSION['role'] == 'Admin') :  ?>
                                <img class="m-0 px-4" src="icons/doublearrows.svg" alt="">
                                <button class="my-2 w-100 btn btn-lg rounded-4 standard text-white ps" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter Nouveau Cour</button>
                            <?php endif; ?>
                            <!-- Reserver modal-->
                            <div class="modal fade" id="exampleModalres" tabindex="-1" aria-labelledby="exampleModalres" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-danger" id="exampleModalLabel">Course reservation Alert</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="px-4 py-3">
                                            Voulez-vous réserver ce cour? <br>
                                        </div>
                                        <form action="<?php echo URLROOT; ?>/Reservationscontroller/add" method="POST">
                                            <input type="text" style="display: none;" name="std_name" value="<?php echo $_SESSION['nom'] . ' ' . $_SESSION['prenom']; ?>" class="">
                                            <input type="text" style="display: none;" name="crs_titre" class="crs_titre">
                                            <input type="text" style="display: none;" name="crs_matiere" class="crs_matiere">
                                            <div class="px-4 py-3">
                                                <input type="submit" value='Oui, réserver ce cour' class="my-2 w-100 btn btn-lg rounded-4 standard text-white ps"></input>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal delete-->
                            <div class="modal fade" id="exampleModaldelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-danger" id="exampleModalLabel">COUR SUPPRESSION ALERT</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="px-4 py-3">
                                            Voulez-vous supprimer ce cour? <br>
                                        </div>
                                        <form action="<?php echo URLROOT; ?>/Coursescontroller/delete" method="POST">
                                            <input type="text" name="crs_id" class="id" style="display: none;">
                                            <div class="px-4 py-3">
                                                <input type="submit" value='Oui, supprimer ce cour' class="my-2 w-100 btn btn-lg rounded-4 standard text-white ps"></input>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Ajouter course-->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ajouter Nouveau cour Form</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="px-4 py-3" id="form">
                                            <form action="<?php echo URLROOT; ?>/Coursescontroller/add" method="POST" class="text-muted row g-3 needs-validation">
                                                <div class="col-md-6">
                                                    <label for="titre" class="form-label">Titre</label>
                                                    <input type="text" class="small-size form-control" name="titre" id="titre" placeholder="Entrer titre" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="prof" class="form-label">Professeur</label>
                                                    <input type="text" class="small-size form-control" name="prof" id="prof" placeholder="Entrer Professeur" value="<?php echo $_SESSION['nom'] ?>" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="niveau" class="form-label">Niveau</label>
                                                    <input type="text" class="small-size form-control" name="niveau" id="niveau" placeholder="Entrer niveau" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="subject" class="form-label">Matière</label>
                                                    <input type="text" class="small-size form-control" name="matiere" id="subject" placeholder="Entrer matière" required>
                                                </div>
                                                <div class="col-12 mt-3 modal-footer text-center">
                                                    <button class="btn btn-primary" name="save" type="submit">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="m-0" />
                    <div class="row bg-transparent p-0" id="titles">
                        <div class="col-sm-3 col-lg-2 m-auto">
                            <p class=" m-0">Titre</p>
                        </div>
                        <div class="col-sm-3 col-lg-1 m-auto">
                            <p class=" m-0">Professeur</p>
                        </div>
                        <div class="col-sm-3 col-lg-2 m-auto">
                            <p class=" m-0">Niveau</p>
                        </div>
                        <div class="col-sm-3 col-lg-2 m-auto">
                            <p class=" m-0">matière</p>
                        </div>
                        <div class="col-sm-3 col-lg-1 m-auto">
                            <p class=" m-0">Actions</p>
                        </div>
                    </div>
                    <div style="overflow-y: scroll;">
                        <div style="height:70vh; padding:0;">
                            <?php if (count($data) > 0) { ?>
                                <?php foreach ($data as $row) { ?>
                                    <div class="item row  ps px-0 bar mar py-2" id="info" style="background-color: #FEFBEC;">
                                        <div style="display: none;">
                                            <p class="student_id"><?php echo $row->crs_id ?></p>
                                        </div>
                                        <div class="col-2">
                                            <p style="font-size:12px;" class="text-nowrap m-0"><?php echo $row->titre ?></p>
                                        </div>
                                        <div class="col-1">
                                            <p style="font-size:12px;" class="text-nowrap m-0 "><?php echo $row->prof ?></p>
                                        </div>
                                        <div class="col-2">
                                            <p style="font-size:12px;" class="text-nowrap m-0"><?php echo $row->niveau ?></p>
                                        </div>
                                        <div class="col-2">
                                            <p style="font-size:12px;" class="text-nowrap m-0"><?php echo $row->matiere ?></p>
                                        </div>
                                        <div class="col-1 d-flex justify-content-center align-items-center" id="editer">
                                            <?php if ($_SESSION['role'] != 'Student') :  ?>
                                                <a class="btn-delete" type="button" data-bs-toggle="modal" data-bs-target="#exampleModaldelete"><img style="width:22px;" class="px-1" src="<?php echo URLROOT ?>/public/img/icons/can.svg" alt=""></a>
                                            <?php endif; ?>

                                            <?php if ($_SESSION['role'] == 'Student') :  ?>
                                                <a class="btn-delete" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalres"><img style="width:22px;" class="px-1" src="<?php echo URLROOT ?>/public/img/icons/pen.svg" alt=""></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } else { ?>
                                <div class="text-center">
                                    <h1 class="pt-5">No Results Found</h1>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.querySelectorAll('.btn-delete').forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            let item = e.target.closest('.item');
            let children = item.children;

            let id = children[0].children[0].textContent;
            let titre = children[1].children[0].textContent;
            let matiere = children[4].children[0].textContent;

            document.querySelector('#exampleModaldelete .id').value = id;
            document.querySelector('#exampleModalres .crs_titre').value = titre;
            document.querySelector('#exampleModalres .crs_matiere').value = matiere;

        })
    })
</script>
<?php
require APPROOT . '/views/includes/footer.php';
?>