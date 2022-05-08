<?php
require_once 'C:\xampp\htdocs\core\db.php';

require_once 'C:\xampp\htdocs\core\admin\code\crud.php';

if(isset($_POST["ks"])){
    $id = $_POST["id"];
    $page=$_POST["page"];
    echo $id;
    if($id){
        $CRUD->DELETE($page,$_POST["id"]);
    }
}