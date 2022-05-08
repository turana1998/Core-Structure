
<?php
$settings=$CRUD->Select("settings");
//print_r($data);
if (isset($_POST["settings"])) {
    $olcu = $_FILES["logo"]["size"];
    $tip = $_FILES["logo"]["type"];
    $tmp = $_FILES["logo"]["tmp_name"];
    $ad = $_FILES["logo"]["name"];
    $klogo = $_POST["klogo"];
    $tipler = ["image/png","image/jpeg","image/gif"];
    $yol = "../images/logo/".$ad;
    if ($olcu > 0 && !in_array($tip,$tipler)) {
        header("Location:index.php?status=no");
        exit;
    }
     $column = '
      title=:title,
      description=:descc,
      keywords=:keywords,        
      email=:email,          
      location=:location,          
      facebook=:facebook,         
      instagram=:instagram,         
      linkedin=:linkedin,         
      phone=:phone,
      logo=:logo     
      ';
    $arr = [
        "title" => $_POST["title"],
        "descc" => $_POST["description"],
        "keywords" => $_POST["keywords"],
        "email" => $_POST["email"],
        "location" => $_POST["location"],
        "facebook" => $_POST["facebook"],
        "instagram" => $_POST["instagram"],
        "linkedin" => $_POST["linkedin"],
        "phone" => $_POST["phone"],
        "logo"=>$olcu>0 ? substr($yol,3) : $klogo
    ];

    if ($CRUD->UPDATE("settings", $column, null, $arr)) {
        move_uploaded_file($tmp,$yol);
        header("Location:index.php?status=ok");
    } else {
        header("Location:index.php?status=no");
        exit;
    }
}
