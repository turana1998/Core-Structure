
<?php
$categories=$CRUD->Select("category", true);
$announcements=$CRUD->Select("announcement", true);
$subCategories=$CRUD->Select("subcategory", true);
$slug=new Slug;
if (isset($_POST["announcement-add"])) {
    $column = '
      email=:email,
      category_id=:category_id,
      subcategory_id=:subcategory_id
      ';
        $arr = [
            "email" => $_POST["email"],
            "category_id" => $_POST["category_id"],
            "subcategory_id" => $_POST["subcategory_id"]

        ];
        $CRUD->INSERT("announcement", $column,$arr)?
            header("Location:index.php?link=announcement-list&status=ok"):
            header("Location:index.php?link=announcement-list&status=no");
}
