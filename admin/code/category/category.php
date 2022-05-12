
<?php
$categories=$CRUD->Select("category", true);
$slug=new Slug;
$titleErr = "";
if (isset($_POST["category-add"])) {
    if (empty($_POST["title"])) {
        $titleErr = "Name is required";
    } else {
        $slugs=$slug->Slugify($_POST["title"]);
        $title = test_input($_POST["title"]);
            $column = '
              title=:title,
              slug=:slug       
             ';
            $arr = [
                "title" =>$title,
                "slug" => $slugs
            ];
            $CRUD->INSERT("category", $column,$arr);
            header("Location:index.php?link=category-list&status=ok");

    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}