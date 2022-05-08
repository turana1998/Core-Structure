<?php
$categories=$CRUD->Select("category", true);
$subCategories=$CRUD->Select("subcategory", true);
$slug=new Slug;
if (isset($_POST["sub-category-add"])) {
    $_slug=$slug->Slugify($_POST["title"]);
    $column = '
      title=:title,
      slug=:slug,
      category_id=:category_id       
      ';
    if (!empty($_POST["title"])){
        $arr = [
            "title" => $_POST["title"],
            "slug" => $_slug,
            "category_id" => $_POST['category_id']
        ];
        $CRUD->INSERT("subcategory", $column,$arr);
        header("Location:index.php?link=subcategory-list&status=ok");
    }
    else{
        header("Location:index.php?link=subcategory-list&status=no");
    }


}