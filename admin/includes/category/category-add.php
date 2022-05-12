<?php require_once  "./code/category/category.php"
?>
<div class="main_content_iner ">
    <div class="container-fluid p-0 sm_padding_15px">
        <div class="row justify-content-center">

            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">kateqoriya</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="card-body">
                            <form action="#" method="POST">
                               <div class="row mb-3">

                                    <div class=" col-12 col-lg-6">
                                        <label class="form-label" for="inputZip">Ad:
                                            <span class="error">* <?php echo $titleErr;?></span>
                                        </label>
                                        <input type="text" class="form-control" id="inputZip"
                                             name="title">

                                    </div>
                                </div>

                                <button name="category-add" type="submit" class="btn btn-primary">Elave et</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
