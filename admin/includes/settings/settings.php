<?php require_once  "./code/settings.php"?>
<div class="main_content_iner ">
    <div class="container-fluid p-0 sm_padding_15px">
        <div class="row justify-content-center">

            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Tənzimləmələr</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="card-body">
                            <form  enctype="multipart/form-data" action="#" method="POST">
                                <img  height="75px" src="../<?=$settings["logo"]?>" >
                                <input type="hidden" name="klogo" value="<?= $settings["logo"]?>">
                                <div class="row mb-3">

                                    <div class="col-md-6">
                                        <label class="form-label" for="inputEmail4">Keywords</label>
                                        <textarea name="keywords" class="form-control" maxlength="225" rows="3"
                                                  id="maxlength-textarea" ><?=$settings["keywords"]?></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="inputEmail4">Description</label>
                                        <textarea  class="form-control" maxlength="225" rows="3" name="description"
                                                  id="maxlength-textarea"> <?=$settings["description"]?></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label" for="inputAddress">Title</label>
                                        <input type="text" class="form-control" id="inputAddress"
                                               value="<?=$settings["title"]?>" name="title">
                                    </div>
                                    <div class=" col-md-6">
                                        <label class="form-label" for="inputPassword4">Logo</label>
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                            <input type="file" class="form-control" id="inputGroupFile01"
                                            name="logo">
                                        </div>
                                    </div>
                                    <div class=" col-md-6">
                                        <label class="form-label" for="inputPassword4">FavIcon</label>
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                            <input type="file" class="form-control" id="inputGroupFile01"
                                            name="favicon">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="inputAddress">Email</label>
                                        <input type="email" class="form-control" id="inputAddress"
                                               value="<?=$settings["email"]?>" name="email">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="inputAddress2">Address</label>
                                        <input type="text" class="form-control" id="inputAddress2"
                                               value="<?=$settings["location"]?>" name="location">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class=" col-md-3">
                                        <label class="form-label" for="inputCity">Facebook</label>
                                        <input type="text" class="form-control" id="inputCity"
                                        value="<?=$settings["facebook"]?>" name="facebook">
                                    </div>

                                    <div class=" col-md-3">
                                        <label class="form-label" for="inputZip">Instagram</label>
                                        <input type="text" class="form-control" id="inputZip"
                                        value="<?=$settings["instagram"]?>" name="instagram">
                                    </div>
                                    <div class=" col-md-3">
                                        <label class="form-label" for="inputZip">Linkedin</label>
                                        <input type="text" class="form-control" id="inputZip"
                                        value="<?=$settings["linkedin"]?>" name="linkedin">
                                    </div>
                                    <div class=" col-md-3">
                                        <label class="form-label" for="inputZip">Phone</label>
                                        <input type="text" class="form-control" id="inputZip"
                                        value="<?=$settings["phone"]?>" name="phone">
                                    </div>
                                </div>

                                <button name="settings" type="submit" class="btn btn-primary">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>