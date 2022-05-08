
<?php
$categories=$CRUD->Select("category", true);
$slug=new Slug;
if (isset($_POST["category-add"])) {
    $slugs=$slug->Slugify($_POST["title"]);
    $column = '
      title=:title,
      slug=:slug       
      ';
    if (!empty($_POST["title"])){
        $arr = [
            "title" => $_POST["title"],
            "slug" => $slugs
        ];
        $CRUD->INSERT("category", $column,$arr);
        header("Location:index.php?link=category-list&status=ok");
    }
    else{
        header("Location:index.php?link=category-list&status=no");
    }


}
