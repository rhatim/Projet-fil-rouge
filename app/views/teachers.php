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
                        <h4 class="m-0 fw-bold">listes des professeurs</h4>
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="m-0 px-4" src="icons/doublearrows.svg" alt="">
                            <button class="my-2 w-100 btn btn-lg rounded-4 standard text-white ps" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD NEW TEACHER</button>
                            <!-- Modal add-->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add New Teacher Form</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="px-4 py-3" id="form">
                                            <form action="<?php echo URLROOT; ?>/Teachercontroller/add" method="POST" class="text-muted row g-3 needs-validation">
                                                <div class="col-md-6">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text" class="small-size form-control" name="name" id="name" placeholder="Enter name" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="gender" class="form-label">Gender</label>
                                                    <input type="text" class="small-size form-control" name="gender" id="gender" placeholder="Choose gender" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="class" class="form-label">Class</label>
                                                    <input type="text" class="small-size form-control" name="class" id="class" placeholder="Enter class" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="subject" class="form-label">Subject</label>
                                                    <input type="text" class="small-size form-control" name="subject" id="subject" placeholder="Enter subject" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="phone" class="form-label">Phone</label>
                                                    <input type="text" class="small-size form-control" name="phone" id="phone" placeholder="Enter phone">
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
                                            <h5 class="modal-title text-danger" id="exampleModalLabel">TEACHER DELETE ALERT</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="px-4 py-3">
                                            Do you really want to delete this teacher? <br>
                                        </div>
                                        <form action="<?php echo URLROOT; ?>/Teacherscontroller/delete" method="POST">
                                            <input type="text" style="display: none;" name="id" class="id">
                                            <div class="px-4 py-3">
                                                <input type="submit" value='Yes, Delete this teacher please' class="my-2 w-100 btn btn-lg rounded-4 standard text-white ps"></input>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="m-0" />
                    <div class="row bg-transparent p-0" id="titles">
                        <div class="col-sm-3 col-lg-1 m-auto">
                            <p class=" m-0">Nom</p>
                        </div>
                        <div class="col-sm-3 col-lg-1 m-auto">
                            <p class=" m-0">Prénom</p>
                        </div>
                        <div class="col-sm-3 col-lg-2 m-auto">
                            <p class=" m-0">Email</p>
                        </div>
                        <div class="col-sm-3 col-lg-2 m-auto">
                            <p class=" m-0">Phone</p>
                        </div>
                        <div class="col-sm-3 col-lg-2 m-auto">
                            <p class=" m-0">Adresse</p>
                        </div>
                        <div class="col-sm-3 col-lg-1 m-auto">
                            <p class=" m-0">Matière</p>
                        </div>
                        <div class="col-sm-3 col-lg-1 m-auto">
                            <p class=" m-0">Actions</p>
                        </div>
                    </div>
                    <div style="overflow-y: scroll;">
                        <div style="height:70vh; padding:0;">
                            <?php
                            if (count($data) > 0) {
                                foreach ($data as $row) {
                                    echo    '<div class="item row  ps px-0 bar mar py-2" id="info" style="background-color: #FEF6FB;">
                                                    <div style="display: none;">
                                                        <p class="Teacher_id">' . $row->tch_id . '</p>
                                                    </div>
                                                    <div class="col-1">
                                                        <p style="font-size:12px;" class="text-nowrap m-0">' . $row->nom . '</p>
                                                    </div>
                                                    <div class="col-1">
                                                        <p style="font-size:12px;" class="text-nowrap m-0 ">' . $row->prenom . '</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <p style="font-size:12px;" class="text-nowrap m-0">' . $row->email  . '</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <p style="font-size:12px;" class="text-nowrap m-0">' . $row->phone  . '</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <p style="font-size:12px;" class="text-nowrap m-0">' . $row->adresse  . '</p>
                                                    </div>
                                                    <div class="col-1">
                                                        <p style="font-size:12px;" class="text-nowrap m-0">' . $row->matiere  . '</p>
                                                    </div>
                                                    <div class="col-1 d-flex justify-content-center align-items-center" id="editer">
                                                        <a class="btn-delete" type="button" data-bs-toggle="modal" data-bs-target="#exampleModaldelete"><img style="width:22px;" class="px-1" src="' . URLROOT . '/public/img/icons/can.svg" alt=""></a>
                                                    </div>
                                                </div>';
                                }
                            } else {
                                echo '<div class="text-center">
                                    <h1 class="pt-5">No Results Found For Teachers</h1>
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