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
                        <h4 class="my-3 fw-bold">Students List</h4>
                    </div>
                    <hr class="m-0" />
                    <div class="row bg-transparent p-0" id="titles">
                        <div class="col-sm-3 col-lg-3 m-auto">
                            <p class=" m-0">Nom</p>
                        </div>
                        <div class="col-sm-3 col-lg-2 m-auto">
                            <p class=" m-0">Prénom</p>
                        </div>
                        <div class="col-sm-3 col-lg-3 m-auto">
                            <p class=" m-0">Email</p>
                        </div>
                        <div class="col-sm-3 col-lg-2 m-auto">
                            <p class=" m-0">Phone</p>
                        </div>
                        <div class="col-sm-3 col-lg-2 m-auto">
                            <p class=" m-0">Date de naissance</p>
                        </div>
                    </div>
                    <div style="overflow-y: scroll;">
                        <div style="height:70vh; padding:0;">
                            <?php
                            if (count($data) > 0) {
                                foreach ($data as $row) {
                                    echo    '<div class="item row  ps px-0 bar mar py-2" id="info">
                                                    <div style="display: none;">
                                                        <p class="student_id">' . $row->std_id . '</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p style="font-size:12px;" class="text-nowrap m-0">' . $row->nom . '</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <p style="font-size:12px;" class="text-nowrap m-0 ">' . $row->prenom . '</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p style="font-size:12px;" class="text-nowrap m-0">' . $row->email  . '</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <p style="font-size:12px;" class="text-nowrap m-0">' . $row->phone  . '</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <p style="font-size:12px;" class="text-nowrap m-0">' . $row->date  . '</p>
                                                    </div>
                                                </div>';
                                }
                            } else {
                                echo '<div class="text-center">
                                <h1 class="pt-5">No Results Found For Students</h1>
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