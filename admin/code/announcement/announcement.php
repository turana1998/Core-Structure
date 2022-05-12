
<?php
$categories=$CRUD->Select("category", true);
$announcements=$CRUD->Select("announcement", true);
$subCategories=$CRUD->Select("subcategory", true);
$slug=new Slug;
if (isset($_POST["announcement-add"])) {
    $column = '
      category_id=:category_id,
      subcategory_id=:subcategory_id,
      min_salary=:min_salary,
      max_salary=:max_salary,
      company=:company,
      min_age=:min_age,
      max_age=:max_age,
      education=:education,
      phone=:phone,
      email=:email,
      contact_person=:contact_person,
      requirement=:requirement,
      description=:description
      
      ';
        $arr = [
            "category_id" => $_POST["category_id"],
            "subcategory_id" => $_POST["subcategory_id"],
            "min_salary" => $_POST["min_salary"],
            "max_salary" => $_POST["max_salary"],
            "company" => $_POST["company"],
            "min_age" => $_POST["min_age"],
            "max_age" => $_POST["max_age"],
            "education" => $_POST["education"],
            "phone" => $_POST["phone"],
            "email" => $_POST["email"],
            "contact_person" => $_POST["contact_person"],
            "requirement" => $_POST["requirement"],
            "description" => $_POST["description"]

        ];
        $CRUD->INSERT("announcement", $column,$arr)?
            header("Location:index.php?link=announcement-list&status=ok"):
            header("Location:index.php?link=announcement-list&status=no");
}
