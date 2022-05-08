<?php require_once "./code/category/category.php";
require_once "./code/delete.php";
require_once "./code/category/update.php"
?>
<!-- Update -->
<div class="modal fade" id="editcategory" tabindex="-1" aria-labelledby="editcategory" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST">
            <div class="modal-body">

                    <input id="id" name="id" type="hidden" class="form-control">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Categoriya:</label>
                        <input id="title" name="title" type="text" class="form-control">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button name="edit_cat" type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Data table</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header">
                                <h4>Table</h4>
                                <div class="box_right d-flex lms_block">
                                    <div class="serach_field_2">
                                        <div class="search_inner">
                                            <form Active="#">
                                                <div class="search_field">
                                                    <input type="text" placeholder="Search content here...">
                                                </div>
                                                <button type="submit"><i class="ti-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="add_button ms-2">
                                        <a href="<?= $BASE_URL ?>?link=category-add" class="btn_1">Add New</a>
                                    </div>
                                </div>
                            </div>
                            <div class="QA_table mb_30">

                                <table class="table lms_table_active ">
                                    <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Operations</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($categories as $key => $value) {
                                        ?>
                                        <tr class="CatSiyahi">
                                            <td ><a href="#"
                                                               class="question_content"> <?= $value["id"] ?></a></td>
                                            <td><?= $value["title"] ?></td>
                                            <td><?= $value["slug"] ?></td>
                                            <td>
                                                <div class="d-flex">
                                                    <button onclick="KatRedakte(<?= $value['id'] ?>,<?= $key ?> )"
                                                            data-bs-toggle="modal" data-bs-target="#editcategory"
                                                            class="btn btn-outline-success mb-3 me-3">Edit
                                                    </button>
                                                    <button onclick='KatSil(<?= $value["id"] ?>,"category")' type="button"
                                                            class="btn btn-outline-danger mb-3 delete-cat">Delete
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script>
                // $(".delete-cat").click()
            </script>