<?php require_once  "./code/announcement/announcement.php"?>
<div class="main_content_iner ">
    <div class="container-fluid p-0 sm_padding_15px">
        <div class="row justify-content-center">

            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Elan</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="card-body">
                            <form action="#" method="POST">
                                <div class="row mb-3">

                                    <div class=" col-12">
                                        <label class="form-label" for="inputZip">Email:</label>
                                        <input type="email" class="form-control" id="inputZip"
                                               name="email">
                                    </div>
                                    <div class=" col-4 mt-3">
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupSelect01">Kateqoriya</label>
                                            <select name="category_id" class="form-select" id="inputGroupSelect01">
                                                <option value="">Seç</option>
                                                <?php foreach($categories as $category): ?>
                                                    <option value="<?= $category['id'] ?>"><?= $category['title'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                    </div>  <div class=" col-4 mt-3">
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupSelect01">Kateqoriya</label>
                                            <select name="subcategory_id" class="form-select" id="inputGroupSelect01">
                                                <option value="">Seç</option>
                                                <?php foreach($subCategories as $subcategory): ?>
                                                    <option value="<?= $subcategory['id'] ?>"><?= $subcategory['title'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                    </div>

                                </div>

                                <button name="announcement-add" type="submit" class="btn btn-primary">Elave et</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
