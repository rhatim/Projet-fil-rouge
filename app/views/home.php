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
        <!-- Modal delete-->
        <div class="modal fade" id="exampleModaldelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="exampleModalLabel">RESERVATION SUPPRESSION ALERT</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="px-4 py-3">
                        Voulez-vous supprimer cette réservation? <br>
                    </div>
                    <form action="<?php echo URLROOT; ?>/Reservationscontroller/delete" method="POST">
                        <input type="text" name="res_id" class="id" style="display:none ;">
                        <div class="px-4 py-3">
                            <input type="submit" value='Oui, supprimer cette réservation' class="my-2 w-100 btn btn-lg rounded-4 standard text-white ps"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="bg-yellow container-fluid px-4" style="height:87vh;">
            <div class="bg-whiter container-fluid">
                <div class="row g-3 pt-3">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="p-3 bg1card shadow-sm rounded d-flex justify-content-between">
                            <div>
                                <img style="height: 30px;" src="<?php echo URLROOT; ?>/public/img/icons/St.svg" alt="">
                                <p class="mb-0 py-2 ps">Students</p>
                            </div>
                            <div>
                                <h2 class="fw-bold mb-0 text-end">
                                    <?php
                                    if (count($data['students']) > 0) {
                                        $num_rows = count($data['students']);
                                        echo $num_rows;
                                    }
                                    ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="p-3 bg2card shadow-sm rounded d-flex justify-content-between">
                            <div>
                                <img style="height: 30px;" src="<?php echo URLROOT; ?>/public/img/icons/Co.svg" alt="">
                                <p class="mb-0 py-2 ps">Teachers</p>
                            </div>
                            <div>
                                <h2 class="fw-bold mb-0 text-end">
                                    <?php
                                    if (count($data['teachers']) > 0) {
                                        $num_rows = count($data['teachers']);
                                        echo $num_rows;
                                    }
                                    ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="p-3 bg3card shadow-sm rounded d-flex justify-content-between">
                            <div>
                                <img style="height: 30px;" src="<?php echo URLROOT; ?>/public/img/icons/Report.svg" alt="">
                                <p class="mb-0 py-2 ps">Courses</p>
                            </div>
                            <div>
                                <h2 class="fw-bold mb-0 text-end">
                                    <?php
                                    if (count($data['courses']) > 0) {
                                        $num_rows = count($data['courses']);
                                        echo $num_rows;
                                    }
                                    ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <?php if ($_SESSION['role'] == 'Admin') :  ?>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="p-3 bg4card shadow-sm rounded d-flex justify-content-between">
                                <div>
                                    <img style="height: 30px;" src="<?php echo URLROOT; ?>/public/img/icons/Pro.svg" alt="">
                                    <p class="mb-0 py-2 ps">Admins</p>
                                </div>
                                <div>
                                    <h2 class="fw-bold mb-0 text-end">
                                        <?php
                                        if (count($data['admins']) > 0) {
                                            $num_rows = count($data['admins']);
                                            echo $num_rows;
                                        }
                                        ?>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="row g-3 pt-5">
                    <h4 class="m-0 fw-bold py-1">Listes des Réservations</h4>

                    <hr class="my-2" />
                    <div class="row bg-transparent p-0" id="titles">
                        <div class="col-sm-3 col-lg-3 m-auto">
                            <p class=" m-0">Etudiant Nom & Présom</p>
                        </div>
                        <div class="col-sm-3 col-lg-3 m-auto">
                            <p class=" m-0">Cour Titre</p>
                        </div>
                        <div class="col-sm-3 col-lg-3 m-auto">
                            <p class=" m-0">Cour Matière</p>
                        </div>
                        <div class="col-sm-3 col-lg-1 m-auto">
                            <p class=" m-0">Actions</p>
                        </div>
                    </div>
                    <div style="overflow-y: scroll;">
                        <div style="height:70vh; padding:0;">
                            <?php if (count($data['reservation']) > 0) { ?>
                                <?php foreach ($data['reservation'] as $row) { ?>
                                    <div class="item row  ps px-0 bar mar py-2" id="info">
                                        <div style="display: none;">
                                            <p class="student_id"><?php echo $row->res_id ?></p>
                                        </div>
                                        <div class="col-3">
                                            <p style="font-size:12px;" class="text-nowrap m-0"><?php echo $row->std_name ?></p>
                                        </div>
                                        <div class="col-3">
                                            <p style="font-size:12px;" class="text-nowrap m-0 "><?php echo $row->crs_titre ?></p>
                                        </div>
                                        <div class="col-3">
                                            <p style="font-size:12px;" class="text-nowrap m-0"><?php echo $row->crs_matiere ?></p>
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

            document.querySelector('#exampleModaldelete .id').value = id;
        })
    })
</script>

<?php
require APPROOT . '/views/includes/footer.php';
?>