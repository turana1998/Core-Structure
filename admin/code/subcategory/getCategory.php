<?php
require_once 'C:\xampp\htdocs\core\db.php';

require_once 'C:\xampp\htdocs\core\admin\code\crud.php';

if(isset($_POST["sub"])){
    $id = $_POST["id"];
    $where = "where category_id=:id";
    $arr = ["id"=>$id];
    $data = $CRUD->SELECT("subcategory",1,$where,$arr,"title");
    for($i=0;$i<count($data);$i++){
        array_push($arr,$data[$i]["title"]);
    }
    $data=json_encode($arr);
    print_r($data);
}