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
                                    <div class=" col-12 col-md-6 mt-3">
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupSelect01">Kateqoriya</label>
                                            <select onchange="GetCategory(this)" name="category_id" class="form-select" id="inputGroupSelect01">
                                                <option value="">Seç</option>
                                                <?php foreach($categories as $category): ?>
                                                    <option  value="<?= $category['id'] ?>"><?= $category['title'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                    </div>
                                    <div class=" col-12 col-md-6 mt-3">
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupSelect01">Kateqoriya</label>
                                            <select name="subcategory_id" class="form-select" id="subkategoriya">
                                            </select>
                                        </div>

                                    </div>
                                    <div class=" col-12 col-md-6 mt-3"">
                                        <label class="form-label" for="inputZip">Min Salary:</label>
                                        <input type="number" class="form-control" id="inputZip"
                                               name="min_salary">
                                    </div>
                                    <div class=" col-12 col-md-6 mt-3"">
                                        <label class="form-label" for="inputZip">Max Salary:</label>
                                        <input type="number" class="form-control" id="inputZip"
                                               name="max_salary">
                                    </div>
                                    <div class=" col-12 col-md-6 mt-3"">
                                        <label class="form-label" for="inputZip">Company name:</label>
                                        <input type="text" class="form-control" id="inputZip"
                                               name="company">
                                     </div>
                                    <div class=" col-12 col-md-6 mt-3"">
                                        <label class="form-label" for="inputZip">Min Age:</label>
                                        <input type="number" class="form-control" id="inputZip"
                                               name="min_age">
                                    </div>
                                    <div class=" col-12 col-md-6 mt-3"">
                                    <label class="form-label" for="inputZip">Max Age:</label>
                                    <input type="number" class="form-control" id="inputZip"
                                           name="max_age">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <label class="form-label" for="inputZip">Education</label>
                                        <textarea name="education" id='summernote'></textarea>
                                    </div>
                                    <div class=" col-12 col-md-6 mt-3"">
                                    <label class="form-label" for="inputZip">Phone:</label>
                                    <input type="tel" class="form-control" id="inputZip"
                                           name="phone">
                                     </div>
                                    <div class=" col-12 col-md-6 mt-3"">
                                    <label class="form-label" for="inputZip">Email:</label>
                                    <input type="email" class="form-control" id="inputZip"
                                           name="email">
                                    </div>
                                    <div class=" col-12 col-md-6 mt-3"">
                                    <label class="form-label" for="inputZip">Contact Person:</label>
                                    <input type="text" class="form-control" id="inputZip"
                                           name="contact_person">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <label class="form-label" for="inputZip">Requirement</label>
                                        <textarea name="requirement" ></textarea>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <label class="form-label" for="inputZip">Dequirement</label>
                                        <textarea name="description" id='summernote'></textarea>
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
