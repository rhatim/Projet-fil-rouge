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
                        <h4 class="m-0 fw-bold">Admins List</h4>
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="m-0 px-4" src="icons/doublearrows.svg" alt="">
                            <button class="my-2 w-100 btn btn-lg rounded-4 standard text-white ps" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter Nouveau Admin</button>
                            <!-- Modal add-->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ajouter Nouveau Admin From</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="px-4 py-3" id="form">
                                            <form action="<?php echo URLROOT; ?>/Admincontroller/add" method="POST" class="text-muted row g-3 needs-validation">
                                                <div class="col-md-6">
                                                    <label for="nom" class="form-label">Nom</label>
                                                    <input type="text" class="small-size form-control" name="nom" id="nom" placeholder="Entrer nom" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="prenom" class="form-label">Prénom</label>
                                                    <input type="text" class="small-size form-control" name="prenom" id="prenom" placeholder="Entrer prénom" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="small-size form-control" name="email" id="email" placeholder="Entrer email" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="password" class="form-label">Mot de passe</label>
                                                    <input type="password" class="small-size form-control" name="password" id="password" placeholder="Entrer password" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="role" class="form-label">Role</label>
                                                    <input type="text" class="small-size form-control" name="role" id="role" value="Admin">
                                                </div>
                                                <div class="col-12 mt-3 modal-footer text-center">
                                                    <button class="btn btn-primary" name="save" type="submit">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal delete-->
                            <div class="modal fade" id="exampleModaldelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-danger" id="exampleModalLabel">ADMIN DELETE ALERT</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="px-4 py-3">
                                            Do you really want to delete this admin? <br>
                                        </div>
                                        <form action="<?php echo URLROOT; ?>/Admincontroller/delete" method="POST">
                                            <input type="text" style="display: none;" name="id" class="id">
                                            <div class="px-4 py-3">
                                                <input type="submit" value='Yes, Delete this admin please' class="my-2 w-100 btn btn-lg rounded-4 standard text-white ps"></input>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="m-0" />
                    <div class="row bg-transparent p-0" id="titles">
                        <div class="col-sm-2 col-lg-2 m-auto">
                            <p class=" m-0">Nom</p>
                        </div>
                        <div class="col-sm-2 col-lg-2 m-auto">
                            <p class=" m-0">Prénom</p>
                        </div>
                        <div class="col-sm-3 col-lg-4 m-auto">
                            <p class=" m-0">Email</p>
                        </div>
                        <div class="col-sm-3 col-lg-2 m-auto">
                            <p class=" m-0">Role</p>
                        </div>
                        <div class="col-sm-2 col-lg-2 m-auto">
                            <p class="text-center m-0">Actions</p>
                        </div>
                    </div>
                    <div style="overflow-y: scroll;">
                        <div style="height:70vh; padding:0;">
                            <?php
                            if (count($data) > 0) {
                                foreach ($data as $row) {
                                    echo    '<div class="item row  ps px-0 bar mar py-2" id="info">
                                                    <div style="display: none;">
                                                        <p class="Admin_id">' . $row->ad_id . '</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <p style="font-size:12px;" class="text-nowrap m-0">' . $row->nom . '</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <p style="font-size:12px;" class="text-nowrap m-0">' . $row->prenom . '</p>
                                                    </div>
                                                    <div class="col-4">
                                                        <p style="font-size:12px;" class="text-nowrap m-0 ">' . $row->email . '</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <p style="font-size:12px;" class="text-nowrap m-0">' . $row->role  . '</p>
                                                    </div>
                                                    <div class="col-2 d-flex justify-content-center align-items-center" id="editer">
                                                        <a class="btn-delete" type="button" data-bs-toggle="modal" data-bs-target="#exampleModaldelete"><img style="width:22px;" class="px-1" src="' . URLROOT . '/public/img/icons/can.svg" alt=""></a>
                                                    </div>
                                                </div>';
                                }
                            } else {
                                echo '<div class="text-center">
                                <h1 class="pt-5">No Results Found For Admins</h1>
                                    </div>';
                            }
                            ?>
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